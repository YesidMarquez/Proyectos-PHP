<?php 
include '../conexion/conexion.php';

/* real_escape_string para evitar que en las consultas tenga problemas con sql injection*/
$nick = $con->real_escape_string($_POST['nick']);

/* trahe un id y busca en la tabla de usuario si existe un nick */
$sel = $con->query("SELECT id FROM usuario WHERE nick = '$nick'");

/*cuenta el numero de filas que encontro  */
$row = mysqli_num_rows($sel);
if ($row != 0) {
	echo "<label style='color:red;'>El nombre de usuario ya axiste</label>";
}else{
	echo "<label style='color:green;'>El nombre de usuario esta disponible</label>";
}
# para cerrar la conexion y a minimizar recursos
$con->close()
?>