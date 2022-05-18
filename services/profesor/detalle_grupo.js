$(document).ready(function() {
    preCargaAlumnos();
    consultaGpo();
    consultaUltimosPaseLista();
});

function consultaGpo() {
    cargaGruposProfe(ID_GPO).then(
        function (result) {
            let template = ``;
            let titulo = ``;
            let grupos = result.data;
            if (grupos.length == 1){
                let gpo = grupos[0];
                titulo = ` <h4 class="mb-0">${gpo.materia}</h4>
                        <h6 class="mb-0"><strong>Grupo ${gpo.grupo}</strong></h6>
                        <cite>${gpo.carrera}</cite>`;
                template = `<div class="row">
                                            <div class="col-12 col-md-5 mb-2">
                                                <div class="row">
                                                    <p class="card-text mb-0">Min Asistencia: <strong>${gpo.porcentaje_min}%</strong></p>
                                                    <p class="card-text mb-0"><strong>${gpo.puntaje_final}%</strong> / calificación:
                                                        </p>
                                                    <h6 class="card-text mb-0 text-muted">Del ${gpo.fecha_inicio}</h6>
                                                    <h6 class="card-text mb-0 text-muted">Al ${gpo.fecha_fin}</h6>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 text-center">
                                                <div class="row">
                                                    <h5 class="card-text mb-0 text-muted">${gpo.no_clases} clases</h5>
                                                    <h6 class="card-text mb-0 text-muted"><strong>${gpo.dias}</strong></h6>
                                                </div>

                                                <div class="row mt-3">
                                                <!-- 
                                                <div class="col">
                                                        <div class=""
                                                             style="display: flex;justify-content: flex-start;">
                                                            <button type="button"
                                                                    class="btn btn-primary btn-sm fontsizeletrabtn btn_ajustable">
                                                                <i class="fas fa-print"></i>
                                                                Imprimir
                                                            </button>
                                                        </div>
                                                    </div>
                                                
                                                    
                                                    <div class="col">
                                                        <div class="" style="display: flex;justify-content: flex-end;">
                                                            <button type="button" class="btn btn-primary btn-sm fontsizeletrabtn btn_ajustable"
                                                                    data-bs-toggle="modal"  data-bs-target="#modal_editaGrupo">Editar
                                                            </button>
                                                        </div>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>
                                        </div>`;
                $("#cardInfo").html(template);
                $("#tituloGrupo").html(titulo);
            }
            else{
                window.location.href = "./";
            }
        }
    )
}

function preCargaAlumnos() {
    cargaLista_pase_lista(ID_GPO,"NONE",true).then(function (result) {
        buildTableList(result.data)
    })
}

function buildTableList(lista) {
    let template = ``;
    if (lista.length >0) {
        let contador = 0;
        lista.forEach(
            (alumno)=>
            {
                let n_asi = parseInt(alumno.count_asi);
                let n_fal = parseInt(alumno.count_fal);
                let n_ret = parseInt(alumno.count_ret);
                let total = n_asi + n_fal + n_ret;
                let por_asi = (n_asi*100)/total;
                let por_fal = (n_fal*100)/total;
                let por_ret = (n_ret*100)/total;
                contador++;
                let baja = alumno.estatus_alumno == "0" ? '<i class="fas fa-frown text-danger"></i> BAJA':"";
                template += `<div class="card mt-1 ">
                                <div class="card-body">
                                    <div class="row>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-1 d-flex justify-content-center align-items-center fs-3">${contador}</div>
                                            <div class="col-2 col-sm-1 d-flex justify-content-center align-items-center">
                                                <img src="${alumno.avatar}" alt="Avatar" class="avatar_list p-1">
                                            </div>
                                            <div class="col justify-content-center">
                                                <h6><strong>${alumno.app} ${alumno.apm} ${alumno.nombre}</strong></h6>
                                                ${baja}
                                                <div class="row">
                                                        <div class="col-12 col-md-4 text-md-center text-start"
                                                             style="text-align: initial;" >
                                                            <i class="fas fa-check-circle me-3 text-success"></i>
                                                            ${alumno.count_asi} Asistencias
                                                        </div>
                                                        <div class="col-12 col-md-4 text-md-center text-start"
                                                             style="text-align: initial;">
                                                            <i class="fas fa-times-circle me-3 text-danger"></i>
                                                            ${alumno.count_fal} Faltas
                                                        </div>
                                                        <div class="col-12 col-md-4 text-md-center text-start"
                                                             style="text-align: initial;">
                                                            <i class="far fa-clock me-3 text-warning"></i>
                                                            ${alumno.count_ret} Retardos
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-6 col-md-2">
                                                <h6 class="text-muted mb-0"><strong>${por_asi.toFixed(2)}% Asistencia</strong></h6>
                                                <div class="progress">
                                                  <div class="progress-bar bg-success" role="progressbar" style="width: ${por_asi}%" aria-valuenow="${por_asi}" aria-valuemin="0" aria-valuemax="100"></div>
                                                  <div class="progress-bar bg-danger" role="progressbar" style="width: ${por_fal}%" aria-valuenow="${por_fal}" aria-valuemin="0" aria-valuemax="100"></div>
                                                  <div class="progress-bar bg-warning" role="progressbar" style="width: ${por_ret}%" aria-valuenow="${por_ret}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
<!--

                                            <div class="col-6 col-md-2">
                                                <button type="button"
                                                        class="btn btn-success btn-sm fontsizeletrabtn btn_ajustable"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_reporte_individual">Reporte
                                                    individual
                                                </button>
                                            </div>
-->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>`;
            }
        );
    }
    else{
        template = `<div class="alert alert-warning" role="alert">
           No hay alumnos registrados. Comparta el codigo del grupo.
      </div>`
    }
    $("#listContainer").html(template);
}

