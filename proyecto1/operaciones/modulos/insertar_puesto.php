<?php
error_reporting(E_ALL ^ E_NOTICE);

require '../../config/conexion.php';

$id = $_POST['id_empleado'];
$puesto = $_POST['puesto'];
$cliente = $_POST['cliente'];
$dir_puesto = $_POST['dir_pto'];
$ciudad = $_POST['ciudad'];
$modalidad = $_POST['modalidad'];
$fecha= $_POST['f_in'];
$inicio = strtotime($fecha);
$f_in = date('Y-m-d',$inicio);
$fecha1= $_POST['f_sale'];
$inicio1 = strtotime($fecha1);
$f_sale = date('Y-m-d',$inicio1);


/*
echo "Cedula:";
echo ( $id);    
echo "puesto:";
echo ( $puesto);
echo "  ";
echo "cliente:";
echo ($cliente);
echo "  ";
echo "direccion:";
echo ($dir_puesto);
echo "  ";
echo "ciudad:";
echo ($ciudad);
echo "  ";
echo "modalidad:";
echo ($modalidad);
echo "  ";
echo "ingreso:";
echo ($f_in);
echo "  ";
echo "sale:";
echo ($f_sale);*/

$sql1 = "SELECT empleado_id FROM `ubicacion` WHERE empleado_id='$id'";
$resultado1 = $mysqli->query($sql1);
$row = $resultado1->fetch_array(MYSQLI_ASSOC);


if ($row['empleado_id']<>$id) {
    
  $sql = "INSERT INTO `ubicacion` (`puesto_id`, `cliente_id`, `direccion_puesto`, `ciudad`, `modalidad_id`, `empleado_id`, `fecha_ingreso`, `fecha_salida`) VALUES ('$puesto', '$cliente', '$dir_puesto', '$ciudad', '$modalidad', '$id', '$f_in', '$f_sale');";

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
                     <?php if($resultado) { 
                       header("Location: ../../formularios/s_social.php");?>
                        <!--<h1>INGRESO EXITOSO CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?></h3>
                        <?php } else { ?>
                        <h1>ERROR AL INSERTAR CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> YA SE ENCUENTA UN REGISTRO EN LA TABLA CON ESTA CEDULA </h3>-->
                    <?php } ?><br><br>
                    <a href="../../formularios/contrato.php" class="btn btn-primary">Regresar</a>
                                        
                </div>
            </div>
        </div>
    </body>
</html>
