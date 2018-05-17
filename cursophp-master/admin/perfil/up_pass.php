<?php  
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nick = $_SESSION['nick'];
	$pass = $con->real_escape_string(htmlentities($_POST['pass1']));
	$pass = sha1($pass);
	$up = $con->query("UPDATE usuario SET pass='$pass' WHERE nick='$nick' ");

	if ($up) {		
		header('location:../extend/alerta.php?msj=Constraseña actualizada&c=pe&p=perfil&t=success');
	}else {
		header('location:../extend/alerta.php?msj=La contraseña no pudo ser actualizada&c=pe&p=perfil&t=error');
	}


	$con->close();
	}else{
		header('location:../extend/alerta.php?msj=Datos actualizados&c=carpeta&p=carpeta&t=tipo');
	}

?>