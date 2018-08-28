
<?php

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
 
$id=$_SESSION['cedula'];
$nivel=$_SESSION['id_cargo']; 
   
     
   
    //id_registro,cedula_cliente,usuario_cedula,campaña
    $sql = "SELECT *  FROM `confronta`";
    $resultado = $mysqli->query($sql);
    date_default_timezone_set('America/Bogota');
    $fecha=date('Y-m-d');
    $hora1=date(' 24:00:00');
    $hora2=date(' 23:59:59');
    $fecha1= $fecha.$hora1;
    $fecha2= $fecha.$hora2;
    $sql2 = "SELECT  count(*) as conteo FROM `confronta` where registro BETWEEN '$fecha1' AND '$fecha2' ";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);

    $sql3 = "SELECT  count(*) as conteo FROM `confronta`";
    $resultado3 = $mysqli->query($sql3);
    $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);

    $sql4 = "SELECT  count(*) as conteo FROM `confronta`";
    $resultado4 = $mysqli->query($sql4);
    $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
    //echo $row2['conteo'];
    
?>

<htm lang="es">
    <head>
        <title>HISTORICO</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="icon" type="image/x-icon" href="imagenes/logos/favicon.ico" />
    </head>
    <body>
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="nav-link" href="#"><img  class="" src="../../imagenes/logos/logo.png" title="Personal" width="80" height="50"></img></a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">
                        <img src="../../imagenes/iconos/agentes.png" title="Personal"></img>
                    </a>
                </li>
                <li>
                     <div class="container" >
                        
                       
                    </div>   
                </li>
                 
            </ul>
            <div class="container"> 
                <div class="col-sm-8 titulo" >
                    <CENTER> 
                    <h3 style="text-align: center; font-family: 'Fjalla One', sans-serif;">Confronta</h3>                        
                    HOSTORICO DE VENTAS</CENTER>
                 
                </div>
                
                <div class="col-3 ">
                    <ul class="list-group">
                      <li class="badge badge-success badge-pill">
                        VENTAS DIARIAS
                        <span class="badge badge-dark badge-pill">
                            <?php echo $row2['conteo']; ?>
                        </span>
                      </li>
                      <li class="badge badge-primary badge-pill">
                        VENTAS <?php if (date('m')==1) {?>
                        Mes de Enero<?php }?>
                        <?php if (date('m')==2) {?>
                        Mes de Febrero<?php }?>
                        <?php if (date('m')==3) {?>
                        Mes de Marzo<?php }?>
                        <?php if (date('m')==4) {?>
                        Mes de Abril<?php }?>
                        <?php if (date('m')==5) {?>
                        Mes de Mayo<?php }?>   
                        <?php if (date('m')==6) {?>
                        Mes de Junio<?php }?>
                        <?php if (date('m')==7) {?>
                        Mes de Julio<?php }?>
                        <?php if (date('m')==8) {?>
                        MES DE AGOSTO <?php }?>
                        <?php if (date('m')==9) {?>                       
                        Mes de Septiembre<?php }?>
                        <?php if (date('m')==10) {?>
                        Mes de Octubre<?php }?>
                        <?php if (date('m')==11) {?>
                        Mes de Noviembre<?php }?>
                        <?php if (date('m')==12) {?>
                        Mes de Diciembre<?php }?>   
                        <span class="badge badge-dark badge-pill">
                            <?php echo $row2['conteo']; ?></span>
                      </li>
                      <li class="badge badge-danger badge-pill">
                        HISTORICO DE VENTAS  
                        <span class="badge badge-dark badge-pill"><?php echo $row4['conteo']; ?></span>
                      </li>
                    </ul>
                </div> 
            </div> 
        </nav><br>      
        
<!--****************************************************** header 
    <div class="container">
            <div class="row">
                <div class="col"><h2 style="text-align:center">Datos del Personal</h2></div>
            </div>
        </div>*************************************************************************-->
        
    
<!--****************************************************** Tabla de batos *****************************************************************-->
        <div class="container-fluid">
            <div class="row">
                <div class="col ">
                    <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="container-fluid"> 
                            <div class="row">
                                <div class="col-sm-8 ">
                                
                                </div>
                                <div class="col-sm-2 ">
                                    
                                </div>
                                <div class="col-sm-2 ">
                                 <input class="form-control justify-content-end" id="myInput" type="text" placeholder="Filtrar.." align="left">   
                                </div>
                            </div>
                        </div>
                        
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th><center>ID LLAMADA</th>
                                    <th><center>CLIENTE</th>
                                    <th><center>AGENTE</th>
                                    <th><center>CAMPAÑA</th>
                                    <th><center>VER</th>    
                                </tr>
                            </thead>
                            <!--cuerpo de la tabla-->
                            <tbody id="myTable">
                                <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $row['id_registro']; ?></td>
                                        <td><?php echo $row['cedula_cliente']; ?></td>
                                        <td><?php echo $row['usuario_cedula']; ?></td>
                                        <td><?php echo $row['campana']; ?></td>
                                        <td><center><a href="detalle.php?token=<?php echo $row['token_confronta']; ?>"><i class="fas fa-eye"></i></a></td></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            </div>
                </div>
            </div>
        </div>
<!--****************************************************** foother ************************************************************************-->
       
            <div class="container">    
                <div class="row">
                    <div class="col">
                         <div class="row justify-content-md-center">
                            <div class="footer-copyright  py-3" style="font-family: 'IM Fell English SC', serif;">© 2018 Copyright:<a style="font-family: 'IM Fell English SC', serif;"><img src="../../imagenes/logos/logo.png" width="50" height="30"></a>
                                <p>Yesid Marquez. Tecnologia Pereira</p>
                            </div>
                                  
                        </div>
                    </div>
                    
                </div>
            </div>
        
<!--******************************************************************************************************************************-->
            <!-- Optional JavaScript -->
            <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>
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

<form></form>