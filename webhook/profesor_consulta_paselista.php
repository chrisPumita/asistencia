<?php
//buscamos si hoy ya se genero un pase de lista para cargarla
$idGrupo = $_POST['grupo'];
$filtro = $_POST['filtro'];

include_once "../control/controlGrupos.php";

$data = consultaPaseLista($idGrupo,$filtro);

if ($data) {
    $mensaje = "Este grupo ya paso lista el dia de hoy";
    $value = 1;
} else {
    $mensaje = "Este grupo aun no ha pasado lista";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data" => $data
);

echo json_encode($rest);
