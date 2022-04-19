<?php
$params = [
    "idPersona"=> "10",
    "nombre"=> "Ferchito",
    "app"=> "Ledezma",
    "apm"=> "Hernandez",
    "sexo"=> "0",
    "email"=> "fernando@mail.com"
];
include_once "../control/controlPersona.php";
if(updatePersona($params)){
    echo "Actualizado con exito";
} else {
    echo "Error";
}

?>