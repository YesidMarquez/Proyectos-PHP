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
    self.location = "../../index.html"
    </script>';
    }      
 
//$usuario=$_SESSION['cedula'];
$nivel=$_SESSION['id_cargo'];

$token = $_GET['token'];

  
$sql8 = "CALL `ventas`($token)";
$result8 = $mysqli->query($sql8);
$row8 = $result8->fetch_array(MYSQLI_ASSOC);

$fechaCambio="2018-10-01";
$fechaSistema=$row1['registro'];
$newDate = date("Y-m-d", strtotime($fechaSistema));



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
    <div class="container-fluid"><br>
        <center><b class="h2">Detalle de la Venta</b></center><br>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <?php if ($fechaSistema > $fechaCambio) { ?>
                    <img src="<?php echo ($row8['ruta_imagen']);?>" class="img-thumbnail" width="" height=""><br><br><br>
                <?php }elseif ($fechaSistema <= $fechaCambio) {?>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row8['imagen']);?>" class="img-thumbnail" width="" height=""><br><br><br>
                <?php } ?>
             </div>
            <div class="col-sm-4">
                <div class=" container p-2 bg-info">
                    <?php if ($nivel>2) { ?>
                        <a href="allventas.php" class="btn btn-danger ">ATRAS</a>
                    <?php }else { ?>
                    <a href="ventaxagente.php?cedula_usuario=<?php echo $row8['cedula_usuario'];?>" class="btn btn-danger ">ATRAS</a>
                    <?php } ?>
                    <div >
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Identificacion Usuario:</strong></big>
                            <?php echo $row8['cedula_usuario']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Nombre Usuario:</strong></big>
                            <?php echo $row8['nombres']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Apellido Usuario:</strong></big>
                            <?php echo $row8['apellidos']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Cargo Usuario:</strong></big>
                            <?php echo $row8['descripcion']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Identificador de Llamada:</strong></big>
                            <?php echo $row8['id_llamada']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Cedula del Cliente:</strong></big> 
                            <?php echo $row8['cedula_cliente']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action" ><big><strong>Fecha de la venta:</strong></big> 
                            <?php echo $row8['registro']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Campaña:    </strong></big> 
                            <?php echo $row8['campana']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Token Transaccion:    </strong></big> 
                            <?php echo $row8['token_confronta']; ?></a> 
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
                        <center><p>Tecnologia Pereira</p></center>
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