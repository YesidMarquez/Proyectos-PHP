<?php 
require("conexion.php");

//Inicio de variables de sesi�n
if (!isset($_SESSION)) {
  session_start();
}
//Recibir los datos ingresados en el formulario
$user= $_POST['user'];
$password= $_POST['password'];
//Consultar si los datos son est�n guardados en la base de datos
$sql1 = "SELECT * FROM user WHERE usuario='$user' AND password=$password";
$result1 = $mysqli->query($sql1);
$fila = $result1->fetch_array(MYSQLI_ASSOC);
if ($fila=="") //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "../index.html"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesi�n y redirigimos a la p�gina de usuario
	$_SESSION['id_usuario'] = $fila['id_user'];
	$_SESSION['nombre'] = $fila['nombres']." ".$fila['apellidos'] ;
	header("Location: pagina_usuario.php");
}
?>