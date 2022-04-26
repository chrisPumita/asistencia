<?php
include_once "../control/controlPeriodos.php";

$nombre_periodo =   $_POST["nombre_periodo"];
$fecha_inicio_periodo = $_POST["fecha_inicio_periodo"];
$fecha_fin_periodo = $_POST["fecha_fin_periodo"];
$tipo_periodo = $_POST["tipo_periodo"];

//insertProfesor($params)
if(crearPeriodo($nombre_periodo,$fecha_inicio_periodo,$fecha_fin_periodo,$tipo_periodo)){
    $mensaje = "Se ha registrado un nuevo Periodo";
    $value = 1;
} else {
    $mensaje = "Error al crear el Periodo";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
