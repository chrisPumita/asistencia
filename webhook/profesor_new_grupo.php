<?php

include_once "../control/controlGrupos.php";
/*
$no_periodo = $_POST["no_periodo"];
$nombre_periodo = $_POST["nombre_periodo"];
$fecha_inicio_periodo = $_POST["fecha_inicio_periodo"];
$fecha_fin_periodo = $_POST["fecha_fin_periodo"];
$tipo_periodo = $_POST["tipo_periodo"];
*/
if (true) {
    $mensaje = "Se ha registrado un nuevo Periodo";
    $titulo = "Registro con exito";
    $value = 1;
    $tipoResponse = "success";
} else {
    $mensaje = "Error al crear el Periodo";
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
