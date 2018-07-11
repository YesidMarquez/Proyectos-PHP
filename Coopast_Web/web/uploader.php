<?php 
require 'config/conexion.php';
$target_path = "actas/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

$fecha_acta=$_POST['fecha_acta'];
$descripcion=$_POST['descripcion'];
$observaciones=$_POST['observaciones'];

$sql = " INSERT INTO acta (fecha_acta, descripcion, ruta, observaciones) VALUES ($fecha_acta,'$descripcion','$target_path','$observaciones');";
$result = $mysqli->query($sql);

$sql1 = " SELECT * FROM `acta` where fecha_acta= '$fecha_acta '";
$result1 = $mysqli->query($sql1);
$row = $result1->fetch_array(MYSQLI_ASSOC);
$id_acta=$row['id_acta'];
/*echo "id_acta: ".$id_acta;*/
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
	echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
	header("Location: ver.php?id_acta=$id_acta");
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}

?>