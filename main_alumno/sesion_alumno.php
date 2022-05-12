<?php
session_start();
$_SESSION["idSesion"] = session_id();
if(!isset($_SESSION['name_user']) || !isset($_SESSION['id_alumno']))
{
    header('Location: ../');
}