<!-- archivo para loguearnos -->
<?php 
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD']== 'POST') { #Preguntar si se esta enviando por el metodo post 
	$user = $con->real_escape_string(htmlentities($_POST['usuario']));#metodo para escapar las varibles por si tienen algo malicioso
	$pass = $con->real_escape_string(htmlentities($_POST['contra']));

	$candado = ' '; #para buscar si hay un espacio
	$str_u = strpos($user,$candado); #strpost busca caracteres
	$str_p = strpos($pass,$candado); 
	if (is_int($str_u)) { #is_int es para preguntar si encontro un entero
		$user = ''; #si encuentra un espacio vacia la variable en caso de que tenga algo malicioso
	}else{
		$usuario = $user; #en caso de que no se crea una nueva variable usuario
	}


	if (is_int($str_p)) { #is_int es para preguntar si encontro un entero
		$pass = ''; #si encuentra un espacio vacia la variable en caso de que tenga algo malicioso
	}else{
		$pass2 = sha1($pass); #aqui se desencripta la contraseña para compararla con lo que ingresa el usuario
	}

	#si viene con un espacio
	if ($user == null OR $pass == null) {
		header('location:../extend/alerta.php?msj=El formato no es correcto&c=salir&p=salir&t=error');

	}else{
		#consulta para mandar a llamar los usuarios que estan en la bd 
		#aqui se pregunta si existe el usuario
		$sel = $con->query("SELECT nick,nombre,nivel,correo,foto,pass FROM usuario WHERE nick='$usuario'  AND pass='$pass2' AND bloqueo=1 ");
		$row = mysqli_num_rows($sel);
		if ($row == 1) {
			if ($var = $sel->fetch_assoc()) { #para sacar las variables que se necesitan
				$nick = $var['nick'];
				$contra = $var['pass'];
				$nivel = $var['nivel'];
				$correo = $var['correo'];
				$foto = $var['foto'];
				$nombre = $var['nombre'];
			}

			#validadcion para que el usuario pueda entrar
			#aqui se generan las variables desision
			if ($nick == $usuario && $contra == $pass2 && $nivel == 'ADMINISTRADOR') {
				$_SESSION['nick'] = $nick;
				$_SESSION['nombre'] = $nombre;
				$_SESSION['nivel'] = $nivel;
				$_SESSION['correo'] = $correo;
				$_SESSION['foto'] = $foto;
				header('location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');

				#aqui es para que el usuario asesor pueda ver el menu
			}elseif ($nick == $usuario && $contra == $pass2 && $nivel == 'ASESOR') {
				$_SESSION['nick'] = $nick;
				$_SESSION['nombre'] = $nombre;
				$_SESSION['nivel'] = $nivel;
				$_SESSION['correo'] = $correo;
				$_SESSION['foto'] = $foto;
				header('location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
				#alertas de error
				
			}else {
				header('location:../extend/alerta.php?msj=no tienes el permiso para entrar&c=salir&p=salir&t=error');
			}


		}else{
			header('location:../extend/alerta.php?msj=Nombre de usuario o contraseña incorrecotos&c=salir&p=salir&t=error');
		}
	}

}else{
	header('location:../extend/alerta.php?msj=Utiliza el formulario&c=salir&p=salir&t=error');
}	
?>