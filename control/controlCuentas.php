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

function updateAvatar($archivo1,$nombreFILE1){
    if($archivo1!= ""){
        include_once "../model/PERSONA.php";
        session_start();
        $idPersona = $_SESSION['id_persona'];
        $PERSONA= new PERSONA();
        $PERSONA->setIdPersona($idPersona);
        $carpeta= "../recursos/avatars"; //URL COMPLETA
        if(!file_exists($carpeta)){
            mkdir($carpeta,0777,true);
        }
        $hoy= date('Y-m-d-His');
        $nombre= md5($idPersona.'-'.$hoy);
        $nombre =str_replace(' ', '', $nombre);
        $ruta1 = $carpeta.'/'.$nombreFILE1; // RUTA1 EXAMPLE: "/24072019.24/e-r.jpg"
        $extension = pathinfo($ruta1, PATHINFO_EXTENSION);

        if (move_uploaded_file($archivo1, $ruta1)){
            rename ($ruta1, $carpeta.'/'.$nombre.'.'.$extension); // RUTA1 EXAMPLE: "/24072019.24/tarjetaCirc.jpg"
            //Guardar en el modelo de arhcivo

            $path = $carpeta.'/'.$nombre.'.'.$extension;
            $PERSONA->setAvatar($path);
            //  $result = insertObjDocCoch($tipoArchivo,$noVehiculo,$nombre,$path,$extension,$privado,0);
            //   return $result;
            if($PERSONA->queryUpdateAvatar()){
                $_SESSION['avatar'] = $PERSONA->getAvatar();
                return true;
            }
                
        } else{
            return false;
        }
    } else{
        return false;
    }
}

function updatePassword($oldPwd,$newPwd){
    session_start();
    //Obtenemos correo para el envio de verificacion y el tipo de 
    if(verificaCuenta($_SESSION['email'],md5($oldPwd),$_SESSION['tipo'])){
        include_once "../model/PERSONA.php";
        $PER= new PERSONA();
        $PER->setIdPersona($_SESSION['id_persona']);
        $PER->setPw(md5($newPwd));
        return $PER->queryUpdatePassword();
    }
    return false;
}

?>
