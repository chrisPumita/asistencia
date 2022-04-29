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

function ConsultaGrupos($idProfesor,$filtro,$DIA){
    include_once "../model/GRUPO.php";
    $GPO = new GRUPO();
    return $GPO->queryConsultaGruposProfesor($idProfesor,$filtro,$DIA);
}