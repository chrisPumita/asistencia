$(document).ready(function() {
    console.log("DAASHBOARD OKKKKKKKS");
    loadPeriodos("LAST");
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
                console.log(result);
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
    })
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
                console.log(result);
                if(result.response=="1"){
                    $('#frm_new_grpo')[0].reset();
                    mensajeAlerta(result.tipo,result.mensaje, result.titulo);
                    $("#modal_periodos").modal("hide");
                    mensajeAlerta("success","Exito","titulo")
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