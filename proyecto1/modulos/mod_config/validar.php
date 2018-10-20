<?php

if (!isset($_SESSION)) {
  session_start();
}

$USUARIO= $_POST['User'];
$CONTRASEÑA=$_POST['Password'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {
	echo"<script> alert('Por favro ingrese datos para Login.'); window.location.href='../index.php'; </script>";
	//header("Location: ../index.html");
	exit();
}


//Conexion Base de Datos
require 'conexion.php';

//Consulta a la tabla
$sql = ("SELECT * from usuarios where password= $CONTRASEÑA");
$result = $mysqli->query($sql);
if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA && $row["usuario"]==$USUARIO) {
		
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		$_SESSION['nombres'] = $row['nombre_1']." ".$row['nombre_2']." ".$row['apellido_1']." ".$row['apellido_1'];
		$_SESSION['cedula'] = $row['id_usuario'];
		$_SESSION['usuario'] = $row['usuario'];
		$_SESSION['nivel'] = $row['nivel'];
		
		if ($_SESSION['nivel']=="ADMIN") {
			$_SESSION['usuario'] = $USUARIO;
			$_SESSION['nombres'] = $row['nombre_1']." ".$row['nombre_2']." ".$row['apellido_1']." ".$row['apellido_1'];
			$_SESSION['cedula'] = $row['id_usuario'];
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['nivel'] = $row['nivel'];
			
			header("Location: ../../menu.php");
		}else{
			
			header("Location: ../mod_consultas/planta.php");	
		}
			
		# code...
	}else{
			echo"<script> alert('Usuario o clave incorrecta. Vuelva a digitarlos por favor.'); window.location.href='../../index.php'; </script>";
			//header("Location: ../index.");
			exit();
			# code...
	}


}else{
	echo"<script> alert('Usuario o clave incorrecta. Vuelva a digitarlos por favor.'); window.location.href='../../index.php'; </script>";
	//header("Location: ../index.html");
	exit();

}
/*_____________________________________________________________*/

 


/*
$_SESSION['nombre'] = $row['nombres'];
$_SESSION['apellido'] = $row['apellidos'];
$_SESSION['cedula'] = $row['cedula_usuario'];
$_SESSION['id_cargo'] = $row['id_cargo'];
$_SESSION['cargo'] = $row['descripcion'];

if ($row['contrasena']<>$password) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique .")
	self.location = "../../index.html"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['id_usuario']  = $row['id_cargo'];
	if ($_SESSION['id_usuario']<>2) {
		
		header("Location: ../mod_consul/ventaxagente.php");
	}else{
		
		header("Location: ../mod_consul/menu.php");	
	}
	
}*/
?>