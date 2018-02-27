<?php
error_reporting(E_ALL ^ E_NOTICE);


require '../../config/conexion.php';
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
else{
    $id1=$id;
    }
?>

<html lang="es">
    <head>
                
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../../js//jquery-3.1.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script> 
    </head>
    
    <body><font face="Comic Sans MS,verdana">
        <div class="container">
            <div class="row">
                <div class="row" style="text-align:center"><br>
                    <?php if($resultado) { ?>
                        <h1>INGRESO EXITOSO CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?></h3>
                        <?php } else { ?>
                        <h1>ERROR AL INSERTAR CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> YA SE ENCUENTA UN REGISTRO EN LA TABLA CON ESTA CEDULA </h3>
                    <?php } ?><br><br>
                    <a href="../../formularios/contrato.php" class="btn btn-primary">Regresar</a>
                                        
                </div>
            </div>
        </div>
    </body>
</html>
