<?php
function insertAlumno($params){
    include_once "../model/ALUMNO.php";
    $ALUMNO= new ALUMNO();
    include_once "../model/MAIN.php";
    $id_persona=MAIN::gen_user_id();
    $ALUMNO->setIdPersona($id_persona);
    $ALUMNO->setNombre($params['nombre']);
    $ALUMNO->setApp($params['app']);
    $ALUMNO->setApm($params['apm']);
    $ALUMNO->setSexo($params['sexo']);
    $ALUMNO->setEmail($params['email']);
    $ALUMNO->setUserName($params['user_name']);
    $ALUMNO->setAvatar("../recursos/avatars/defaultAvatar.webp");
    $ALUMNO->setPw(md5($params['pwd']));
    if($ALUMNO->queryInsertPersona()){
        $idAlumno=MAIN::genIdBIGInt();
        $ALUMNO->setIdAlumno($idAlumno);
        $ALUMNO->setIdPersonaFk($ALUMNO->getIdPersona());
        $ALUMNO->setNoCta($params['noCta']);
        $ALUMNO->setAccountConfirm($params['aco_conf']);
        return $ALUMNO->queryInsertAlumno();
    }
}

function updateAlumno($params){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    //Ver como hacer verificacion de sesión
    session_start();
    $ALUMNO->setIdPersona($_SESSION['id_persona']);
    $ALUMNO->setNombre($params['nombre']);
    $ALUMNO->setApp($params['app']);
    $ALUMNO->setApm($params['apm']);
    $ALUMNO->setSexo($params['sexo']);
    $ALUMNO->setEmail($params['email']);
    if($ALUMNO->queryUpdatePersona()) {
        $_SESSION['name_complete'] = $ALUMNO->getNombre()." ". $ALUMNO->getApp()." ".$ALUMNO->getApm();
        $_SESSION['email'] = $ALUMNO->getEmail();
        return true;
    } else return false;
}