<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/
// conexión con la base de datos
require("../mod_config/conexion.php");
//Iniciar Sesión
session_start();
   
//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "../index.html"
</script>';
}    
 
$usuario=$_SESSION['cedula'];
$nivel=$_SESSION['id_cargo'];

$token = $_GET['token'];

   
$sql1 = "SELECT * FROM confronta where token_confronta = $token ";
$resultado1 = $mysqli->query($sql1);
$row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
$usuario=$row1['usuario_cedula'];

$sql = "SELECT * FROM usuarios u, cargo c where u.cargo_id=c.id_cargo and  u.cedula_usuario= $usuario ";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

$sql2 = "SELECT * FROM imagephp where confronta_token = $token ";
$resultado2 = $mysqli->query($sql2);
$row2 = $resultado2->fetch_array(MYSQLI_ASSOC);

//$sql = "SELECT * FROM usuarios where cargo_id=1";//
//$resultado = $mysqli->query($sql);
date_default_timezone_set('America/Bogota');
$fecha1=date('Y-m-d');
$fecha2=date('00:00:00');
//echo "Fecha---> ".$fecha1." ".$fecha2;;
    
/************************************************** FIN AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO ****************************/ 
?>
<!--******************************************************** INICIO AREA DE DISEÑO (FRONTEND)PROYECTO ********************************-->
<!DOCTYPE html>
<html>
<head>
    <title>Datos Personales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../../imagenes/logos/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body style="background-color:lavender;">
    <!--<div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-sm-3 btn-danger">Column</div>
            <div class="col col-sm-6 btn-info">Column</div>
            <div class="col col-sm-3 btn-primary">Column</div>
        </div>
    </div>-->
   
<!-- ***************************************************INICIO DE AREA DE TRABAJO****************************************************--> 
    <div class="container">
        <h2 class="text-center font-weight-light">Detalle de la Venta</h2><br>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6  ">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row2['imagen']);?>" class="img-thumbnail"  width="900" height="9000"><br><br><br>
             </div>
            <div class="col-sm-6">
                <div class=" container p-2 bg-info">
                    <?php if ($row['cargo_id']==2) { ?>
                        <a href="allventas.php" class="btn btn-danger ">ATRAS</a>
                    <?php } ?>
                    <a href="ventaxagente.php?cedula_usuario=<?php echo $row['cedula_usuario'];?>" class="btn btn-danger ">ATRAS</a>
                    
                    <div >
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Identificacion Usuario:</strong></big>
                            <?php echo $row['cedula_usuario']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Nombre Usuario:</strong></big>
                            <?php echo $row['nombres']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Cargo Usuario:</strong></big>
                            <?php echo $row['descripcion']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Identificador de Llamada:</strong></big>
                            <?php echo $row1['id_llamada']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Cedula del Cliente:</strong></big> 
                            <?php echo $row1['cedula_cliente']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action" ><big><strong>Fecha de la venta:</strong></big> 
                            <?php echo $row1['registro']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Campaña:    </strong></big> 
                            <?php echo $row1['campana']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Token Transaccion:    </strong></big> 
                            <?php echo $row1['token_confronta']; ?></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="container">    
            <div class="row">
                <div class="col">
                     <div class="row justify-content-md-center">
                        <div class="footer-copyright  py-3" >© 2018 Copyright:<a>Be Call <img src="../../imagenes/logos/logo.png" width="50" height="30"></a>
                            <p>Yesid Marquez. Tecnologia Pereira</p>
                        </div>
                              
                    </div>
                </div>
                
            </div>
        </div> 
      
     
   
<!-- ***************************************************FIN DE AREA DE TRABAJO******************************************************-->    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>
</body>
</html>