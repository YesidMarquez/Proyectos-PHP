<?php
   	require '../config/conexion.php';

	
	$id = $_POST['id'];
	$NRO= $_POST['nro'];
	$ACADEMIA= $_POST['Academia'];
	$NIVEL=$_POST['niv'];
	$fecha = $_POST['fec'];
	$inicio = strtotime($fecha);
	$inicio1 = date('Y-m-d',$inicio);

	if ($NIVEL<0||$ACADEMIA<0) {
		$error="NO INGRESO ACADEMIA O NIVEL DEL CURSO";
	}else{

		$sql = "UPDATE control_cursos SET fecha_vencimiento = '$inicio1', nro_curso='$NRO',academia_nit='$ACADEMIA',curso_id='$NIVEL'WHERE empleado_id='$id'";
	
		$resultado = $mysqli->query($sql);
		if($resultado == false) {
		echo '<p>Error al modificar los campos en la tabla.</p>';
		}else{
		echo '<p>Los datos se han modificado correctamente.</p>';

	}

	
	
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
						<h3>ERROR AL MODIFICAR <?php echo ($error)?></h3>
					<?php } ?>
					
					<a href="cursos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
