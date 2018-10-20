<?php
error_reporting(E_ALL ^ E_NOTICE);


require '../../mod_config/conexion.php';
session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../../../index.php'; </script>";
    }
if(isset($_POST['c_na'])) {
  $_POST['c_na'] = trim($_POST['c_na']);
} 

$id = $_POST['id_empleado'];
$ingreso= $_POST['in'];
$inicio = strtotime($ingreso);
$inicio1 = date('Y-m-d',$inicio);
$vencimiento = $_POST['out'];
$fin = strtotime($vencimiento);
$fin1 = date('Y-m-d',$fin);
$prorrogas = $_POST['prorroga'];
$t_contrato = $_POST['t_contr'];
$cargo= $_POST['cargo'];

/*echo "Cedula:";
echo ( $id);    
echo "Ingreso:";
echo ( $inicio1);
echo "  ";
echo "Vencimiento:";
echo ( $fin1);
echo "  ";
echo "Prorrogas:";
echo ($prorrogas);
echo "  ";
echo "Tipo de Contrato:";
echo ($t_contrato);
echo "  ";
echo "Cargo:";
echo ($cargo);*/

$sql1 = "SELECT empleado_id FROM `contrato` WHERE empleado_id='$id'";
$resultado1 = $mysqli->query($sql1);
$row = $resultado1->fetch_array(MYSQLI_ASSOC);


if ($row['empleado_id']<>$id) {
    
    $sql = "INSERT INTO `contrato` (`fecha_ingreso`, `fecha_vencimiento`, `prorrogas`, `empleado_id`, `tipo_contrato_id`, `cargo_id`) VALUES ('$inicio1', '$fin1', '$prorrogas', '$id', '$t_contrato', '$cargo');";
    $resultado = $mysqli->query($sql);
}
if($resultado) { 
    header("Location: ../formularios/acreditacion.php");
}else {
    echo "Condición no cumplida";
    header("Location: ../formularios/contrato.php");
}    
?>

