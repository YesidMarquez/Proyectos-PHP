<?php

$USUARIO= $_POST['Nombre'];
$CONTRASEÑA=$_POST['Password'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {
	header("Location: ../index.html");
	exit();
}


//Conexion Base de Datos
require 'conexion.php';

//Consulta a la tabla
$sql = ("SELECT * from usuarios where usuario='" . $USUARIO . "'");
$result = $mysqli->query($sql);
 

if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		
		header("Location: ../menu_ppal.php");
		# code...
	}else{
			header("Location: ../index.html");
			exit();
			# code...
	}


}else{
	header("Location: ../index.html");
	exit();
	?>


}

<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/
require 'conexion.php';
$user=$_POST['User'];
$pass=$_POST['Password'];
    
$sql = "SELECT usuario, password FROM usuarios WHERE usuario = 'ymarquez' and password= 123; ";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
if ($row['usuario']==$user) {
    if ($row['password']==$pass) {
        header('Location: ../menu_ppal.php');
    }else{

    echo "Contraseña Invalida";}
   
}else{
    echo "Usuario Invalido";
}

/*------------------------------------------------*/

/************************************************** FIN AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO ****************************/ 
?>

<!--******************************************************* INICIO AREA DE DISEÑO (FRONTEND)PROYECTO ********************************-->
