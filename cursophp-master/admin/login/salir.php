<?php @session_start();
#con este codigo se destruyen todas las variables de sesion que existan
$_SESSION = array();
session_destroy();
header("location:../");
?>