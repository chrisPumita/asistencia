<?php
#CONFIGURACION DEL SERVIDOR
#cONSTANTES DE PARAMETROS DE LA CONEXION A LA BD
#
date_default_timezone_set("America/Mexico_City");

const SERVER = "localhost";
const DB = "lista_p1";
const USER = "root";
const PASS = "";

#CONEXION POR PDO en caso de usar PDO

const SGDB = "mysql:host=".SERVER.";dbname=".DB;

#Encriptar por hash
const METHOD = "AES-256-CBC";
const SECRET_KEY = '$CHRISRSCG@2022';
const SECRET_IV = '037970';

#USER MAILING
const HOST = '';
const NAME_MAIL = "";
const USERNAME_MAIL = '';
const PW_MAIL = '';
const PORT_MAIL = 465;