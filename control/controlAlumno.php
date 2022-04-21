<?php
function insertAlumno($params){
    include_once "../model/ALUMNO.php";
    $ALUMNO= new ALUMNO();
    $id=1;
    $ALUMNO->setIdPersona($id);
    $ALUMNO->setNombre($params['nombre']);
    $ALUMNO->setApp($params['app']);
    $ALUMNO->setApm($params['apm']);
    $ALUMNO->setSexo($params['sexo']);
    $ALUMNO->setEmail($params['email']);
    $ALUMNO->setUserName($params['user_name']);
    $ALUMNO->setAvatar($params['avatar']);
    $ALUMNO->setPw(md5($params['pwd']));
    if($ALUMNO->queryInsertPersona()){
        //Se genera el ID
        $idAlumno=1;
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
    $id=1;
    $ALUMNO->setIdPersona($id);
    $ALUMNO->setNombre($params['nombre']);
    $ALUMNO->setApp($params['app']);
    $ALUMNO->setApm($params['apm']);
    $ALUMNO->setSexo($params['sexo']);
    $ALUMNO->setEmail($params['email']);
    return $ALUMNO->queryUpdatePersona();
}


?>