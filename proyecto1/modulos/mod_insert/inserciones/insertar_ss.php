<?php

require '../../config/conexion.php';
session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../../index.php'; </script>";
    }
if(isset($_POST['c_na'])) {
  $_POST['c_na'] = trim($_POST['c_na']);
} 

$id = $_POST['cedula'];
$nombre_1 = $_POST['nombre_1'];
$nombre_2 = $_POST['nombre_2'];
$apellido_1 = $_POST['apellido_1'];
$apellido_2 = $_POST['apellido_2'];
$fech_nac = $_POST['nac'];
$inicio = strtotime($fech_nac);
$inicio1 = date('Y-m-d',$inicio);
$ciu_nas = $_POST['c_na'];
$ciu_ex = $_POST['c_exp'];
$sangre= $_POST['t_san'];
$direcc = $_POST['direccion'];
$resi = $_POST['c_res'];
$tel = $_POST['tel'];
$genero= $_POST['sexo'];
$estado1= "1";

/*echo "Cedula:";
echo ( $id);    
echo "nombres:";
echo ( $nombre_1);echo "  ";
echo ( $nombre_2);
echo "  ";
echo "Apellidos:";
echo ( $apellido_1);echo "  ";
echo ( $apellido_2);
echo "  ";
echo "fecha nacio:";
echo ($inicio1);
echo "  ";
echo "ciudad _nc:";
echo ($ciu_nas);
echo "  ";
echo "ciudad exp:";
echo ($ciu_ex);
echo "  ";
echo "Tipo sangre:";
echo ($sangre);
echo "  ";
echo "direccion:";
echo ($direcc);
echo "  ";
echo "ciudad resi:";
echo ($resi);
echo "  ";
echo "Telefono:";
echo ($tel);
echo "  ";
echo "Sexo:";
echo ($genero);
echo "  ";
echo "Estado:";
echo ($estado1);*/


$sql = "INSERT INTO `empleado` (`id_empleado`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `fecha_nacimiento`, `ciudad_nacimiento`, `ciudad_expedicion`, `tipo_sangre`, `direccion`,`ciudad_residencia`,`telefono`, `genero`, `estado_id`) VALUES ('$id', '$nombre_1', '$nombre_2', '$apellido_1', '$apellido_2', '$inicio1', '$ciu_nas', '$ciu_ex', '$sangre', '$direcc','$resi','$tel','$genero','$estado1');";

$resultado = $mysqli->query($sql);

       

?>

<html lang="es">
    <head>
                
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../../js//jquery-3.1.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script> 
        <link rel="icon" type="image/x-icon" href="../../imagenes/logos/favicon.ico" />
    </head>
    
    <body><font face="Comic Sans MS,verdana">
        <div class="container">
            <div class="row">
                <div class="row" style="text-align:center"><br>
                    <?php if($resultado) { ?>
                        <h3>LOS REGISTROS CON ID CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> NOMBRE <?php echo "'"?><?php echo ($nombre_1." ".$nombre_2." ".$apellido_1." ".$apellido_2)?> <?php echo "'"?> FUE INGRESADO</h3>
                        <?php } else { ?>
                        <h3>ERROR AL INSERTAR CEDULA <?php echo "'"?><?php echo ($id)?><?php echo "'"?> NOMBRE <?php echo "'"?><?php echo ($nombre_1." ".$nombre_2." ".$apellido_1." ".$apellido_2)?> <?php echo "'"?></h3>
                    <?php } ?><br><br>
                    <a href="../../formularios/menu_ingresos.php" class="btn btn-primary">Regresar</a>
                                        
                </div>
            </div>
        </div>
    </body>
</html>
