<?php

$USUARIO= $_POST['user'];
$CONTRASEÑA=$_POST['Password'];
echo " uswer :".$USUARIO;
echo "          pw :".$CONTRASEÑA;


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
		session_start();
		$_SESSION['usuario'] = $USUARIO;
			
		header("Location: ../index.php?usuario=$USUARIO");
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