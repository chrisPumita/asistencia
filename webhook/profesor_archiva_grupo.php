<?php
include_once "../control/controlGrupos.php";

$id_gpo = $_POST['id_gpo'];
//insertProfesor($params)
if(archivarGrupo($id_gpo)){
    $mensaje = "Grupo archivado";
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
