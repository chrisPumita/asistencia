$(document).ready(function() {
    console.log("DAASHBOARD OK");
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

