<?php

$USUARIO= $_POST['Nombre'];
$CONTRASEÑA=$_POST['Password'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {
	header("Location: ../index.html");
	exit();
}


//Conexion Base de Datos
require 'conexion.php';

//Consulta a la tabla
$sql = ("SELECT * from usuarios where usuario='" . $USUARIO . "'");
$result = $mysqli->query($sql);
echo "Hasta el momento tu Login finciona";

if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		
		header("Location: ../menu_ppal.php");
		# code...
	}else{
			header("Location: ../index.html");
			exit();
			# code...
	}


}else{
	header("Location: ../index.html");
	exit();

}

 ?>