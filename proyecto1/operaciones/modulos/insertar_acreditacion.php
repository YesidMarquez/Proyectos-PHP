<?php
error_reporting(E_ALL ^ E_NOTICE);
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
$rura_acre = "imagenes/credencial/".$id.".jpg";


echo "rura_acre:";
echo ( $rura_acre);    


$sql1 = "SELECT empleado_id FROM `acreditacion` WHERE empleado_id='$id'";
$resultado1 = $mysqli->query($sql1);
$row = $resultado1->fetch_array(MYSQLI_ASSOC);


if ($row['empleado_id']<>$id) {
    
   $sql = "INSERT INTO `acreditacion` (`empleado_id`, `estado_acreditacion`, `fecha_acreditacion`, `estado_radicado`, `fecha_radicado`, `numero_radicado`) VALUES ('$id', '$acreditacion', '$f_acredi', '$radicado', '$f_radicado', '$numero_r');";
    $resultado = $mysqli->query($sql);
    $sql2 = "INSERT INTO `imagenes_credencial` (`id_imagen`, `ruta`) VALUES ('$id', '$rura_acre');";
    $resultado2 = $mysqli->query($sql2);
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
                        <h3>LOS REGISTROS CON ID CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> FUERON INGRESADOS</h3>
                        <?php } else { ?>
                        <h1>ERROR AL INSERTAR CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> YA SE ENCUENTA UN REGISTRO EN LA TABLA CON ESTA CEDULA </h3>
                    <?php } ?><br><br>
                    <a href="../../formularios/acreditacion.php" class="btn btn-primary">Regresar</a>
                                        
                </div>
            </div>
        </div>
    </body>
</html>
