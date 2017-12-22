<?php

$NOMBRE=$_POST['Nombre'];
$COMENTARIO=$_POST['Comentario'];

echo("Usuario que elabora el comentario: ".$NOMBRE."<br> Comentario: ".$COMENTARIO);


//header("Location: index.html");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="index.html">

		<button type="submit">Salir</button>
	</form>

</body>
</html>
	