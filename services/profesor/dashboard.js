$(document).ready(function() {
    console.log("DAASHBOARD");
    loadPeriodos("LAST");
    consultaUltimosPaseLista("LAST");
    cargaGruposLista("TODAY");
    cargaJustificantes();
});

//descargar los periodos realizados
$("#frm_periodo_update_insert").submit(function (event)
{
    event.preventDefault();
    let periodo =$("#nombre_periodo").val();
    if (periodo === ""){
        mensajeAlerta("warning","Este campo es olbligatorio, escriba un periodo por\nejemplo:\n Ciclo Escolar 2022-2023, 2022-1, 2022-2, etc","Escriba el Periodo")
    }
    else
    {
        $.ajax({
            type: "POST",
            url: "../webhook/profesor_new_update_periodo.php",
            data: $('#frm_periodo_update_insert').serialize(),
            dataType: "json",
            success: function (result) {
                if(result.response=="1"){
                    $('#frm_periodo_update_insert')[0].reset();
                    mensajeAlerta(result.tipo,result.mensaje, result.titulo);
                    $("#modal_periodos").modal("hide");
                    loadPeriodos("LAST");
                }
                else{
                    let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error al iniciar</strong><p>Los datos no se pudieron procesar</p>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                    $("#nombre_periodo").focus();
                    $('#resp').html(alerta).show(200).delay(2500).hide(200);
                }
            },
            error: function(result){
                alert(result);
            }
        })
    }
});

function loadPeriodos(filtro) {
    cargaPeriodos(filtro).then(function (response) {
        buildHTMLSelectPeriodos(response.data);
        buildTblPeriodos(response.data)
    })
}

function cargaGruposLista(filtro) {
    cargaGruposProfe(filtro).then(function (response) {
        let LISTA_DESP = filterItems("LUN",response.data);
        buildHTMLSelectGrupos(response.data);
        buildGridGruposHoy(LISTA_DESP);
    })
}

function buildTblPeriodos(LISTA) {
    let template = ``;
    if (LISTA.length >0) {
        template = `<h6>Seleccione un périodo para editar la información:</h6>
                    <div class="mb-3 table-responsive">
                        <table class="table table-bordered order-table display nowrap table-responsive mt-3" id="tableEquiposA">
                            <thead>
                            <tr class="text-center">
                                <th>PERIODO</th>
                                <th>FECHAS</th>
                                <th>ESTATUS</th>
                                <th>EDITAR</th>
                            </tr>
                            </thead>
                            <tbody id="">`;
        LISTA.forEach(
            (per)=>
            {
                let estado = per.estado ==="1"? `<i class="fas fa-circle text-success"></i> ACTIVO`:`<i class="fas fa-circle text-danger"></i> TERMINADO`;
                    template += `<tr class="text-center">
                                <td data-label="">${per.tipo} <br> <strong>${per.nombre_periodo}</strong> </td>
                                <td data-label="">del ${per.fecha_inicio} <br> al ${per.fecha_fin}</td>
                                <td data-label="">${estado}</td>
                                <td data-label="">
                                    <button type="button" class="btn btn-warning" onClick="editaPeriodo('${per.id_periodo}||${per.tipo}||${per.nombre_periodo}||${per.fecha_inicio}||${per.fecha_fin}');">
                                        <i class="fas fa-edit" style="color: white;"></i>
                                    </button>
                                </td>
                            </tr>`;
            }
        );
        template += ` </tbody>
                        </table>
                    </div>`;
    }
    else{
        template += `NO DATA`;
    }
    $("#containerTblPeriodos").html(template);
}

function buildHTMLSelectGrupos(LISTA) {
    let templateSelect = ``;
    if (LISTA.length >0) {
        LISTA.forEach(
            (gpo)=>
            {
                templateSelect += `<option value="${gpo.id_grupo}">Grupo ${gpo.grupo} ${gpo.carrera} - ${gpo.materia}</option>`;
            }
        );
    }
    else{

    }
    $("#selectGrupoSearch").html(templateSelect);
}

