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
    $("#edit_nombre_al").val(alumno.nombre);
    $("#edit_app_al").val(alumno.app);
    $("#edit_apm_al").val(alumno.apm);
    $("#edit_sexo_al").val(alumno.sexo);
    $("#edit_user_al").val(alumno.user_name);
    $("#edit_no_cta").val(alumno.no_cta);
    $("#edit_email_al").val(alumno.email);
    $("#nombre_perfil").html(alumno.nombre+" "+ alumno.app+ " "+ alumno.apm)
}