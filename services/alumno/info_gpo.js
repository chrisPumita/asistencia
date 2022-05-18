$(document).ready(function() {
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

function creaGrafico(datos) {
    var asi = datos.filter(value => parseInt(value.confirmada) == 1);
    var fal = datos.filter(value => parseInt(value.confirmada) == -1);
    var ret = datos.filter(value => parseInt(value.confirmada) == 0);

    var totalAsistencias = asi.length;
    var totalFaltas = fal.length;
    var totalRetardos = ret.length;

    $("#lblAsi").html(totalAsistencias);
    $("#lblFal").html(totalFaltas);
    $("#lblRet").html(totalRetardos);

    var options = {
        series: [totalAsistencias, totalFaltas, totalRetardos],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['ASISTENCIAS', 'FALTAS', 'RETARDOS'],
        colors: ['#15850d', '#ce2121', '#ff8300'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };
    var chart = new ApexCharts(document.querySelector("#circularGrapfic"), options);
    chart.render();
}

function consultaPaseLista() {
    consultaPasesListaAlumno("GRUPO",ID_GPO).then(result =>{
        let pases = result.data;
        creaGrafico(pases);
        let template = ``;
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
                let justificante = pase.url_justificante != null ? `<a class="btn btn-outline-info btn-sm" href="${pase.url_justificante}" target="_blank"><i class="far fa-eye"></i> Ver</a><br>`+ (pase.estatus_rev_just === "0" ? `Aun no revisado`:`Revisado`)
                    :` - `;
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
                                            <td data-label="">${pase.fecha}</td>
                                            <td data-label="">${paseInfo}</td>
                                            <td data-label="">${justificante} </td>
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