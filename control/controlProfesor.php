<?php
function insertProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR= new PROFESOR();
    //Aqui se va a generar el ID de la persona para el profesor
    include_once "../model/MAIN.php";
    // mainModel::limpiar_cadena($_POST['nombre_alumno'])
    $idPersona= MAIN::gen_user_id();
    $PROFESOR->setIdPersona($idPersona);
    $PROFESOR->setNombre($params['nombre']);
    $PROFESOR->setApp($params['app']);
    $PROFESOR->setApm($params['apm']);
    $PROFESOR->setSexo($params['sexo']);
    $PROFESOR->setEmail($params['email']);
    $PROFESOR->setUserName($params['user_name']);
    //Buscar imagen en google cuando haya internet xD
    $PROFESOR->setAvatar("../recursos/avatars/defaultAvatar.webp");
    $PROFESOR->setPw(md5($params['pwd']));
    if($PROFESOR->queryInsertPersona()){
        //Agregaos profesor si se logró hacer el registro de la persona
        $idProfesor=MAIN::genIdBIGInt();
        $PROFESOR->setIdProfesor($idProfesor);
        $PROFESOR->setIdPersonaFk($PROFESOR->getIdPersona());
        $PROFESOR->setGradoAcademico($params['gradoAc']);
        $PROFESOR->setCarreraEsp($params['carrera']);
        $PROFESOR->setAccountConfirm($params['confirm']);
        return $PROFESOR->queryInsertProfesor();
    }
       
}
function updateProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR= new PROFESOR();
    session_start();
    //Este dato se agarra de la session
    $idPersona=$_SESSION['id_persona'];
    $PROFESOR->setIdPersona($idPersona);
    $PROFESOR->setNombre($params['nombre']);
    $PROFESOR->setApp($params['app']);
    $PROFESOR->setApm($params['apm']);
    $PROFESOR->setSexo($params['sexo']);
    $PROFESOR->setEmail($params['email']);
    if($PROFESOR->queryUpdatePersona()){
        //Si se actualiza la persona, actualizamos al profesor.
        //Igual, el id del profesor se tomará de session
        $_SESSION['name_complete'] = $PROFESOR->getNombre()." ".$PROFESOR->getApp()." ".$PROFESOR->getApm();
        $_SESSION['email'] = $PROFESOR->getEmail();
        $idProfesor=$_SESSION['id_profesor'];
        $PROFESOR->setIdProfesor($idProfesor);
        $PROFESOR->setGradoAcademico($params['gradoAc']);
        $PROFESOR->setCarreraEsp($params['carrera']);
        return $PROFESOR->queryUpdateProfesor();
    }
}
?>