<?php 
session_start();

if ($_SESSION['cedula'])
{	
	session_destroy();
	
	echo"<script> alert('su sesion ha terminado correctamente.'); window.location.href='../../index.php'; </script>";
}

?>
