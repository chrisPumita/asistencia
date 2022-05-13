<?php
//buscamos si hoy ya se genero un pase de lista para cargarla
$filtro = $_POST['filtro'];
include_once "../control/controlInscripcion.php";
session_start();
$idAlumno = $_SESSION['id_alumno'];
$data = consultaInscAlumno($filtro,$idAlumno);
if ($data) {
    $mensaje = "Inscripciones encontradas del alumno";
    $value = 1;
} else {
    $mensaje = "Alumno sin inscripciones";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data" => $data
);

echo json_encode($rest);
