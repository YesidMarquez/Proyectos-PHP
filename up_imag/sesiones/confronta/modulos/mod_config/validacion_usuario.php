<?php 
require("conexion.php");

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}
//Recibir los datos ingresados en el formulario
$user= $_POST['User'];
$password= $_POST['password'];

if (empty($user) || empty($password)) {
	echo"<script> alert('Por favro ingrese datos para Login.'); window.location.href='../index.html'; </script>";
	//header("Location: ../index.html");
	exit();
}

//Consultar si los datos son están guardados en la base de datos
$sql1 = "SELECT * FROM login l, usuarios u, cargo c WHERE l.usuario=$user AND u.cedula_usuario=$user and l.contraseña='$password' and u.cargo_id=c.id_cargo";
$result1 = $mysqli->query($sql1);
$fila = $result1->fetch_array(MYSQLI_ASSOC);
if ($fila=="") //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "../../index.html"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['id_usuario']  = $fila['id_cargo'];
	if ($_SESSION['id_usuario']<>2) {
		$_SESSION['nombre'] = $fila['nombres'];
		$_SESSION['apellido'] = $fila['apellidos'];
		$_SESSION['cedula'] = $fila['cedula'];
		$_SESSION['id_cargo'] = $fila['id_cargo'];
		$_SESSION['cargo'] = $fila['descripcion'];
		header("Location: ../mod_consul/ventaxagente.php");
	}else{
		$_SESSION['nombre'] = $fila['nombres'];
		$_SESSION['apellido'] = $fila['apellidos'];
		$_SESSION['cedula'] = $fila['cedula'] ;
		$_SESSION['id_cargo'] = $fila['id_cargo'] ;
		$_SESSION['cargo'] = $fila['descripcion'];
		header("Location: ../mod_consul/menu.php");	
	}
	
}
?>