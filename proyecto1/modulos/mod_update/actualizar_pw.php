<?php

require '../config/conexion.php';
session_start();
if (!$_SESSION){
echo"<script> alert('Usuario no autenticado.'); window.location.href='../index.php'; </script>";
}
$ID= $_POST['id'];
$USUARIO= $_POST['user'];
$CONTRASEÑA=$_POST['npw'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {

	header("Location: ../operaciones/cambiar_pw.php");

	exit();
	
}

$sql = "UPDATE usuarios SET password = '$CONTRASEÑA' WHERE id_usuario = '$ID';";
	$resultado = $mysqli->query($sql);
	/********************************************************************************************/
	
?>
 
<html lang="es">
	<head>
				
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Planta | 2.0</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <link rel="icon" type="image/x-icon" href="../imagenes/logos/favicon.ico" />
        <script src="../js/bootstrap.min.js"></script> 
	</head>
	
	<body><font face="Comic Sans MS,verdana">
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>Usuario <?php echo ($USUARIO)?> SU PW FUE MODIFICADA</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="../operaciones/cambiar_pw.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
