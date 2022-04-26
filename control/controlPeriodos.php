<?php
session_start();
function consultaPeriodosEscolares($filtro){
    include_once "../model/PERIODO.php";
    $PER = new PERIODO();
    $PER->setIdProfesor($_SESSION['idProfesor']);
    return $PER->queryConsultaPeriodos($filtro);
}

function crearPeriodo($nombre,$f_ini,$f_fin,$tipo){
    include_once "../model/PERIODO.php";
    $PER = new PERIODO();
    $PER->setIdProfesor($_SESSION['idProfesor']);
    $PER->setNombrePeriodo($nombre);
    $PER->setFechaInicio($f_ini);
    $PER->setFechaFin($f_fin);
    $PER->setTipo($tipo);
    return $PER->queryCreaPeriodo();
}