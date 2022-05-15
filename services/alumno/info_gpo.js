$(document).ready(function() {
    console.log("Informacion de grupo "+ ID_GPO);
    consultaGpo();
    consultaPaseLista();
});

function consultaGpo() {
    consutaInsc(ID_GPO).then(
        function (result) {
            let template = ``;
            let grupos = result.data;
            if (grupos.length == 1){
                let gpo = grupos[0];
                template = `<div class="card-body">
                                        <div class="row text-center">
                                            <h5 class="card-title">${gpo.materia} ${gpo.grupo}</h5>
                                            <h6>${gpo.carrera}</h6>
                                        </div>
                                        <div class="row text-center">
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item">${gpo.tipo} ${gpo.nombre_periodo}</li>
                                              <li class="list-group-item">${gpo.no_clases} Clases</li>
                                              <li class="list-group-item">${gpo.dias}</li>
                                              <li class="list-group-item">Asistencia Minima: ${gpo.porcentaje_min}%</li>
                                            </ul>
                                        </div>
                                    </div>`;
                $("#cardInfo").html(template);
            }
            else{
                window.location.href = "./";
            }
        }
    )
}

function consultaPaseLista() {
    consultaPasesListaAlumno("GRUPO",ID_GPO).then(result =>{
        let pases = result.data;
        let template = ``;
        console.log(pases);
        if (pases.length > 0) {
            template += `<table class="table table-bordered order-table display nowrap table-responsive "
                                       id="paseRealizado">
                                    <thead>
                                    <tr class="text-center">
                                        <th>INICIO</th>
                                        <th>ASISTENCIA</th>
                                        <th>JUSTIFICANTE</th>
                                    </tr>
                                    </thead>
                                    <tbody id="">`;
            pases.forEach(pase=>{
                console.log(pase)
                let paseInfo = "";
                switch (pase.confirmada) {
                    case "1":
                        paseInfo = '<i class="fas fa-check-circle text-success"></i> Asistencia';
                        break;
                    case "-1":
                        paseInfo = '<i class="fas fa-times-circle text-danger"></i> Falta';
                        break;
                    case "0":
                        paseInfo = '<i class="fas fa-clock text-warning"></i> Retardo';
                        break;
                }
                template += `
                                        <tr class="text-center">
                                            <td data-label="">${pase.fechaInicioPL}</td>
                                            <td data-label="">${paseInfo}</td>
                                            <td data-label="">Ver</td>
                                        </tr>`;
            });

            template += `
                                    </tbody>
                                </table>`;

        }
        else{
            template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>No hay pases de lista</strong> Este profesor no ha realizado pases de lista aún.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
        }
        $("#containerTbl").html(template);
    })
}