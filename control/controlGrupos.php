<?php

function crearNuevoGrupo($id_periodo_selected,$carrera_nva,$materia_nva,
                         $grupo_nvo,$min_asis_nvo,$retardos_num,$no_clases,
                         $isPorcentual,$arrayDias,$valor_cal,$radioPts,$code_invitacion,
                         $code_invitacion_md5,$correos_send)
{
    include_once "../model/GRUPO.php";
    $GPO = new GRUPO();
    $GPO->setIdPeriodoFk($id_periodo_selected);
    $GPO->setCarrera($carrera_nva);
    $GPO->setMateria($materia_nva);
    $GPO->setGrupo($grupo_nvo);
    $GPO->setPorcentajeMin($min_asis_nvo);
    $GPO->setRetardoIsFalta($retardos_num);
    $GPO->setNoClases($no_clases);
    $GPO->setIsPorcentual($isPorcentual);

    $diasString = "";
    if ($arrayDias != null){
        foreach ($arrayDias as $dia){
            $diasString .= $dia.",";
        }
    }
    $GPO->setDias($diasString);
    $GPO->setPuntajeFinal($valor_cal);
    $GPO->setCodigoInvitacion($code_invitacion);
    $GPO->setLinkInvitacion($code_invitacion_md5);
    return $GPO->queryCreaGrupo();
}

function ConsultaGrupos($idProfesor,$grpo){
    include_once "../model/GRUPO.php";
    $GPO = new GRUPO();
    $GPO->setIdGrupo($grpo);
    return $GPO->queryConsultaGruposProfesor($idProfesor,$grpo);
}

/*PASES DE LISTA DEL GRUPO*/

function consultaListaAlumnos($idGrupo){
    include_once "../model/GRUPO.php";
    $GPO = new GRUPO();
    $GPO -> setIdGrupo($idGrupo);
    return $GPO->queryListaAlumnosGrupo();
}


function creaNuevoPaseLista($idGrupo){
    include_once "../model/PASE_LISTA.php";
    $PL = new PASE_LISTA();
    include_once "../model/MAIN.php";
    $idPaseGen = MAIN::genIdBIGInt();
    $PL->setIdPase($idPaseGen);
    $PL->setIdGrupoFk($idGrupo);
    $PL->setFecha(date('Y-m-d'));
    $PL->setNotas("Inicia el pase a las: ". date('H:i:s'));
    if($PL->queryCreatePaseLista()){
        //crear los insert en funcion de la lista de alumnos
        $lista = consultaListaAlumnos($PL->getIdGrupoFk());
        include_once "../model/ASISTENCIA.php";
        $ASIS = new  ASISTENCIA();
        $ASIS->setIdPaseFk($idPaseGen);
        if($ASIS->queryInsertAsistenciaList($lista))
        {
            return array("no_pase"=>$idPaseGen, "lista_prepare"=>$PL->queryConsultaListaAsistencia());
        }
    }
    else{
        return false;
    }
}

function consultaPaseLista($idPase, $id_grupo, $filtro, $dia){
    include_once "../model/PASE_LISTA.php";
    $PL = new PASE_LISTA();
    $PL->setIdPase($idPase);
    $PL->setIdGrupoFk($id_grupo);
    $pase_lista =  $PL->queryBuscaPaseLista($filtro,$dia);
    if(count($pase_lista) > 0){
        if($filtro == "DATE"){
            return $pase_lista;
        }
        else{
            $PL->setIdPase($pase_lista[0]["id_pase"]);
            $PL->setFecha($pase_lista[0]["fecha"]);
            $tmpLista =  $PL->queryConsultaListaRealizada();
            if(count($tmpLista) > 0){
                //Lista Genera, la regresamos
                return array("no_pase"=>$idPase, "lista_prepare"=>$PL->queryConsultaListaAsistencia());
            }
            else{
                //no se crearon los inserts, los creamos
                include_once "../model/ASISTENCIA.php";
                $lista = consultaListaAlumnos($PL->getIdGrupoFk());
                $ASIS = new  ASISTENCIA();
                $ASIS->setIdPaseFk($idPase);
                if($ASIS->queryInsertAsistenciaList($lista))
                {
                    return array("no_pase"=>$idPase, "lista_prepare"=>$PL->queryConsultaListaAsistencia());
                }
                return $tmpLista;
            }
        }

    }
    else{
        return false;
    }
}

function consultaHistorialPasesLista($idProfesor,$filtro,$id){
    include_once "../model/PASE_LISTA.php";
    $PL = new PASE_LISTA();
    return $PL->queryHistorialPasesLista($idProfesor,$filtro,$id);
}

function archivarGrupo($idGpo){
    //queryArchivarGpo
    include_once "../model/GRUPO.php";
    $GPO = new GRUPO();
    $GPO -> setIdGrupo($idGpo);
    return $GPO->queryArchivarGpo();
}