<?php
//buscamos si hoy ya se genero un pase de lista para cargarla, en este caso solo los PL si  crear lista asistencias
$idGrupo = $_POST['grupo'];
$filtro = $_POST['filtro'];
$dia = $_POST['dia'];
$idPase = $_POST['idPase'];

include_once "../control/controlGrupos.php";

$data = consultaPaseLista($idPase, $idGrupo,$filtro,$dia);
if ($data) {
    $mensaje = "Este grupo ya paso lista el dia especificado";
    $idPase =
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
