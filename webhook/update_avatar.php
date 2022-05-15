<?php
$nombreFILE1 = $_FILES['foto']['name']; //Obteniendo el nombre1
$archivo1 = $_FILES['foto']['tmp_name']; //OBteniendo el file1

if ($_FILES['foto']['name'] ) {
    include_once "../control/controlCuentas.php";
    if (updateAvatar($archivo1,$nombreFILE1)){
        $type = 1;
        $mensaje = "Se ha Actualizado con exito";
        $action = "success";
    }
    else{
        $type  =-1;
        $action = "error";
        $mensaje = "Error interno";
    }
}
else{
    $type = 0;
    $action = "info";
    $mensaje = "Porfavor seleccione un archivo valido y vuelva a internarlo nuevamente. ";
}
$resultados = array(
    "mensaje" => $mensaje,
    "type" => $type,
    "action" => $action
);
echo json_encode($resultados);