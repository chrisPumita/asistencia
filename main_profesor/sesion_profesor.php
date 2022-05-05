<?php
session_start();
$_SESSION["idSesion"] = session_id();
if(!isset($_SESSION['name_user']))
{
    header('Location: ../');
}