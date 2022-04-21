<?php
$params = [
    "nombre"=> "Ferchito",
    "app"=> "Ledezma",
    "apm"=> "Hernandez",
    "sexo"=> "0",
    "email"=> "fer@mail.com"
];
include_once "../control/controlAlumno.php";
if(updateAlumno($params)){
    echo "Actualizado con exito";
} else {
    echo "Error";
}

?>