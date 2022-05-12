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
?>