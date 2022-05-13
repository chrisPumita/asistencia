<?php
$codigoInvitacion = $_POST['codigoInvitacion'];

include_once "../control/controlInscripcion.php";

if(inscripcionAlumno($codigoInvitacion)){
    $mensaje = "Te has inscrito correctamente";
    $value = 1;
} else {
    $mensaje = "Error el código es incorrecto o ya estas inscrito a este grupo, no te has podido inscribir a esta materia.";
    $value = 0;
}

$rest = array(
    "mensaje" => $mensaje,
    "response" => $value
);

echo json_encode($rest);