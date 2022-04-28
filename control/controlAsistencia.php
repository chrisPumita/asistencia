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
?>