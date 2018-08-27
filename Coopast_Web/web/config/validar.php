<?php
session_start();
$USUARIO= $_POST['user'];
$CONTRASEÑA=$_POST['Password'];




if (empty($USUARIO) || empty($CONTRASEÑA)) {
	header("Location: ../../index.html");
	exit();
}
require 'conexion.php';

//Consulta a la tabla
$sql = ("SELECT * from user where usuario='$USUARIO'");
$result = $mysqli->query($sql);
if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA ) {
		$_SESSION['usuario'] = $USUARIO;
		$_SESSION['cedula'] = $row["cedula"];
		$_SESSION['nivel'] = $row["nivel"];
		$_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

		echo"<script> alert('Bienvenido! $USUARIO'); window.location.href='../index.php'; </script>";		
		//header("Location: ../index.php");
		# code...
	}else{
			echo"<script> alert('NIvel no autorizado.'); window.location.href='../../index.html'; </script>";

			exit();
			# code...
	}


}else{
	header("Location: ../../index.html");
	exit();

}

 ?>