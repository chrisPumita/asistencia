<?php
include_once "../control/controlGrupos.php";

$grpo = $_POST["filtro"];
//insertProfesor($params)
session_start();
$idProfesor = $_SESSION['id_profesor'];
$data = ConsultaGrupos($idProfesor,$grpo);
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
