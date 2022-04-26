<?php
echo crearActualizaPeriodo();
function crearActualizaPeriodo(){
    include_once "../model/PERIODO.php";
    $id_periodo=0;
    $PER = new PERIODO();
    $PER->setIdPeriodo(0);
    $PER->setIdProfesor(1);
    $PER->setNombrePeriodo("Nombre");
    $PER->setFechaInicio("2021-10-21");
    $PER->setFechaFin("2021-10-21");
    $PER->setTipo(1);
   return $id_periodo == 0 ? $PER->queryCreaPeriodo() : $PER->queryActualizaPeriodo();
}
?>