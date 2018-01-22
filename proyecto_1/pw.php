<?php
   	require 'config/conexion.php';

	
	$ID= $_POST['id'];
	$USUARIO= $_POST['user'];
	$CONTRASEÑA=$_POST['pw'];

			
	
	$sql = "UPDATE `usuarios` SET `password` = '$CONTRASEÑA' WHERE `usuarios`.`id_usuario` = '$ID';";
	$resultado = $mysqli->query($sql);
	/********************************************************************************************/
		
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
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>Usuario <?php echo ($USUARIO)?> SU PW FUE MODIFICADA</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="ver.php?id_empleado=<?php echo $row1['empleado_id'];  ?>" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
