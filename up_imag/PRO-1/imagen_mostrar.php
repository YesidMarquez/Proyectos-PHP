<?php
########## imagen_mostrar.php ##########
# debe recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com
 
# Conectamos con MySQL
$server='127.0.0.1';
$user='yesid_marquez';
$pass='Matias.2014';

$bd='confronta_becall';
$mysqli= new mysqli($server,$user,$pass,$bd);
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
 
# Buscamos la imagen a mostrar
$sql1 = 
"INSERT INTO `imagephp` (`imagen`, `confronta_token`) VALUES ('$imagen, '$token'); ";
$resultado1 = $mysqli->query($sql1);

if ($resultado1){

echo"<script> alert('Operacion exitosa este es el token de operacion = $token.'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
}
else{
echo"<script> alert('No se pudo insertar comuniquese con el administrador del sistema'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
} 
?>