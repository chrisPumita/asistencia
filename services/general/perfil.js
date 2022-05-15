$(document).ready(function() {
    consultaDatosAlumno();
});

function consultaDatosAlumno(){
    $.ajax({
        type: "POST",
        url: "../webhook/alumno_data.php",
        data : {},
        dataType: "json",
        success: function (result) {
            var alumno = result[0];
            buildHtmlDatosAlumno(alumno);
        },
        error: function(result){
            console.log(result);
        }
    })
}

function buildHtmlDatosAlumno(alumno){
    $("#avatar_al").attr("src",alumno.avatar);
    $("#edit_nombre_al").val(alumno.nombre);
    $("#edit_app_al").val(alumno.app);
    $("#edit_apm_al").val(alumno.apm);
    $("#edit_sexo_al").val(alumno.sexo);
    $("#edit_user_al").val(alumno.user_name);
    $("#edit_no_cta").val(alumno.no_cta);
    $("#edit_email_al").val(alumno.email);
    $("#nombre_perfil").html(alumno.nombre+" "+ alumno.app+ " "+ alumno.apm);

}

$("#frm-update-datos-alumno").submit(function (event) {
    var data = $('#frm-update-datos-alumno').serialize();
    let route = "../webhook/alumno_update.php";
    if(peticionAjax(data,route)){
        consultaDatosAlumno();
    }
    event.preventDefault();
});

$("#frm-upload-profile").submit(function (event) {
    event.preventDefault();
    var formData = new FormData(document.getElementById("frm-upload-profile"));
    formData.append("dato", "valor");
    $.ajax(
        {
            url: "../webhook/update_avatar.php",
            type: "POST",
            data: formData,
            dataType: "html",
            cache: false,
            processData: false,  // tell jQuery not to process the data
            contentType: false,
            success: function(res){
                document.location.reload()
            },
            error: function() {
                alert("Error 500 interno de Servidor al consultar grupos");
            }
        }
    );
});
