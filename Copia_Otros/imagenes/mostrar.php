<?php 
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "vise_pereira";
$conexion = mysqli_connect( $servidor, $usuario,$password) or die('No hay conexión a la base de datos');
$db = mysqli_select_db( $conexion, $basededatos ) or die('no existe la base de datos.');
$desc=$_POST['Cedula'];

$sql = "SELECT * FROM `imagenes_fotos` WHERE id_foto= $desc";

$res=mysqli_query($conexion,$sql);

while($filas=mysqli_fetch_array($res)){
	$ruta=$filas['ruta'];
	$desc=$filas['id_foto'];


?>

<?php echo $desc;?><br>
<img src="<?php echo $ruta; ?>" width="100" height="150"><br>

<?php }?>