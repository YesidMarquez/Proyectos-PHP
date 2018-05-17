<!--archivo para bloquear usuarios  -->
<?php
if ($_SESSION['nivel'] != 'ADMINISTRADOR') {
	header("location:bloqueo.php");
}
?>