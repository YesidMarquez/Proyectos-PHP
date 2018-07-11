
<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/

require '../config/conexion.php';
$descripcion = $_POST['descripcion'];
$observaciones = $_POST['observaciones'];
$id = $_POST['acta'];
/*$id = $_POST['acta'];*/

 echo "Recibido por el metodo _POST antes de la insercion: ". $descripcion;
 echo "Recibido por el metodo _POST antes de la insercion: ". $observaciones;



    
$sql = " UPDATE acta SET descripcion = '$descripcion', observaciones = '$observaciones' WHERE id_acta = $id;";
$result = $mysqli->query($sql);

$sql1 = " SELECT * FROM acta where id_acta= $id";
$result1 = $mysqli->query($sql1);
$row = $result1->fetch_array(MYSQLI_ASSOC);


if ($row['descripcion']==$descripcion) {
	header("Location: ../actas.php");
	/*header("Location: ../ver.php?id_acta=".$row['id_acta']);*/
       
}else{
    echo "Usuario Invalido";
}

/*------------------------------------------------*/

/************************************************** FIN AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO ****************************/ 
?>

<!--******************************************************* INICIO AREA DE DISEÑO (FRONTEND)PROYECTO ********************************-->
