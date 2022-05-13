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
                console.log(result);
            }
        })
    }
});


$("#frm-new-alumno").submit(function (event) {
    event.preventDefault();
    let c_pw =$("#pwd_confirm").val();
    let pw =$("#pwd").val();
    if (pw!=c_pw){
        mensajeAlerta("warning","Las constraseñas no coinciden","Contraseñas diferentes")
    }
    else{
        $.ajax({
            type: "POST",
            url: "./webhook/alumno_add.php",
            data: $('#frm-new-alumno').serialize(),
            dataType: "json",
            success: function (result) {
                console.log(result);
                if(result.response=="1"){
                    let timerInterval
                    Swal.fire({
                        title: 'Cuenta creada exitosamente',
                        html: 'Estamos preparando todo para iniciar sesión',
                        timer: 1000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        let email = $("#email").val();
                        iniciarSesion(email,c_pw,"alumno");
                        $('#frm-new-alumno')[0].reset();
                    })

                    //setTimeout( function() { window.location.href = "./"; }, 3000 );

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
                mensajeAlerta("error","El correo o usuario ya estan registrados","No se puedo registrar")
            }
        })
    }
});

function iniciarSesion(email,password,rdo_accoun) {
    $.ajax({
        type: "POST",
        url: "./webhook/login.php",
        data: {email:email,password:password,rdo_accoun:rdo_accoun},
        dataType: "json",
        success: function (result) {
            console.log(result);
            if(result.response=="1"){
                window.location.href = "./";
            }
        },
        error: function(result){
            console.log(result);
        }
    })
}