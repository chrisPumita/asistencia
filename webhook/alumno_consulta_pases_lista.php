<?php
//buscamos si hoy ya se genero un pase de lista para cargarla
$filtro = $_POST['filtro'];
$id = $_POST['id'];
include_once "../control/controlInscripcion.php";
session_start();
$idAlumno = $_SESSION['id_alumno'];
$data = consultaPasesListaAlumno($filtro,$idAlumno,$id);
if ($data) {
    $mensaje = "Pase de lista encontrados";
    $value = 1;
} else {
    $mensaje = "Sin pase de lista";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data" => $data
);

echo json_encode($rest);
