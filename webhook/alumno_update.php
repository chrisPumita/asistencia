<?php
if(isset($_POST['edit_nombre_al']) && isset($_POST['edit_app_al']) && isset($_POST['edit_apm_al']) && isset($_POST['edit_sexo_al']) && isset($_POST['edit_email_al'])){
    $params = [
        "nombre"=> $_POST['edit_nombre_al'],
        "app"=> $_POST['edit_app_al'],
        "apm"=> $_POST['edit_apm_al'],
        "sexo"=> $_POST['edit_sexo_al'],
        "email"=> $_POST['edit_email_al']
    ];
    include_once "../control/controlAlumno.php";
    if(updateAlumno($params)){
        $mensaje = "Se ha actualizado con exito";
        $value = 1;
    } else {
        $mensaje = "Algo ha fallado ";
        $value = -1;
    }
} else {
    $mensaje = "Faltan datos";
    $value = 0;
}
$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);
echo json_encode($rest);
?>