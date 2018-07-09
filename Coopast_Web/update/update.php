
<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/

require '../config/conexion.php';
$descripcion = $_POST['descripcion'];
$observaciones = $_POST['observaciones'];
$id = $_GET['id_acta'];

    
$sql = " UPDATE `acta` SET `descripcion` = '$descripcion', `observaciones` = '$observaciones' WHERE `acta`.`id_acta` = '$id';'`";
$result = $mysqli->query($sql);

$sql1 = " SELECT * FROM `acta` where id_acta= '$id '";
$result1 = $mysqli->query($sql1);
$row = $result1->fetch_array(MYSQLI_ASSOC);


if ($row['descripcion']==$descripcion) {
    if ($row['observaciones']==$observaciones) {
        header('Location: ../actas.php');
    }else{

    echo "Contraseña Invalida";}
    header('Location: ../actas.php');
   
}else{
    echo "Usuario Invalido";
}

/*------------------------------------------------*/

/************************************************** FIN AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO ****************************/ 
?>

<!--******************************************************* INICIO AREA DE DISEÑO (FRONTEND)PROYECTO ********************************-->
