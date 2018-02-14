<?php

require '../../config/conexion.php';

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


echo "Cedula:";
echo ( $id);    
echo "Ingreso:";
echo ( $acreditacion);
echo "  ";
echo "Vencimiento:";
echo ( $f_acredi);
echo "  ";
echo "Prorrogas:";
echo ($radicado);
echo "  ";
echo "Tipo de Contrato:";
echo ($f_radicado);
echo "  ";
echo "Cargo:";
echo ($numero_r);



$sql = "INSERT INTO `acreditacion` (`empleado_id`, `estado_acreditacion`, `fecha_acreditacion`, `estado_radicado`, `fecha_radicado`, `numero_radicado`) VALUES ('$id', '$acreditacion', '$f_acredi', '$radicado', '$f_radicado', '$numero_r');";

$resultado = $mysqli->query($sql);

       

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
                        <h3>LOS REGISTROS CON ID CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> FUERON INGRESADOS</h3>
                        <?php } else { ?>
                        <h3>ERROR AL INSERTAR CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> </h3>
                    <?php } ?><br><br>
                    <a href="../../formularios/menu_ingresos.php" class="btn btn-primary">Regresar</a>
                                        
                </div>
            </div>
        </div>
    </body>
</html>
