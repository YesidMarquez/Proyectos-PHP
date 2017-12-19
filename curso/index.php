<?php
	
	require 'conexion.php';

	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM personas $where";
	$resultado = $mysqli->query($sql);


?>	

<html lang="es">
	<head>

		<meta name="viewporte" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="css/bootstrap-theme.css">
		<link rel="stylesheet"  href="css/bootstrap.min.css">
		<script src="js/jquery-3.3.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	
	
	
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h2 style="text-align: center">Curso de PHP y MySQL</h2>
			</div>
			<div class="row">
				<!--En esta etiquera se gestionan los link, con botones de bootstrap-->

				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
			</div>
			<br>
			<div class="row table-responsive">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE </th>
							<th>Email</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<!--cuerpo de la tabla-->
					<tbody></tbody>
				</table>
			</div>
		</div>





	</body>	
</html>
