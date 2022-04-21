<?php
include_once "../control/controlProfesor.php";

$params = [
    "nombre" => "Emmanuel",
    "app" => "Martinez",
    "apm" => "Hernandez",
    "sexo" => "1",
    "email" => "emma@gmail.com",
    "user_name" => "Emma Bb",
    "pwd" => "0000",
    "gradoAc" => "Licenciado",
    "carrera" => "Informatica",
    "confirm" => "1"
];
if(insertProfesor($params)){
    echo "Se ha registrado con exito";
} else {
    echo "Error";
}

?>