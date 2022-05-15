<?php
function insertGrupoAlumno($idGrupoFk,$idAlumnoFk){
    include_once "../model/GRUPO_ALUMNO.php";
    $GPO_AL= new GRUPO_ALUMNO();
    $GPO_AL->setIdGrupoFk($idGrupoFk);
    $GPO_AL->setIdAlumnoFk($idAlumnoFk);
    return $GPO_AL->quertInsertGrupoAlumno();
}

function updateEstatusGrupoAlumno($idGrupoFk,$idAlumnoFk,$estatus){
    include_once "../model/GRUPO_ALUMNO.php";
    $GPO_AL= new GRUPO_ALUMNO();
    $GPO_AL->setIdGrupoFk($idGrupoFk);
    $GPO_AL->setIdAlumnoFk($idAlumnoFk);
    $GPO_AL->setEstatus($estatus);
    return $GPO_AL->queryUpdateEstatusGrupoAlumno();
}

function buscaGrupoCode($codeInvitacion){
    include "../model/GRUPO.php";
    $GPO = new GRUPO();
    $GPO->setCodigoInvitacion($codeInvitacion);
    return $GPO->queryBuscaGrupoCodigo();
}

function inscripcionAlumno($codigoInvitacion){
    $grupoFound = buscaGrupoCode($codigoInvitacion);
    if ($grupoFound){
        include "../model/GRUPO_ALUMNO.php";
        session_start();
        $idAlumno = $_SESSION['id_alumno'];
        $idGrupo = $grupoFound[0]['id_grupo'];
        $INSC = new GRUPO_ALUMNO();
        $INSC->setIdGrupoFk($idGrupo);
        $INSC->setIdAlumnoFk($idAlumno);
        try {
            if($INSC->queryInsertGrupoAlumno())
                return true;
        }
        catch(Exception $e) {
            return false;
        }
    }
    else{
        return false;
    }
}

function consultaInscAlumno($filtro,$idAlumno){
    include_once "../model/GRUPO_ALUMNO.php";
    $GA = new GRUPO_ALUMNO();
    $GA->setIdAlumnoFk($idAlumno);
    return $GA->queryConsultaInscripciones($filtro);
}

function consultaPasesListaAlumno($filtro, $idAlumno,$id){
    include_once "../model/ASISTENCIA.php";
    $GA = new ASISTENCIA();
    $GA->setIdAlumnoFk($idAlumno);
    return $GA->consultaPaseListaAlumno($filtro,$id);
}
