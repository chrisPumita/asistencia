<?php

function consultaPeriodosEscolares($filtro){
    include_once "../model/PERIODO.php";
    session_start();
    $PER = new PERIODO();
    $PER->setIdProfesor($_SESSION['id_profesor']);
    return $PER->queryConsultaPeriodos($filtro);
}

function crearActualizaPeriodo($id_periodo,$nombre,$f_ini,$f_fin,$tipo){
    include_once "../model/PERIODO.php";
    session_start();
    $PER = new PERIODO();
    $PER->setIdPeriodo($id_periodo);
    $PER->setIdProfesor($_SESSION['id_profesor']);
    $PER->setNombrePeriodo($nombre);
    $PER->setFechaInicio($f_ini);
    $PER->setFechaFin($f_fin);
    $PER->setTipo($tipo);
   return $id_periodo == 0 ? $PER->queryCreaPeriodo() : $PER->queryActualizaPeriodo();
}