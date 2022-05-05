<?php
$idGrupo = $_POST['grupo'];
$action = $_POST['action'];
$preload = $_POST['preload'] == "true" ? true:false;
include_once "../control/controlGrupos.php";
if ($preload){
    $data = consultaListaAlumnos($idGrupo);
}
else{
    $data = creaNuevoPaseLista($idGrupo);
}

if ($data) {
    $mensaje = "OK";
    $value = 1;
} else {
    $mensaje = "Not Found";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data" => $data
);

echo json_encode($rest);
