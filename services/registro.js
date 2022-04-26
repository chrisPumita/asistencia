$(document).ready(function() {
    console.log("REGISTRO OK");
});

//frm-new-profesor

$("#frm-new-profesor").submit(function (event) {
    event.preventDefault();
    let c_pw =$("#pwd_confirm").val();
    let pw =$("#pwd").val();
    if (pw!=c_pw){
        mensajeAlerta("warning","Las constraseñas no coinciden","Contraseñas diferentes")
    }
    else{
        $.ajax({
            type: "POST",
            url: "./webhook/profesor_add.php",
            data: $('#frm-new-profesor').serialize(),
            dataType: "json",
            success: function (result) {
                console.log(result);
                if(result.response=="1"){
                    $('#frm-new-profesor')[0].reset();
                    mensajeAlerta("success","Tu cuenta ha sido creada correctamente, ahora puede iniciar sesion", "CUENTA CREADA");
                    setTimeout( function() { window.location.href = "./"; }, 3000 );
                }
                else{
                    let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error al iniciar</strong><p>Faltan datos importantes</p>
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