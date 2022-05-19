<?php
if(isset($_POST['pass_actual']) && isset($_POST['pass_nvo']) && isset($_POST['pass_nvo_confi'])){
    if($_POST['pass_nvo'] == $_POST['pass_nvo_confi']){
        include_once "../control/controlCuentas.php";
        if(updatePassword($_POST['pass_actual'],$_POST['pass_nvo'])){
            $mensaje = "Se ha actualizado con exito";
            $titulo = "¡HECHO!";
            $value = 1;
            $tipoResponse = "success";    
        } else{
            $mensaje = "La contraseña actual no coincide";
            $titulo = "ERROR";
            $value = -1;
            $tipoResponse = "error";    
        }
    } else {
        $mensaje = "Las contraseñas no coinciden";
        $titulo = "ERROR";
        $value = 0;
        $tipoResponse = "error";    
    }
} 
else {
    $mensaje = "Faltan campos";
    $titulo = "ERROR";
    $value = 0;
    $tipoResponse = "error";
}

$rest = array(
    "mensaje" => $mensaje,
    "titulo" => $titulo,
    "response" => $value,
    "tipo" => $tipoResponse
);

echo json_encode($rest);

?>