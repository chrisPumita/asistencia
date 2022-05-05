<?php
 include_once "../control/controlCuentas.php";
 session_start();
$idAlumno=$_SESSION['id_alumno'];
 echo json_encode(datosPerfilesAlumno($idAlumno));
?>