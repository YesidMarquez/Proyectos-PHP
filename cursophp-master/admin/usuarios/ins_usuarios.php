
<?php 
#en este archivo se resiven las variable de php
#hacemos llamado a la conexion 
include '../conexion/conexion.php';
#validadmos si se esta enviando por metodo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	/* trae las variables o datos que vienen desde el formulario. Htmlentities es para los ataques de javascripts*/
	$nick = $con->real_escape_string(htmlentities($_POST['nick']));
	$pass1 = $con->real_escape_string(htmlentities($_POST['pass1']));
	#$pass1 = sha1($pass1);  #para encriptar las contraseñas
	$nivel = $con->real_escape_string(htmlentities($_POST['nivel']));
	$nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
	$correo = $con->real_escape_string(htmlentities($_POST['correo']));

	#validaion del formulario con php 
	if (empty($nick) || empty($pass1) || empty($nombre)) {
		header('location:../extend/alerta.php?msj=Hay un campo sin especificar&c=us&p=in&t=error');
		exit;
	}

	if (!ctype_alpha($nick)) {
		header('location:../extend/alerta.php?msj=El nick no contiene solo letras&c=us&p=in&t=error');
		exit;
	}

	if (!ctype_alpha($nivel)) {
		header('location:../extend/alerta.php?msj=El nivel no contiene solo letras&c=us&p=in&t=error');
		exit;
	}

	#para validar el nombre y permitirle espacios 
	$caracteres = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ ";
	for ($i=0; $i < strlen($nombre); $i++) { #strlen me trae la cantidad de carecteres que tiene el campo nombre 
		$buscar = substr($nombre,$i,1); #substr sustrae de la posision i un caracter
		if (strpos($caracteres,$buscar) ===false) { # la funcion strpos busca en el array caracteres la variable buscar
			header('location:../extend/alerta.php?msj=El nombre no contiene solo letras&c=us&p=in&t=error');
		exit;
		}
	}

	$usuario = strlen($nick);
	$contrasenia = strlen($pass1);

	if ($usuario < 8 || $usuario >15) {
		header('location:../extend/alerta.php?msj=El nick debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
		exit;
	}

	if ($contrasenia < 8 || $contrasenia >15) {
		header('location:../extend/alerta.php?msj=la contraseña debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
		exit;
	}

	if (!empty($correo)) {
		if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
			header('location:../extend/alerta.php?msj=El email no es valido&c=us&p=in&t=error');
		exit;
		}
	}


	#para guardar la imagen de perfil
	$extension ='';
	$ruta ='foto_perfil';
	$archivo = $_FILES['foto']['tmp_name']; #nombre temporal del archivo
	$nombrearchivo = $_FILES['foto']['name'];
	$info = pathinfo($nombrearchivo);
	# si el usuario elige una foto de perfil
	if ($archivo !='') {
		$extension = $info['extension'];
		if ($extension == "png" || $extension == "PNG" || $extension == "jpg" || $extension == "JPG") {
			move_uploaded_file($archivo, 'foto_perfil/'.$nick.'.'.$extension);
			$ruta = $ruta."/".$nick.'.'.$extension; #con punto se concatena
		}else {
			header('location:../extend/alerta.php?msj=El fromato no es valido&c=us&p=in&t=error');
		exit;
		}
		
	}else {
		$ruta = "foto_perfil/matrix.jpg"; #por si el usuario no sube ninguna foto se le da una por defecto
	}

#guardar los datos de el formulario en la base de datos 
$pass1 = sha1($pass1);  #para encriptar las contraseñas
$ins = $con->query("INSERT INTO usuario VALUES('','$nick','$pass1','$nombre','$correo','$nivel',1,'$ruta')"); #en numero 1 significa que esl usuario esta activo 
if ($ins) {
		header('location:../extend/alerta.php?msj=El usuario ha sido registrado&c=us&p=in&t=success');
	}else {
		header('location:../extend/alerta.php?msj=El no pudo ser registrado&c=us&p=in&t=error');
	}

	#cerramos la conexion
	$con->close();	


}else {
	#redireccionamiento a la pagino donde estemos creando la alerta
	header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');
}

?>