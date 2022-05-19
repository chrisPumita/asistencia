$(document).ready(function() {
    console.log("Cambio de contraseña activdado");
});

$("#frm-update-password").submit(function (event) {
    event.preventDefault();
    if($("#pass_actual").val() !="" && $("#pass_nvo").val() !="" && $("#pass_nvo_confi").val() !=""){
        if($("#pass_nvo").val() == $("#pass_nvo_confi").val()){
            var data = $('#frm-update-password').serialize();
            let route = "../webhook/update_password.php";
            console.log(data);
            if(peticionAjax(data,route)){
                alertaNotificacion("success","Se ha actualizado con exito");
                consultaDatosAlumno();
            }
        } else{
            mensajeAlerta("warning","Las contraseñas no coinciden","CUIDADO");
        }
    } else{
        mensajeAlerta("warning","Faltan algunos datos por llenar","CAMPOS VACIOS");
    }
});
