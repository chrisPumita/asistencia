<?php
include_once"../control/controlCuentas.php";

$email = $_POST['email'];
$password = $_POST['password'];
$tipo = $_POST['rdo_accoun'];
if(iniciaSesion($email, $password, $tipo)){
    $mensaje = "CUENTA VALIDADA";
    $value = 1;
}
else{
    $mensaje = "CONTRASEÑA O NO DE VENDEDOR INCORRECTO";
    $value = 0;
}
$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
