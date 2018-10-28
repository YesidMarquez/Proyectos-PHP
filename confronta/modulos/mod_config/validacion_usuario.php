<?php 
//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}
//Recibir los datos ingresados en el formulario
$usuario= $_POST['User'];

$password= $_POST['password'];
//echo "string".$usuario;
//echo "string".$password;

if (empty($usuario) || empty($password)) {
	
	echo"<script> alert('Por favro ingrese datos para Login.'); window.location.href='../../index.html'; </script>";
	//header("Location: ../index.html");
	exit();
}
require 'conexion.php';
//Consultar si los datos son están guardados en la base de datos
$sql = ("CALL UserValidate('$usuario','$password')");

$result = $mysqli->query($sql);
$fila = $result->fetch_array(MYSQLI_ASSOC);

$_SESSION['nombre'] = $fila['nombres'];
$_SESSION['apellido'] = $fila['apellidos'];
$_SESSION['cedula'] = $fila['cedula_usuario'];
$_SESSION['id_cargo'] = $fila['id_cargo'];
$_SESSION['cargo'] = $fila['descripcion'];

if ($fila['contrasena']<>$password) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	/*echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique .")
	self.location = "../../index.html"
	</script>';*/
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['id_usuario']  = $fila['id_cargo'];
	if ($_SESSION['id_usuario']==1) {
		
		header("Location: ../mod_consul/ventaxagente.php");
	}elseif ($_SESSION['id_usuario']==2) {
		header("Location: ../mod_consul/menu.php");
		# code...
	}elseif ($_SESSION['id_usuario']>2) {
		header("Location: ../mod_consul/menu.php");
		
	}		
	
	
}
?>