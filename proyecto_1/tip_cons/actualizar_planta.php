<?php
   	require '../config/conexion.php';

	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$apl = $_POST['apel'];
	$direccion = $_POST["direccion"];
	$resi = $_POST["c_res"];
	$tel = $_POST["tel"];

	echo ($direccion);
	echo ($resi);
	echo ($tel);
	
		
	
	$sql = "UPDATE empleado SET direccion = '$direccion', ciudad_residencia='$resi',telefono='$tel' WHERE id_empleado='$id'";
	$resultado = $mysqli->query($sql);
	/********************************************************************************************/
	$sql1 = "SELECT * FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
	
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
						<h3>LOS REGISTROS CON ID <?php echo ($id)?> <?php echo ($apl)?> <?php echo ($name)?> FUE MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="ver.php?id_empleado=<?php echo $row1['empleado_id'];  ?>" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
