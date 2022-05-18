$(document).ready(function() {
    cargaPaseLista();
});

function cargaPaseLista() {
    consultaPasesListaAlumno("ALL",0).then(result =>{
        buildTablHtml(result.data);
    });
}

function buildTablHtml(grupos) {
    const grouped = _.groupBy(grupos, car => car.materia);
   // lodasgh js library
    let template = ``;
    if (grupos.length >0){
        _.forEachRight(grouped, function(grupo) {
            console.log(grupo);
            template += `<div class="row">
                            <h6><strong>${grupo[0].materia}</strong> - Grupo ${grupo[0].grupo}</h6>
                            <table class="table table-bordered order-table display nowrap table-responsive mb-3"
                                   id="tableEquiposA">
                                <thead>
                                <tr class="text-center">
                                    <th>FECHA</th>
                                    <th>PASE</th>
                                    <th>Justificante</th>
                                    <th>NOTAS</th>
                                </tr>
                                </thead>
                                <tbody id="">`;


            _.forEach(grupo, function(pase) {
                console.log(pase);
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
                template += `<tr class="text-center">
                                        <td data-label="">${pase.fecha}</td>
                                        <td data-label="">${paseInfo}</td>
                                        <td data-label="">${justificante}</td>
                                        <td data-label="">${pase.log}<br>${pase.notas}<</td>
                                    </tr>`;
            });

            template += `</tbody>
                            </table>
                        </div>`;
        });
    }
    else{
        template = ``;
    }
    $("#containerTbl").html(template);
}


