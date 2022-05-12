<?php

//buscamos si hoy ya se genero un pase de lista para cargarla
$filtro = $_POST['filtro'];
session_start();
$idProfesor = $_SESSION['id_profesor'];
include_once "../control/controlGrupos.php";

$data = consultaHistorialPasesLista($idProfesor, $filtro);

if ($data) {
    $mensaje = "Enviando historial";
    $value = 1;
} else {
    $mensaje = "No hay registros";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data" => $data
);

echo json_encode($rest);
