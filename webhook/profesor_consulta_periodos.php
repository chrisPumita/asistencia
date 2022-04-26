<?php
include_once "../control/controlPeriodos.php";

$filtro_periodo =   $_POST["filtro_periodo"];

//insertProfesor($params)
$data = consultaPeriodosEscolares($filtro_periodo);
if($data){
    $mensaje = "OK";
    $value = 1;
} else {
    $mensaje = "Error";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value,
    "data"=>$data
);

echo json_encode($rest);
