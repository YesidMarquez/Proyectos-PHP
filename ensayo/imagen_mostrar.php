<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<style>
.error {font-weight: bold; color:red;}
.mensaje {color:#030;}
.listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
</style>
</head>

<body>

<?php
# Conectamos con MySQL
$mysqli=new mysqli("localhost","root","","imagenes");
if (mysqli_connect_errno()) {
die("Error al conectar: ".mysqli_connect_error());
}

// Los posible valores que puedes obtener de la imagen son:
//echo "<BR>".$_FILES["userfile"]["name"]; //nombre del archivo
//echo "<BR>".$_FILES["userfile"]["type"]; //tipo
//echo "<BR>".$_FILES["userfile"]["tmp_name"]; //nombre del archivo de la imagen temporal
//echo "<BR>".$_FILES["userfile"]["size"]; //tamaño

# Comprovamos que se haya subido un fichero
if (is_uploaded_file(@$_FILES["userfile"]["tmp_name"]))
{
# verificamos el formato de la imagen
if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png"|| $_FILES["userfile"]["type"]=="image/tif")
{
# Cogemos la anchura y altura de la imagen
$info=getimagesize($_FILES["userfile"]["tmp_name"]);
//echo "<BR>".$info[0]; //anchura
//echo "<BR>".$info[1]; //altura
//echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
//echo "<BR>".$info[3]; //cadena de texto para el tag <img

# Escapa caracteres especiales
$imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

# Agregamos la imagen a la base de datos
$sql="INSERT INTO `imagephp` (id,anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
$mysqli->query($sql);

# Cogemos el identificador con que se ha guardado
$id=$mysqli->insert_id;

# Mostramos la imagen agregada
echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
echo " <meta http-equiv='Refresh' content='0 ;url=mostrar.php'> ";


}else{
echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
}
}
?>

<h2>Selecciona una imagen</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
<input name="userfile" type="file">
<input type="texto" name="id">
<p><input type="submit" value="Guardar Imagen">
</form>


</div>
</body>
</html>

//------------------------CODIGO PARA LA PAGINA "mostrar.php" ----------------------//


<!-- Provided by MyFreeTemplates.com -->
<html>

<head>
<title>View Pic </title>
<link href="contactos.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:#333333">
<br>
<hr color=ff3300 size= '5'>

<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'imagenes';
$conexion = @new mysqli($server, $username, $password, $database);
#------------------------------------------------------OWNERS END---------------------------------------------

$sql="SELECT* from imagephp;";



$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable

if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
echo "<CENTER><font color='white'>Show Image</font></CENTER>";
echo "<CENTER>";
echo "<TABLE BORDER=1 WIDTH=500>";
echo "<tr><td width=\"14%\" BGCOLOR=\"GRAY\"><font SIZE=2 face=\"verdana\"><CENTER> ID </CENTER></font></td>";

echo "<td width=\"14%\" BGCOLOR=\"GRAY\"><font SIZE=2 face=\"verdana\"><CENTER>IMAGEN</CENTER></font></td></tr>";


while ($row = $result->fetch_array(MYSQLI_ASSOC))
{

echo "<tr><td width=\"14%\" BGCOLOR=\"WHITE\"><font SIZE=2 face=\"verdana\"><center>".$row["id"] . "</center></font></td>";

echo "<td width=\"14%\" BGCOLOR=\"white\"><font face=\"verdana\"><CENTER><img WIDTH='50' HEIGHT='50' src='data:imagen/jpeg;base64,".base64_encode($row["imagen"]). "' /> </CENTER></font></td></tr>";
}
echo "</TABLE>";
echo "</CENTER>";
echo "<br />";
}
else
{
echo "<CENTER><font color='white'>No hubo resultados</font></CENTER>";
}



if(isset($_POST['HOME']))
{
header ("Location: MENU.PHP");
}
$conexion->close(); //cerramos la conexión

?>

<form id="miform" name="miform" method="post" action="subir.php">
<br>

<CENTER>
<input type="submit" value="HOME" name="HOME">
</CENTER>
</form>
</body>
</html>