function consultaUltimosPaseLista(filtro) {
    historialPaseLista("GRUPO",ID_GPO).then(function (result) {
        let template = ``;
        let pases = result.data;
        let contador = 0;
        estadisticasCirculo(result.data);
        if(pases.length > 0){

            template += `<table class="table table-bordered order-table display nowrap table-responsive mt-3" id="tableEquiposA">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>FECHA</th>
                                    <th>ASISTENCIAS</th>
                                    <th>FALTAS</th>
                                    <th>RETARDOS</th>
                                    <th>DETALLES</th>
                                </tr>
                                </thead>
                                <tbody id="">
                               `;
            pases.forEach(pase=>{
                let por_asi =0;
                let por_fal =0;
                let por_ret = 0;
                let total = 0;
                let graficos = ``;

                    let n_asi = parseInt(pase.asistencias);
                    let n_fal = parseInt(pase.faltas);
                    let n_ret = parseInt(pase.retardos);
                    total = n_asi + n_fal + n_ret;
                    if(total>0){
                        por_asi = (n_asi*100)/total;
                        por_fal = (n_fal*100)/total;
                        por_ret = (n_ret*100)/total;
                        graficos = `<h6 class="text-muted mb-0"><strong>${por_asi.toFixed(2)}% Asistencia</strong></h6>
                                    <div class="progress">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: ${por_asi}%" aria-valuenow="${por_asi}" aria-valuemin="0" aria-valuemax="100"></div>
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: ${por_fal}%" aria-valuenow="${por_fal}" aria-valuemin="0" aria-valuemax="100"></div>
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: ${por_ret}%" aria-valuenow="${por_ret}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>`;
                    }else{
                        graficos = `<button type="button" class="btn btn-warning"  onClick="revisaPaseLista(${pase.id_grupo},${pase.id_pase},'THIS_DATE','${pase.fecha}',)">Pendiente</button>`;
                    }
                contador++;
                template += `<tr class="text-center">
                                    <td>${contador}</td>
                                    <td data-label=""> ${pase.fecha}  </td>
                                    <td data-label=""> <i class="fas fa-check-circle me-3 text-success"></i>
                                                            ${pase.asistencias} Asistencias  </td>
                                    <td data-label=""><i class="fas fa-times-circle me-3 text-danger"></i>
                                                            ${pase.faltas} Faltas  </td>
                                    <td data-label="">  <i class="far fa-clock me-3 text-warning"></i>
                                                            ${pase.retardos} Retardos  </td>
                                    <td>
                                        ${graficos}
                                    </td>
                                </tr>`;
            })

            template += ` </tbody>
                            </table>`;
        }
        else{
            template = `<div class="alert alert-primary" role="alert">
                          No se han realziado pases de lista<a href="./mis_grupos.php" class="alert-link"> Revise sus grupos</a> e inicie nuevo pase de lista
                        </div>`;
        }
        $("#containerHistorial").html(template);
    })
}

function estadisticasCirculo(datos) {
    var totalAsistencias = datos.reduce((sum, value) => ( sum + parseInt(value.asistencias) ), 0);
    var totalFaltas = datos.reduce((sum, value) => ( sum + parseInt(value.faltas) ), 0);
    var totalRetardos = datos.reduce((sum, value) => ( sum + parseInt(value.retardos) ), 0);
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
                    width: 380
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