function buildGridGruposHoy(LISTA) {
    let template = ``;
    if (LISTA.length >0) {
        LISTA.forEach(
            (gpo)=>
            {
                template += ` <div class="col pb-3" onClick="pasarLista(${gpo.id_grupo});">
                                    <div class="card class_card" role="button">
                                        <img src="../assets/img/banner.jpg" class="card-img-top" alt="...">
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item"><strong>${gpo.materia}</strong><br>Grupo ${gpo.grupo}</li>
                                          <li class="list-group-item">${gpo.carrera}</li>
                                          <li class="list-group-item">${gpo.dias}</li>
                                          <li class="list-group-item">${gpo.tipo} ${gpo.nombre_periodo}</li>
                                        </ul>
                                    </div>
                                </div>`;
            }
        );
    }
    else{
        template = `<div class="alert alert-warning" role="alert">
           No hay grupos para hoy, para ver todos sus grupos, vaya a <a href="./mis_grupos.php"> mis Grupos</a>.
      </div>`
    }
    $("#containerCardGrupos").html(template);
}

function buildHTMLSelectPeriodos(LISTA) {
    let template = ``;
    if (LISTA.length >0) {
        template = `<div class="col-8 col-md-10" >
                        <select class="form-select" aria-label="Default select example" id="select_periodos">
                        `;
                    LISTA.forEach(
                        (periodo)=>
                        {
                            template += `<option value="${periodo.id_periodo}">${periodo.tipo} ${periodo.nombre_periodo}</option>`;
                        }
                    );
        template += `</select>
        </div>
        <div class="col-4 col-md-2">
            <button type="button" class="btn btn-primary mb-3 w-100" data-bs-toggle="modal" 
            data-bs-target="#modal_crearGrupo" onClick="loadDataPeriodo();">Crear</button>
        </div>`;
    }
    else{
        template = `<div class="alert alert-warning" role="alert">
       No hay Periodos registrados, porfavor <a href="#" data-bs-toggle="modal" data-bs-target="#modal_periodos" class="alert-link"> agregue uno</a> para poder crear Grupos.
      </div>`
    }
    $("#container_select_periodos").html(template);
}

function loadDataPeriodo() {
    let id = $("#select_periodos option:selected").val();
    let tittle = $("#select_periodos option:selected").html();
    $("#tituloModalGrupo").html("Crear grupo en "+ tittle)
    $("#id_periodo_selected").val(id)
    changeKeys();
}

function changeKeys() {
    let code = generateP();
    let codeMD5 = md5(code);
    $("#code_invitacion").val(code);
    $("#code_invitacion_md5").val(getServetInfo()+"join.php?code="+codeMD5+"&invite="+code);
}

function editaPeriodo(datos) {
    d=datos.split('||');
    $("#no_periodo").val(d[0]);
    $("#tipo_periodo").val(d[1]);
    $("#nombre_periodo").val(d[2]);
    $("#fecha_inicio_periodo").val(d[3]);
    $("#fecha_fin_periodo").val(d[4]);
}

$("#frm_new_grpo").submit(function (event)
{
    event.preventDefault();
    let carrera =$("#carrera_nva").val();
    let materia =$("#materia_nva").val();
    let gpo =$("#grupo_nvo").val();
    if (carrera === "" || materia == "" || gpo == ""){
        mensajeAlerta("warning","Los campos marcados con * son obligatorios","Faltan Campos")
    }
    else
    {
        $.ajax({
            type: "POST",
            url: "../webhook/profesor_new_grupo.php",
            data: $('#frm_new_grpo').serialize(),
            dataType: "json",
            success: function (result) {
                if(result.response=="1"){
                    $('#frm_new_grpo')[0].reset();
                    mensajeAlerta(result.tipo,result.mensaje, result.titulo);
                    $("#modal_periodos").modal("hide");
                    cargaGruposLista("LUN");
                    mensajeAlerta("success","Se ha creado un grupo,\nMande la invitacion a sus alumnos","Se ha creado un grupo");
                    $("#modal_crearGrupo").modal("hide");
                }
                else{
                    let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error al iniciar</strong><p>Los datos no se pudieron procesar</p>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                    $("#nombre_periodo").focus();
                    $('#resp').html(alerta).show(200).delay(2500).hide(200);
                }
            },
            error: function(result){
                alert(result);
            }
        })
    }
});


