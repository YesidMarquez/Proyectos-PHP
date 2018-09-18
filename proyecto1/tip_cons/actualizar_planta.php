<?php
   	require '../config/conexion.php';
	/*ssssss*/
	$E_c=$_POST['E_c'];
	$C_n=$_POST['C_n'];
	$F_nac=$_POST['F_nac'];
	$T_san=$_POST['T_san'];
	$C_r = $_POST["C_r"];
	$Dir = $_POST["Dir"];
	$Tel = $_POST['Tel'];
	$F_in=$_POST['F_in'];
	$F_v=$_POST['F_v'];
	$Es=$_POST['Es'];
	$Pro=$_POST['Pro'];
	$id = $_POST['Id'];
	
	
	
	$sql = "UPDATE empleado, contrato SET direccion = '$Dir', fecha_nacimiento = '$F_nac', ciudad_residencia='$C_r',telefono='$Tel', tipo_sangre='$T_san', estado_id='$Es',ciudad_nacimiento='$C_n',ciudad_expedicion='$E_c', contrato.fecha_ingreso='$F_in',contrato.fecha_vencimiento='$F_v',contrato.prorrogas='$Pro' WHERE empleado.id_empleado='$id' and contrato.empleado_id='$id' ";
	$resultado = $mysqli->query($sql);
	/********************************************************************************************/
	$sql1 = "SELECT * FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
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
					<?php if($resultado) { 
						header("Location: ver.php?id_empleado=$id ");?>
						<!--<h3>LOS REGISTROS CON ID <?php echo ($id)?> <?php echo "''"?><?php echo ($apl)?> <?php echo ($name)?><?php echo "''"?> FUERON MODIFICADOS</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>-->
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					<a href="planta.php" class="btn btn-default">Planta</a>
                    <a href="ver.php?id_empleado=<?php echo $row1['empleado_id'];  ?>" class="btn btn-primary">Empleado</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
