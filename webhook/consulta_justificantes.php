<?php
//
//buscamos si hoy ya se genero un pase de lista para cargarla
$filtro = $_POST['filtro'];
include_once "../control/controlAsistencia.php";
session_start();
$id = $filtro == "ALUMNO" ? $_SESSION['id_alumno'] : $_SESSION['id_profesor'];
$data = cargaJustifiicantesPendientes($filtro, $id);
if ($data) {
    $mensaje = "Justificantes encontrados";
    $value = 1;
} else {
    $mensaje = "No hay justificantes";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data" => $data
);

echo json_encode($rest);
