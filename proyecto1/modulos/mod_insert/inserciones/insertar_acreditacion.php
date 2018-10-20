<?php
error_reporting(E_ALL ^ E_NOTICE);
require '../../mod_config/conexion.php';
session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../../../index.php'; </script>";
    }

$id = $_POST['id_empleado'];
$acreditacion = $_POST['estado_a'];
$fecha= $_POST['f_acredi'];
$inicio = strtotime($fecha);
$f_acredi = date('Y-m-d',$inicio);
$radicado = $_POST['estado_r'];
$fecha1 = $_POST['f_radicado'];
$inicio1 = strtotime($fecha1);
$f_radicado = date('Y-m-d',$inicio1);
$numero_r = $_POST['n_radicado'];

/********************************************************/
$validarC="../../soportes/imagenes/credencial";
if (!file_exists($validarc)) {
    mkdir("../../soportes/imagenes/credencial",  0777, true);
}
$imagenc= $_FILES['credencial']['tmp_name'];
$rutac="../../soportes/imagenes/credencial/$id.jpg";//ruta carpeta donde queremos copiar las imágenes y en nuevo nombre.
if (is_uploaded_file($imagenc)) 
{ 
    move_uploaded_file($imagenc,$rutac); 
} 
else 
{ 
echo "Error al cargar el Archivo"; 
}
/*********************************************************/

$sql1 = "SELECT empleado_id FROM `acreditacion` WHERE empleado_id='$id'";
$resultado1 = $mysqli->query($sql1);
$row = $resultado1->fetch_array(MYSQLI_ASSOC);


if ($row['empleado_id']<>$id) {
    
   $sql = "INSERT INTO `acreditacion` (`empleado_id`, `estado_acreditacion`, `fecha_acreditacion`, `estado_radicado`, `fecha_radicado`, `numero_radicado`) VALUES ('$id', '$acreditacion', '$f_acredi', '$radicado', '$f_radicado', '$numero_r');";
    $resultado = $mysqli->query($sql);
    $sql2 = "INSERT INTO `imagenes_credencial` (`id_imagen`, `ruta`) VALUES ('$id', '$rutac');";
    $resultado2 = $mysqli->query($sql2);
}
/*if($resultado) { 
    header("Location: ../formularios/cursos.php");
}else {
    echo "Condición no cumplida";
    header("Location: ../formularios/acreditacion.php");
}  */  
?>