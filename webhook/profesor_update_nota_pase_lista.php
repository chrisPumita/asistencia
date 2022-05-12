<?php
include_once "../control/controlAsistencia.php";

$idPase = $_POST['idPase'];
$nota = $_POST['nota'];
//insertProfesor($params)
if(updateNotaPaseLista($idPase,$nota)){
    $mensaje = "Nota actualizada";
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
