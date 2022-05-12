$(document).ready(function() {
    console.log("F(X) Alumno");
});

//frm_invitacion_code


/*SUBMINT de Add Alumno*/
$("#frm_invitacion_code").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: "./webhook/alumno_codigo_inv.php",
        data: $('#frm_invitacion_code').serialize(),
        dataType: "json",
        success: function (result) {
            console.log(result);
            if(result.response=="1"){
                $('#frm_invitacion_code')[0].reset();
                location.reload();
            }
            else{
                let alerta =  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Error de código</strong><p> El codigo que ingrsaste es incorrecto</p>
                        </div>`;
                $("#email").focus();
                $('#resp').html(alerta).show(200).delay(2500).hide(200);
            }
        },
        error: function(result){
            console.log(result);
        }
    })
});