<?php 
session_start();

if ($_SESSION['nombre'] && $_SESSION['id_usuario'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion ha terminado correctamente $user")
	self.location = "../index.html"
	</script>';
}


?>
