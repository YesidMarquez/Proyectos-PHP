<?php include("seguridad.php"); ?>
	<html>
	<head>
		<title>Bienvenido al sistema</title>
		</head>
		<body>
			Hola! <?php echo $_SESSION["user"]; ?><br>
			<br>
			<a href="salir.php">Salir del sistema</a>
		</body>
		</html>
