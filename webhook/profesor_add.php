<?php
include_once "../control/controlProfesor.php";

$params = [
    "nombre" => $_POST["nombre"],
    "app" => $_POST["app"],
    "apm" => $_POST["apm"],
    "sexo" => $_POST["sexo"],
    "user_name" => $_POST["user_name"],
    "gradoAc" => $_POST["gradoAc"],
    "carrera" => $_POST["carrera"],
    "email" => $_POST["email"],
    "pwd" => $_POST["pwd"],
    "pwd_confirm" => $_POST["pwd_confirm"],
    "confirm" => "1",
    "tems" => "1"
];

//insertProfesor($params)
if(insertProfesor($params)){
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
