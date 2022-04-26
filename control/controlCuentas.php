<?php
//Funcion para mostrar los datos del alumno en su perfil
function datosPerfilesAlumno($idAlumno){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setIdAlumno($idAlumno);
    return $ALUMNO->queryDatosPerfilesAlumno();
}

function iniciaSesion($correo, $pw, $tipo){
    $PERSONA = verificaCuenta($correo, $pw, $tipo);
    if ($PERSONA){
        //Crear la sesion
        session_start();
        $CUENTA= $PERSONA[0];
        $_SESSION['tipo'] = $tipo;
        $_SESSION['name_user'] = $CUENTA['user_name'];
        $_SESSION['name_complete'] = $CUENTA['nombre']." ".$CUENTA['app']." ".$CUENTA['apm'];
        $_SESSION['avatar'] = $CUENTA['avatar'];
        $_SESSION['email'] = $CUENTA['email'];
        $_SESSION['id_persona'] = $CUENTA['id_persona'];
        if($tipo=="profesor"){
            $_SESSION['id_profesor'] = $CUENTA['id_profesor'];
        } else {
            $_SESSION['id_alumno'] = $CUENTA['id_alumno'];
        }
        
        return true;
    }
    else
        return false;
}

function verificaCuenta($correo, $pw, $tipo){
    //alumno
    //profesor
    if ($tipo=="profesor"){
        include_once "../model/PROFESOR.php";
        $PROF = new PROFESOR();
        $PROF->setPw(md5($pw));
        $PROF->setEmail($correo);
        return $PROF->queryConsultaCuentaProfesor();
    }
    else{
        include_once "../model/ALUMNO.php";
        $ALUM= new ALUMNO();
        $ALUM->setPw(md5($pw));
        $ALUM->setEmail($correo);
        return $ALUM->queryConsultaCuentaAlumno();
    }
}



?>
