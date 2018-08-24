<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/

    require '../../config/conexion.php';
    
    $id = $_GET['cedula_usuario'];
   
    
    $sql = "SELECT * FROM usuarios u, cargo c where u.cargo_id=c.id_cargo and  u.cedula_usuario= $id ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);

    $sql1 = "SELECT * FROM confronta where usuario_cedula = $id ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);

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
        <h1 class="text-center font-weight-light">Detalle de la Venta</h1><br>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6  ">
                <img src="../<?php echo $ruta; ?>" class="img-thumbnail" alt="Cinque Terre" width="500" height="400"><br><br><br>
                <h6 class="card-title"><strong><?php echo $row['nombres'];?></strong></h5>
                <h6><strong>Cargo: </strong><span class="badge badge-dark"><?php echo $row['descripcion'];?></span></h5>
                <h6><strong>Cedula:</strong> <?php echo $row['cedula_usuario'];?></h5>
                <div class="btn-group">
                    <a href="ventaxagente.php?cedula_usuario=<?php echo $row['cedula_usuario'];?>" class="btn btn-outline-primary ">ATRAS</a>
                </div>
            </div>
            <div class="col-sm-5">
                <div class=" container p-2 bg-info">
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">DETALLES</button>
                    <div >
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
    
    <footer>
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
    </footer>    
     
   
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
<!--************************************************************** FIN AREA DE DISEÑO (FRONTEND)PROYECTO *****************************-->


