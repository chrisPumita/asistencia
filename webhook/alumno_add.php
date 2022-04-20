<?php
$params= [
    "nombre"=>"Fernando",
    "app"=>"Hernandez",
    "apm"=>"Ledezma",
    "sexo"=>"1",
    "email"=>"f@gmail.com",
    "user_name"=>"Zerito",
    "avatar"=>"dsadasdas",
    "pwd"=>"0000",
    "noCta"=>"316345978",
    "aco_conf"=>"1"
];

include_once "../control/controlAlumno.php";

if(insertAlumno($params)){
    echo "Se ha registrado con exito";
} else{
    echo "Error";
}