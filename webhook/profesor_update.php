<?php

$params= [
    "nombre" => $_POST['edit_nombre_profe'],
    "app" =>    $_POST['edit_app_profe'],
    "apm" => $_POST['edit_apm_profe'],
    "sexo" => $_POST['edit_sexo_profe'],
    "email" => $_POST['edit_email_profe'],
    "gradoAc" => $_POST['edit_gradoAc_profe'],
    "carrera" => $_POST['edit_carrera_profe']
];

include_once "../control/controlProfesor.php";
if(updateProfesor($params)){
    $mensaje = "Se ha actualizado con exito";
    $value = 1;
} else {
    $mensaje = "Error al actualizar";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);



?>