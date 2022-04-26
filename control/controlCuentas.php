<?php
//Funcion para mostrar los datos del alumno en su perfil
function datosPerfilesAlumno($idAlumno){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setIdAlumno($idAlumno);
    return $ALUMNO->queryDatosPerfilesAlumno();
}

//Funcion que busca en alumnos e correo y la pasword

function verificaAlumno($params){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setEmail($params['email']);
    $ALUMNO->setPw(md5($params['pwd']));
    $arrayDatos['persona']= $ALUMNO->queryVerificaCuenta();
    if(count($arrayDatos['persona'])>0){
        if($params['checkConf']==1){
            //Si el checkbutton es 1, significa que es un alumno
            $arrayDatos['alumno'] $ALUMNO->queryVerificaAlumno();    
        } else{
            //En caso contrario será profesor
            include_once "../model/PROFESOR.php";
            $PROFESOR = new PROFESOR();
            $arrayDatos['profesor']= $PROFESOR->queryVerificaProfesor();
        }
        return $arrayDatos;
    }
    return false;
}
?>
