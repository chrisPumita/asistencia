$(document).ready(function() {
    console.log("DAASHBOARD");
    loadPeriodos("LAST");
    consultaUltimosPaseLista("LAST");
    cargaGruposLista("TODAY");
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
                templateSelect += `<option selected="">Grupo ${gpo.grupo} ${gpo.carrera} - ${gpo.materia}</option>`;
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
    historialPaseLista(filtro).then(function (result) {
        let template = ``;
        let pases = result.data;
        if(pases.length > 0){
            template = `<div class="list-group">`;
            pases.forEach(pase =>{
                console.log(pase)
                //revisaPaseLista(id_grupo,id_pase,filtro,dia)
                template += `<a href="#" onClick="revisaPaseLista(${pase.id_grupo},${pase.id_pase},'THIS_DATE','${pase.fecha}',)" 
                                class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">${pase.carrera} ${pase.grupo}</h6>
                                    <span class="badge bg-info"><i class="fas fa-calendar-check"></i></span>
                                </div>
                                <p class="mb-1">${pase.materia}</p>
                                <small class="text-muted">${pase.create_at}</small>
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
