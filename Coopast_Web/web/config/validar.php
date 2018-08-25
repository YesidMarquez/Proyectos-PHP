<?php
session_start();
$USUARIO= $_POST['user'];
$CONTRASEÑA=$_POST['Password'];




if (empty($USUARIO) || empty($CONTRASEÑA)) {
	header("Location: ../../index.html");
	exit();
}


//Conexion Base de Datos
require 'conexion.php';

//Consulta a la tabla
$sql = ("SELECT * from user where usuario='$USUARIO'");
$result = $mysqli->query($sql);
if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		$_SESSION['usuario'] = $USUARIO;
		$_SESSION['contraseña'] = $CONTRASEÑA;
		$_SESSION['cedula'] = $row["cedula"];
		
			
		header("Location: ../index.php");
		# code...
	}else{
			header("Location: ");
			exit();
			# code...
	}


}else{
	header("Location: ../../index.html");
	exit();

}

 ?>