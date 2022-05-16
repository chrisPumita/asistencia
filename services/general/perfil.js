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

function consultaDatosProfesor(){
    $.ajax({
        type: "POST",
        url: "../webhook/profesor_data.php",
        data : {},
        dataType: "json",
        success: function (result) {
            var profesor = result[0];
            buildHTMLDataProfesor(profesor);
        },
        error: function(result){
            console.log(result);
        }
    })
}


function buildHTMLDataProfesor(profesor){
    console.log(profesor);
    $("#avatar_pr").attr("src",profesor.avatar);
    $("#nombre_perfil_prof").html(profesor.nombre+" "+ profesor.app+ " "+ profesor.apm);
    $("#edit_nombre_profe").val(profesor.nombre);
    $("#edit_app_profe").val(profesor.app);
    $("#edit_apm_profe").val(profesor.apm);
    $("#edit_sexo_profe").val(profesor.sexo);
    $("#edit_email_profe").val(profesor.email);
    $("#edit_gradoAc_profe").val(profesor.grado_academico);
    $("#edit_carrera_profe").val(profesor.carrera_esp);
}

$("#frm-update-datos-profesor").submit(function (event) {
    var data = $('#frm-update-datos-profesor').serialize();
    let route = "../webhook/profesor_update.php";
    console.log(data);
    if(peticionAjax(data,route)){
        console.log("Se ha realizado con exito");
        consultaDatosProfesor();
    }
    event.preventDefault();
});