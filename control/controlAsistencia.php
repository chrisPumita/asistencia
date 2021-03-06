<?php

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

function cancelaPaseLista($idPase){
    include "../model/PASE_LISTA.php";
    $PL  = new PASE_LISTA();
    $PL->setIdPase($idPase);
    return $PL->queryCancelaPaseLista();
}

function updateNotaPaseLista($idPase,$nota){
    include "../model/PASE_LISTA.php";
    $PL  = new PASE_LISTA();
    $PL->setIdPase($idPase);
    $PL->setNotas($nota);
    return $PL->queryUpdateNotasPaseLista();
}

function revisaJustificante($idPase, $idAlumno,$action)
{
    include_once "../model/ASISTENCIA.php";
    $ASIS = new ASISTENCIA();
    $ASIS->setIdAlumnoFk($idAlumno);
    $ASIS->setIdPaseFk($idPase);
    $log = date("H:i:s"). ": Revisado como ";
    $ASIS->setConfirmada($action == 1? "1":"-1");
    $ASIS->setValue($action == 1? "1":"0");
    $ASIS->setEstatusRevJust(1);
    $ASIS->setLog($log. " ".($action == 1 ? " ACEPTADO ":" RECHAZADO "));
      return $ASIS->queryUpdatePorJustificante();
}

function procesaJustificanteAlumno($archivo1,$nombreFILE1,$idPase,$idAlumno)
{
    include_once "../model/ASISTENCIA.php";
    $FILE = new ASISTENCIA();
    $FILE->setIdPaseFk($idPase);
    $FILE->setIdAlumnoFk($idAlumno);

    $carpeta = '../justificantes'; // URL COMPLETA
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }
    $hoy= date('Y-m-d-His');
    $nombre= md5($idPase.$idAlumno.'-'.$hoy);
    $nombre =str_replace(' ', '', $nombre);
    $ruta1 = $carpeta.'/'.$nombreFILE1; // RUTA1 EXAMPLE: "/24072019.24/e-r.jpg"
    $extension = pathinfo($ruta1, PATHINFO_EXTENSION);

    if (move_uploaded_file($archivo1, $ruta1)){
        rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/tarjetaCirc.jpg"
        //Guardar en el modelo de arhcivo
        $path = $carpeta.'/'.$nombre.'.'.$extension;
        $FILE->setUrlJustificante($path);
        return $FILE->querySubeJustificante();
    }
    return false;
}

function cargaJustifiicantesPendientes($filtro,$id){
    include_once "../model/ASISTENCIA.php";
    $ASI = new ASISTENCIA();
    return  $ASI->queryConsultaJustificantes($filtro,$id);
}