function consultaUltimosPaseLista(filtro) {
    historialPaseLista(filtro,0).then(function (result) {
        let template = ``;
        let pases = result.data;
        estadisticasCirculo(result.data);
        estadisticasBarras(result.data);
        if(pases.length > 0){
            template = `<div class="list-group">`;
            pases.forEach(pase =>{
                let bgRevisado = parseInt(pase.paseHechos) > 0 ? "":"bg-warning";
                //revisaPaseLista(id_grupo,id_pase,filtro,dia)
                template += `<a href="#" onClick="revisaPaseLista(${pase.id_grupo},${pase.id_pase},'THIS_DATE','${pase.fecha}',)" 
                                class="list-group-item list-group-item-action ${bgRevisado}">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">${pase.carrera} ${pase.grupo}</h6>
                                    <span class="badge bg-info"><i class="fas fa-calendar-check"></i></span>
                                </div>
                                <p class="mb-1">${pase.materia}</p>
                                <small class="text-muted">${pase.fecha}</small> 
                                <small class="text-success"><i class="far fa-check-circle"></i> ${pase.asistencias}</small> 
                                <small class="text-danger"><i class="far fa-times-circle"></i></i> ${pase.faltas} </small> 
                                <small class="text-warning"><i class="far fa-clock"></i> ${pase.retardos} </small> 
                            </a> `;
            });
            template += `</div>`;
        }
        else{
            template = ``;
        }
        $("#containerHistorial").html(template);
    })
}

function estadisticasBarras(datos) {
    var asi= [];
    var fal= [];
    var ret= [];
    var fech= [];
    for (i = 0; i<10; i++){
            asi.push(parseInt(datos[i].asistencias));
            fal.push(parseInt(datos[i].faltas));
            ret.push(parseInt(datos[i].retardos));
            fech.push([datos[i].materia],[datos[i].fecha]);
    }

    var options = {
        series: [{
            name: 'Asistencias',
            data: asi
        }, {
            name: 'Faltas',
            data: fal
        }, {
            name: 'Retardos',
            data: ret
        }],
        chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            stackType: '100%'
        },
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        xaxis: {
            categories: fech
        },
        labels: {
            style: {
                fontSize: '8px'
            }
        },
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
        }],
        fill: {
            opacity: 1
        },
        legend: {
            position: 'right',
            offsetX: 0,
            offsetY: 50
        },
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
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

function buscaPaseListaxFecha() {
    let idGrupo = $("#selectGrupoSearch option:selected").val();
    let fecha = $("#fecha_pase_lista").val();
    console.log(idGrupo,fecha);
    busca_pase_lista(idGrupo,"DATE",fecha,0).then(function (response) {
        if(response.response == 0){
            //alerta no hay
            console.log(response)
            mensajeAlerta("error","No encontramos un pase de lista este dia","No se encontro pase de lista")
        }
        else{
            //redireccionar
            console.log(response.data[0])
            let pl = response.data[0];
            alertaNotificacion("success", "Pase de Lista encontrado");
            window.location.href = "./pase_lista.php?start_sesion="+pl.id_grupo_fk+"&action=new&id_pase="+pl.id_pase+"&date="+pl.fecha+"&filter='THIS_DATE'";
        }
    })
}

function cargaJustificantes() {
    consultaJustificantes("PROFESOR").then(result =>{
        let template = ``;
        let justificantes = result.data;
        if(justificantes.length > 0){
            template = `<div class="list-group">`;
            justificantes.forEach(just =>{
                console.log(just)
                template += `<div class="row">
                            <div class="card h-100 card_cursor">
                                <div class="card-body" role="button" onclick="showJustificPDF('${just.url_justificante}','Base de Datos para Ingenieria 3001',${just.id_pase},${just.id_alumno});">
                                    <div class="row">
                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                        <i class="far fa-file-pdf fs-3"></i>    
                                        </div>
                                        <div class="col-10">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">${just.nombre} ${just.app} ${just.apm}</h6>
                                                <span class="position-absolute end-0 me-1 p-1  badge rounded-pill bg-warning" style="align-self: end;top: 10px;">Pendiente</span>
                                            </div>
                                            <div class="card-text text-muted">
                                                ${just.materia} ${just.grupo} - ${just.carrera} <br>
                                                ${just.upload_date_justificante}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> `;
            })
            template += `</div>`;

        }
        else{
            template = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong>No hay justificantes!</strong> No encontramos justificantes para revisar
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
        }
        $("#containerJustif").html(template);
    })
}

function showJustificPDF(url,name,idPase,idAlumno) {
    $("#Modal_PDF").modal('show');
    let iframe = '<iframe src="'+url+'" width="100%" height="500px"> </iframe>';
    $("#containerPDFView").html(iframe);
    $("#namePDF").html(name);
    $("#idJustAlumno").val(idAlumno);
    $("#idJustPase").val(idPase);
}

function actionJust(action) {
    console.log(action)
    let idAlumno = $("#idJustAlumno").val();
    let idPase = $("#idJustPase").val();
    revisaJustificante(action,idPase,idAlumno).then(result=>{
        alertaNotificacion("success",result.titulo);
        $("#Modal_PDF").modal('hide');
        location.reload();
    })
}