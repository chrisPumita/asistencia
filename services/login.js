$(document).ready(function() {
    console.log("LOGIN Functions OK");
});


/*SUBMINT de Add Alumno*/
$("#frm_login").submit(function (event) {
    event.preventDefault();
    let email =$("#email").val();
    let pw =$("#password").val();
    if (pw=="" || email == ""){
        mensajeAlerta("warning","Los campos no deben estar vacios","Campos vacios")
        $("#email").focus();
    }
    else{
        $.ajax({
            type: "POST",
            url: "./webhook/login.php",
            data: $('#frm_login').serialize(),
            dataType: "json",
            success: function (result) {
                console.log(result);
                if(result.response=="1"){
                    $('#frm_login')[0].reset();
                    location.reload();
                }
                else{
                    let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error al iniciar</strong><p>La cuenta no existe, vuelva a intentarlo</p>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                    $("#email").focus();
                    $('#resp').html(alerta).show(200).delay(2500).hide(200);
                }
            },
            error: function(result){
                alert(result);
            }
        })
    }
});