<?php
session_start();
$idProfesor= $_SESSION['id_profesor'];
include_once "../control/controlCuentas.php";
echo json_encode(datosPerfilProfesor($idProfesor));