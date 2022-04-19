<?php

function insertPersona($params){
    include_once "../model/PERSONA.php";
    $PERSONA = new PERSONA();
    $id=10;
    $PERSONA->setIdPersona($id);
    $PERSONA->setNombre($params['nombre']);
    $PERSONA->setApp($params['app']);
    $PERSONA->setApm($params['apm']);
    $PERSONA->setSexo($params['sexo']);
    $PERSONA->setEmail($params['email']);
    $PERSONA->setUserName($params['user_name']);
    $PERSONA->setAvatar($params['avatar']);
    $PERSONA->setPw(md5($params['pwd']));
    return $PERSONA->queryInsertPersona();
}



?>