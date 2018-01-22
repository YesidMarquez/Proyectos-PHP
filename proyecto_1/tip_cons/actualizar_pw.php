<?php

require '../config/conexion.php';

$USUARIO= $_POST['user'];
$CONTRASEÑA=$_POST['pw'];

if (empty($USUARIO) || empty($CONTRASEÑA)) {

	header("Location: ../operaciones/cambiar_pw.php");

	exit();
}


//Conexion Base de Datos
require '../config/conexion.php';
//Consulta a la tabla
$sql = ("SELECT * from usuarios where usuario='" . $USUARIO . "'");
$result = $mysqli->query($sql);
echo "Hasta el momento tu Login finciona";

if ($row = mysqli_fetch_array($result)) {
	if ($row["password"]==$CONTRASEÑA) {
		session_start();
		$_SESSION['usuario'] = $USUARIO;
		
		
		# code...
	}else{
			header("Location: ../pw.php");
			exit();
			# code...
	}


}else{
	header("Location: ../operaciones/cambiar_pw.php");
	exit();

}

 ?>



 
<html lang="es">
	<head>
				
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($result) { ?>
						<h3>Señor usuario <?php echo ($USUARIO)?> su contraseña fue modificada</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="../menu.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
