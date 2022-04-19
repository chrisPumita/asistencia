<?php
$params= [
    "nombre"=>"Fernando",
    "app"=>"Hernandez",
    "apm"=>"Ledezma",
    "sexo"=>"1",
    "email"=>"f@gmail.com",
    "user_name"=>"Zero",
    "avatar"=>"dsadasdas",
    "pwd"=>"0000"    
];

include_once "../control/controlPersona.php";

if(insertPersona($params)){
    echo "Se ha registrado con exito";
} else{
    echo "Error";
}