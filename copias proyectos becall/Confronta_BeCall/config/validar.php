<?php

$USUARIO= $_POST['User'];
$CONTRASEÑA=$_POST['Password'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {
	echo"<script> alert('Por favro ingrese datos para Login.'); window.location.href='../index.html'; </script>";
	//header("Location: ../index.html");
	exit();
}


//Conexion Base de Datos
require 'conexion.php';

//Consulta a la tabla
$sql = ("SELECT * from usuarios where usuario='" . $USUARIO . "'");
$result = $mysqli->query($sql);
if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		
		header("Location: ../menu.php");
		# code...
	}else{
			echo"<script> alert('Usuario o clave incorrecta. Vuelva a digitarlos por favor.'); window.location.href='../index.html'; </script>";
			//header("Location: ../index.");
			exit();
			# code...
	}


}else{
	echo"<script> alert('Usuario o clave incorrecta. Vuelva a digitarlos por favor.'); window.location.href='../index.html'; </script>";
	//header("Location: ../index.html");
	exit();

}

 ?>