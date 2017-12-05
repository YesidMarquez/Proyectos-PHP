<?php 
$usuario = "root";
$password = "12345";
$servidor = "localhost";
$basededatos = "base";
$conexion = mysqli_connect( $servidor, $usuario,$password) or die('No hay conexión a la base de datos');
$db = mysqli_select_db( $conexion, $basededatos ) or die('no existe la base de datos.');


$sql="select * from datos ";
$res=mysqli_query($conexion,$sql);

while($filas=mysqli_fetch_array($res)){
	$ruta=$filas['ruta'];
	$desc=$filas['descripcion'];


?>

<?php echo $desc;?><br>
<img src="<?php echo $ruta; ?>" width="300" height="500"><br>

<?php }?>