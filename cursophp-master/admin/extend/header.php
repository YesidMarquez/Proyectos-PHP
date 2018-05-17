<?php include '../conexion/conexion.php'; 
if (!isset($_SESSION['nick'])) { #pregunta si existe la variable desision 
	header('location:../');  #este codigo es para que no inicie sesion si se cierra el 
}                               #navegador y se pega la url
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet"  href="../cdn/sweetalert2.css">
	<script
	  
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="../cdn/sweetalert2.js"></script>
	<script src="../materialize/js/materialize.min.js"></script> <!--../materialize/js/materialize.min.js -->

	<!-- para generar espacio a la derecha del menu para el contenido -->
	<style media="screen">
		  header, main, footer {
      padding-left: 300px;
    }

/* para quitar el boton del menu cuando esta en pantalla grande */
	.button-collpase{
		display: none;
	}
		.input-field input:focus + label{
			color: #ff9800 !important;
		}
		/*para cambiar el color de las detras del dropdown */
		.dropdown-content li >a, dropdown-content li > span{
			color: #ff8800 !important;
		}
		/*para cambiar de color la linea*/
		.row .input-field input:focus{
			border-bottom: 1px solid #ff9800 !important;
			box-shadow: 0 1px 0 0 #ff9800 !important;
		}
		.prefix{
			color: #ff9800 !important;
		}
		/*para cambiar el color del boton*/
		.btn {
			background-color: #ff9800;
		}
		.btn:hover {
			background-color: #ffcc80;
		}
	
	/*21 para estandarizar todo el sistema con mayusculas */
	
	body{
		text-transform: uppercase;
	}
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
      /*para poner el boton del menu cuando la pantalla esta chiquita */
      .button-collpase{
      	display: inherit;
      }
    }
	</style>
	<title>Proyecto</title>
</head>
<body class="grey lighten-3">

<main>
<!-- llamado al archivo menu -->
<?php 
#esto es para que depende el tipo de usuario lo envie a un menu o a otro menu
if ($_SESSION['nivel'] == 'ADMINISTRADOR') {
	include 'menu_admin.php';
}else {
	include 'menu_asesor.php'; 
}

?>
