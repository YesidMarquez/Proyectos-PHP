<?php
########## imagen_agregar.php ##########
# http://www.lawebdelprogramador.com
 
/*
La base de datos utilizada para el ejemplo se llama imagenes

CREATE TABLE IF NOT EXISTS `imagephp` (
  `id` smallint(6) NOT NULL auto_increment,
  `anchura` smallint(6) NOT NULL,
  `altura` smallint(6) NOT NULL,
  `tipo` char(15) NOT NULL,
  `imagen` mediumblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;ffffffffffffffffffffffffffffffffffffffff
*/
?>
<!DOCTYPE html>
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
$link=mysqli_connect("localhost","root","","imagenes");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
 
// Los posible valores que puedes obtener de la imagen son:
//echo "<BR>".$_FILES["userfile"]["name"];      //nombre del archivo
//echo "<BR>".$_FILES["userfile"]["type"];      //tipo
//echo "<BR>".$_FILES["userfile"]["tmp_name"];  //nombre del archivo de la imagen temporal
//echo "<BR>".$_FILES["userfile"]["size"];      //tamaño
 
# Comprovamos que se haya subido un fichero
if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=mysqli_real_escape_string($link, file_get_contents($_FILES["userfile"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
        $result=mysqli_query($link,$sql);
 
        # Cogemos el identificador con que se ha guardado
        $id=mysqli_insert_id($link);
 
        # Mostramos la imagen agregada
        echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
    }else{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
    }
}
?>
 
<h2>Selecciona una imagen</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    <input name="userfile" type="file">
    <p><input type="submit" value="Guardar Imagen">
</form>
 
<h2>Listado de las imagenes añadidas a la base de datos</h2>
<div class="listadoImagenes">
    <?php
    $result=mysqli_query($link,"SELECT * FROM imagephp ORDER BY id DESC");
    if($result)
    {
        while($row=mysqli_fetch_array($result))
        {
            echo "<img src='imagen_mostrar.php?id=".$row["id"]."' width='".$row["anchura"]."' height='".$row["altura"]."'>";
        }
    }
    ?>
</div>
</body>
</html>
 
 
 
 
 
 
 
 
 
 
 
<?php
########## imagen_mostrar.php ##########
# debe recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com
 
# Conectamos con MySQL
$link=mysqli_connect("localhost","root","","imagenes");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
 
# Buscamos la imagen a mostrar
$result=mysqli_query($link,"SELECT * FROM 'imagephp' WHERE id=".$_GET['id']);
$row=mysqli_fetch_array($result);
 
# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>