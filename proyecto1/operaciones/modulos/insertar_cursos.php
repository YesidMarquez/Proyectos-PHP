<?php
error_reporting(E_ALL ^ E_NOTICE);

require '../../config/conexion.php';

$id = $_POST['id_empleado'];
$academia = $_POST['academia'];
$nivel_seg = $_POST['niv'];
$numero_nro = $_POST['nro'];
$fecha= $_POST['f_vence'];
$inicio = strtotime($fecha);
$f_vence = date('Y-m-d',$inicio);
$rura_curso = "imagenes/curso/".$id.".jpg";

/*
echo "Cedula:";
echo ( $id);    
echo "Ingreso:";
echo ( $academia);
echo "  ";
echo "Vencimiento:";
echo ($nivel_seg);
echo "  ";
echo "Prorrogas:";
echo ($numero_nro);
echo "  ";
echo "Tipo de Contrato:";
echo ($f_vence);*/


$sql1 = "SELECT empleado_id FROM `control_cursos` WHERE empleado_id='$id'";
$resultado1 = $mysqli->query($sql1);
$row = $resultado1->fetch_array(MYSQLI_ASSOC);


if ($row['empleado_id']<>$id) {
    
    $sql = "INSERT INTO `control_cursos` (`nro_curso`, `empleado_id`, `fecha_vencimiento`, `academia_nit`, `curso_id`) VALUES ('$numero_nro', '$id', '$f_vence', '$academia', '$nivel_seg');";
    $resultado = $mysqli->query($sql);
    $sql2 = "INSERT INTO `imagenes_cursos` (`id_imgcurso`, `ruta`) VALUES ('$id', '$rura_curso');";
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
                        <h1>INGRESO EXITOSO CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?></h3>
                        <?php } else { ?>
                        <h4>ERROR AL INSERTAR CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> YA SE ENCUENTA UN REGISTRO EN BASE DE DATOS CON ESTA CEDULA </h4>
                    <?php } ?><br><br>
                    <a href="../../formularios/contrato.php" class="btn btn-primary">Regresar</a>
                                        
                </div>
            </div>
        </div>
    </body>
</html>
