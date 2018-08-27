<?php

$server='127.0.0.1';
$user='yesid_marquez';
$pass='Matias.2014';

$bd='confronta_becall';
$mysqli= new mysqli($server,$user,$pass,$bd);

//Con esta funcion acepto caracteres como tildes t simbolos de la ñ al mostrarlos al cliente
mysqli_set_charset($mysqli,'utf8');
//Si hay conexion no entra mal if
if($mysqli->connect_error){
	dir('Error en la conexion'.$mysqli->connect_error);
}	

//printf("Sevidor informacion: %s\n", $mysqli->server_info);

?>