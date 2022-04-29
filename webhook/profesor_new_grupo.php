<?php

include_once "../control/controlGrupos.php";

$id_periodo_selected = $_POST["id_periodo_selected"];
$carrera_nva = $_POST["carrera_nva"];
$materia_nva = $_POST["materia_nva"];
$grupo_nvo = $_POST["grupo_nvo"];
$min_asis_nvo = $_POST["min_asis_nvo"];
$retardos_num = $_POST["retardos_num"];
$no_clases = $_POST["no_clases"];

$isPorcentual = isset($_POST["chkPOrcent"]) ? true : false;
$arrayDias = isset($_POST["dias"]) ? $_POST["dias"] : null;



$valor_cal = $_POST["valor_cal"];
$radioPts = $_POST["radioPts"];

$code_invitacion = $_POST["code_invitacion"];
$code_invitacion_md5 = $_POST["code_invitacion_md5"];
$correos_send = $_POST["correos_send"];


if (crearNuevoGrupo($id_periodo_selected,$carrera_nva,$materia_nva,
    $grupo_nvo,$min_asis_nvo,$retardos_num,$no_clases,
    $isPorcentual,$arrayDias,$valor_cal,$radioPts,$code_invitacion,
    $code_invitacion_md5,$correos_send)) {
    $mensaje = "Se ha creado un nuevo Grupo";
    $titulo = "Grupo Creado";
    $value = 1;
    $tipoResponse = "success";
} else {
    $mensaje = "Error al crear el Periodo";
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
