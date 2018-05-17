<!-- este es para las alertas -->
<?php 
include '../conexion/conexion.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../cdn/sweetalert2.css">
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script><!--../materialize/js/materialize.min.js -->
	<title>Proyecto</title>
</head>
<body>

<!-- aqui recibimos las alertas -->
<?php
$mensaje = htmlentities($_GET['msj']);
$c = htmlentities($_GET['c']);
$p = htmlentities($_GET['p']);
$t = htmlentities($_GET['t']);

#direccionamiento de las variables
switch ($c) { 
	case 'us':
		$carpeta = '../usuarios/';
		break;

	#para el login de usuario
	case 'home':
		$carpeta = '../inicio/';# si el logueo fue exitoso nos redirecciona a la carpeta de inicio 
		break;
	#por si no es exitoso el logueo
	case 'salir':
		$carpeta = '../';
		break;

	#caso para actualizar la foto de perfil		
	case 'pe':
		$carpeta = '../perfil/';
		break;	

	case 'cli':
		$carpeta = '../clientes/';
		break;

	#12
	case 'prop':
		$carpeta = '../propiedades/';
		break;				
}

switch ($p) {
	case 'in': /* in es un valor y quiere decir index */
		$pagina = 'index.php';
		break;

	#case para el login 
	case 'home':
		$pagina = 'index.php';
		break;
	case 'salir':
		$pagina = '';
		break;	

	#case para editar datos del perfil
	case 'perfil':
		$pagina = 'perfil.php';
		break;

	#16 para cambiar la foto de las propiedades 
	case 'img':
		$pagina = 'imagenes.php';
		break;

	#27 eliminar propiedad
	case 'can':
		$pagina = 'cancelados.php';
		break;
	#sec 10.2 pagina slider	
	case 'sl':
		$pagina = 'slider.php';
		break;							
}
#16 
if (isset($_GET['id'])) {
	$id = htmlentities($_GET['id']);
	$dir = $carpeta.$pagina.'?id='.$id;
}else {
	/*variAble que se forma con la carpeta y la pagina y se direcciona en la funcion de la alerta*/
	$dir = $carpeta.$pagina;
}




if ($t == "error") {
	$titulo = "Oppss..";
}else{
	$titulo = "Buen trabajo";
}
?>


<!-- codigo de la alerta traido de la pagina de sweetalert2 aqui nos traemos las variables de la alerta con php-->
<script
  type="text/javascript"
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="../cdn/sweetalert2.js"></script>

<script>
	swal({
  title: '<?php echo $titulo ?>',
  text: "<?php echo $mensaje ?>",
  type: '<?php echo $t ?>',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'OK'
}).then(function () {
    location.href='<?php echo $dir ?>'; /* redireccionamiento a la pagina */
});

$(document).click(function() {
	location.href ='<?php echo $dir ?>';
});

/* document es para que cuando se presione la tecla scape nos direccione a la pagina dreccion*/
$(document).keyup(function(e) {
	if (e.which == 27) { /* 27 es el codigo de la tecla scape */
		location.href ='<?php echo $dir ?>';
	}
});

</script>  

</body>
</html>