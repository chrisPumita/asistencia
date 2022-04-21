<?php

$params= [
    "nombre" => "Emmita",
    "app" => "Guerra",
    "apm" => "Gzl",
    "sexo" => "0",
    "email" => "emmabb@gmail.com",
    "gradoAc" => "Ingeniero",
    "carrera" => "Sistemas"
];

include_once "../control/controlProfesor.php";
if(updateProfesor($params)){
    echo "Se ha actulizado con exito";
} else{
    echo "Error";
}

?>