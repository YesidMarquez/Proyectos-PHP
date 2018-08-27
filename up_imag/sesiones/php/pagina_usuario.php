<?php
// conexión con la base de datos
require("conexion.php");
//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "../index.html"
</script>';
}

$sql1 = "SELECT edad, nombres, apellidos FROM user WHERE id_user='".$_SESSION['id_usuario']."'";
$result1 = $mysqli->query($sql1);
$fila = $result1->fetch_array(MYSQLI_ASSOC);
$edad= $fila['edad'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
 
  <div class="container">
    <h2>Bienvenido</h2>
    <div class="well well-lg">
      <div class="col-md-4 pull-right">
      <h4>Usuario: <?php echo $_SESSION['nombre']; ?> <a href="desconectar_usuario.php">Salir</a></h4>
      </div>
      <br>
    </div>
  </div> 

</body>
</html>