<?php 
session_start();

if ($_SESSION['id_usuario'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion ha terminado correctamente")
	self.location = "../../index.html"
	</script>';
}

?>
