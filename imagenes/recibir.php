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
$usuario = "root";
$password = "12345";
$servidor = "localhost";
$basededatos = "base";
$conexion = mysqli_connect( $servidor, $usuario,$password) or die('No hay conexión a la base de datos');
$db = mysqli_select_db( $conexion, $basededatos ) or die('no existe la base de datos.');

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$desc=$_POST['descripcion'];

$sql="INSERT INTO datos (ruta,descripcion) values('".$rutaDestino."','".$desc."')";
$res=mysqli_query($conexion,$sql);

if ($res){
	echo 'inserción con exito';
}else{
    echo 'no se puedo insertar';
} 

?>