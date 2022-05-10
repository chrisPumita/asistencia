<?php
function updateEstadoAsistencia($idAlumnnoFk,$idPaseFk,$confirmada,$retardoCheck,$dateJustificante,$estatusRev,$log){
    include_once "../model/ASISTENCIA.php";
    $ASIS = new ASISTENCIA();
    $ASIS->setIdAlumnoFk($idAlumnnoFk);
    $ASIS->setIdPaseFk($idPaseFk);
    $ASIS->setConfirmada($confirmada);
    $ASIS->setCheckRetardo($retardoCheck);
    $ASIS->setUploadDateJustificante($dateJustificante);
    $ASIS->setEstatusRevJust($estatusRev);
    $ASIS->setLog($log);
    return $ASIS->queryUpdateEstadoAsistencia();
}

function updateJustificanteFalta($idAlumnnoFk,$idPaseFk,$confirmada,$value,$url_justificante,$dateJustificante,$estatusRev){
    include_once "../model/ASISTENCIA.php";
    $ASIS = new ASISTENCIA();
    $ASIS->setIdAlumnoFk($idAlumnnoFk);
    $ASIS->setIdPaseFk($idPaseFk);
    $ASIS->setConfirmada($confirmada);
    $ASIS->setValue($value);
    $ASIS->setUrlJustificante($url_justificante);
    $ASIS->setUploadDateJustificante($dateJustificante);
    $ASIS->setEstatusRevJust($estatusRev);
    return $ASIS->queryUpdateJustificanteFalta();
}

function cambioValorAsistencia($idPase,$idAlumno,$actionSet){
    include_once "../model/ASISTENCIA.php";
    $ASIS = new ASISTENCIA();
    $ASIS->setIdAlumnoFk($idAlumno);
    $ASIS->setIdPaseFk($idPase);
    //presente
    //falta
    //retardo
    $log = date("H:i:s"). ": Marcado como ";
    switch ($actionSet){
        case "presente":
            $ASIS->setCheckRetardo(0);
            $ASIS->setConfirmada(1);
            $ASIS->setValue(1);
            $ASIS->setLog($log. " Asistencia");
            break;
        case "falta":
            $ASIS->setConfirmada(-1);
            $ASIS->setCheckRetardo(0);
            $ASIS->setValue(0);
            $ASIS->setLog($log. " Falta");
            break;
        case "retardo":
            $ASIS->setConfirmada(0);
            $ASIS->setCheckRetardo(1);
            //Valor dependiendo del ajuste
            $ASIS->setValue(.5);
            $ASIS->setLog($log. " Retardo");
            break;
    }
    return $ASIS->queryUpdateEstadoAsistencia();
}