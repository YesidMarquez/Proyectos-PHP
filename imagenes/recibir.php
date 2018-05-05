<?php 
/* print_r($_FILES);
echo'<br>';
echo 'nombre de la imagen: ';
print_r($_FILES['imagen']['name']);

echo'<br>';
echo 'tipo de la imagen: ';
print_r($_FILES['imagen']['type']);

echo'<br>';
echo 'ruta temporal de la imagen: ';
print_r($_FILES['imagen']['tmp_name']);
 */
require 'config/conexion.php';

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$desc=$_POST['Cedula'];
echo ($rutaTemporal);
echo "_________----->";
echo ($nombreImagen);
echo "_________----->";
echo ($desc);
echo "_________----->";
echo ($rutaDestino);
echo "_________----->";
$sql = "INSERT INTO `imagenes` (`id_foto`, `ruta`) VALUES ('$desc', '$rutaDestino');";
$res = $mysqli->query($sql);


if ($res){
	echo 'inserción con exito';
}else{
    echo 'no se puedo insertar';
} 

?>