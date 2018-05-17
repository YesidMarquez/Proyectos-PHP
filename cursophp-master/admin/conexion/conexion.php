<?php @session_start(); #metodo que se usa para traer todas las variables desision
$con = new mysqli('localhost','root', '', 'inmoviliaria');
#para los acentos

$con->set_charset('utf8');

?>