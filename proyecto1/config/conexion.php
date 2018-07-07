<?php

$server='localhost';
$user='root';
$pass='';

$bd='pruebas';
$mysqli= new mysqli($server,$user,$pass,$bd);
//Si hay conexion no entra mal if
if($mysqli->connect_error){
	dir('Error en la conexion'.$mysqli->connect_error);
}	

//printf("Sevidor informacion: %s\n", $mysqli->server_info);

?>