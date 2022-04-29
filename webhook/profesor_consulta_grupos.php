<?php
include_once "../control/controlGrupos.php";

$filtro = $_POST["filtro"];
$DIA = $_POST["dia"];
//insertProfesor($params)
session_start();
$idProfesor = $_SESSION['id_profesor'];
$data = ConsultaGrupos($idProfesor,$filtro,$DIA);
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
