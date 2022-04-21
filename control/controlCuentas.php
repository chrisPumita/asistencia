<?php
//Funcion para mostrar los datos del alumno en su perfil
function datosPerfilesAlumno($idAlumno){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setIdAlumno($idAlumno);
    return $ALUMNO->queryDatosPerfilesAlumno();
}
?>