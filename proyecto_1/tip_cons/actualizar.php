<?php
   	require '../config/conexion.php';

	
	$id = $_POST['id'];
	$fecha = $_POST['fec'];
	$inicio = strtotime($fecha);
	$inicio1 = date('Y-m-d',$inicio);
	
	echo ($inicio1);
	echo ($id);

	
	$sql = "UPDATE acreditacion SET fecha_acreditacion = '$inicio1' WHERE empleado_id='$id'";
	
	$resultado = $mysqli->query($sql);
	if($resultado == false) {
	echo '<p>Error al modificar los campos en la tabla.</p>';
	}else{
	echo '<p>Los datos se han modificado correctamente.</p>';
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
	
	<body><font face="Comic Sans MS,verdana">
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>EL REGISTRO CON ID <?php echo ($id)?> FUE MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="acreditaciones.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
