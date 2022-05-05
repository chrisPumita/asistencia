<?php
$params= [
    "nombre"=>$_POST["nombre"],
    "app"=> $_POST["app"],
    "apm"=> $_POST["apm"],
    "sexo"=>$_POST["sexo"],
    "email"=>$_POST["email"],
    "user_name"=>$_POST["user_name"],
    "pwd"=>$_POST["pwd"],
    "noCta"=>$_POST["noCta"],
    "aco_conf"=>"1"
];

include_once "../control/controlAlumno.php";

if(insertAlumno($params)){
    $mensaje = "CUENTA CREADA";
    $value = 1;
} else {
    $mensaje = "ESTE CORREO YA HA SIDO REGISTRADO";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);
