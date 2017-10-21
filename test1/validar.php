<?php

$USUARIO= $_POST['Nombre'];
$CONTRASEÑA=$_POST['Password'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {
	header("Location: index.html");
	exit();
}


//Consulta a la tabla
$conn =mysqli_connect('localhost','root','12345') or die("Error al conectar " . mysqli_error());
mysqli_select_db($conn,"test_1")or die("cannot select DB");
echo "Hasta el momento tu Login finciona";

//Consulta a la tabla
$result = mysqli_query($conn,"SELECT * from users where name='" . $USUARIO . "'");
echo "Hasta el momento tu Login finciona";

if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		
		header("Location: menu.html");
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