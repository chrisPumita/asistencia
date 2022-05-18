<?php
//revisaJustificante

include_once "../control/controlAsistencia.php";
$action = $_POST["action"];
$idPase = $_POST["idPase"];
$idAlumno = $_POST["idAlumno"];

if (revisaJustificante($idPase, $idAlumno,$action)) {
    $mensaje = "Se ha revisado el justificante";
    $titulo = "Justificante marcado como: " . ($action == 0 ? "RECHAZADO" : "ACEPTADO") . " con exito";
    $value = 1;
    $tipoResponse = "success";
} else {
    $mensaje = "Error al registrar";
    $titulo = "ERROR";
    $value = 0;
    $tipoResponse = "error";
}

$rest = array(
    "mensaje" => $mensaje,
    "titulo" => $titulo,
    "response" => $value,
    "tipo" => $tipoResponse
);

echo json_encode($rest);
