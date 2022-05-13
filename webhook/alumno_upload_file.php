<?php
$idPase= $_POST['idPase'];
$nombreFILE1 = $_FILES['archivo']['name']; //Obteniendo el nombre1
$archivo1 = $_FILES['archivo']['tmp_name']; //OBteniendo el file1

if (isset($idPase)  && $_FILES['archivo']['name'] ) {
    include_once "../control/controlAsistencia.php";
    session_start();
    $idALumno = $_SESSION['id_alumno'];
    if (procesaJustificanteAlumno($archivo1,$nombreFILE1,$idPase,$idALumno)){
        $type = 1;
        $mensaje = "Se ha enviado un archivo a revisión.";
        $action = "success";
    }
    else{
        $type  =-1;
        $action = "error";
        $mensaje = "VALIDACION FALLIDA, PARAMETROS INCORRECTOS";
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