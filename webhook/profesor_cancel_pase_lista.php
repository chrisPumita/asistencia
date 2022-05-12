<?php
include_once "../control/controlAsistencia.php";

$idPase = $_POST['idPase'];
//insertProfesor($params)
if(cancelaPaseLista($idPase)){
    $mensaje = "ACION REALIZADA";
    $value = 1;
} else {
    $mensaje = "NO SE REGISTRO; ERROR INESPERADO";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
