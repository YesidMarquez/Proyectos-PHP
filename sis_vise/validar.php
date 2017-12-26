<?php

$USUARIO= $_POST['Nombre'];
$CONTRASEÑA=$_POST['Password'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {
	header("Location: index.html");
	exit();
}


//Consulta a la tabla
$conn =mysqli_connect('localhost','root','') or die("Error al conectar " . mysqli_error());
mysqli_select_db($conn,"credenciales")or die("cannot select DB");
echo "Hasta el momento tu Login finciona";

//Consulta a la tabla
$result = mysqli_query($conn,"SELECT * from usuarios where usuario='" . $USUARIO . "'");
echo "Hasta el momento tu Login finciona";

if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		
		header("Location: menu.php");
		# code...
	}else{
			header("Location:index.html");
			exit();
			# code...
	}


}else{
	header("Location:index.html");
	exit();

}

 ?>