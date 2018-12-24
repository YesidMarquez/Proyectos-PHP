<?php
    require("../mod_config/conexion.php");
    include("../funciones/funciones.php");
       
    //Iniciar Sesión
    session_start();
       
    //Validar si se está ingresando con sesión correctamente
    if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "../../index.html"
    </script>';
    }    
         
    $id=$_SESSION['cedula'];
    $nivel=$_SESSION['id_cargo']; 
    $cargo=$_SESSION['cargo'];
    $nombre = $_SESSION['nombre'];
    $apellido=$_SESSION['apellido'];
   
     
   
    //id_registro,cedula_cliente,usuario_cedula,campaña
    $sql = "SELECT *  FROM `confronta`";
    $resultado = $mysqli->query($sql);
    
    
  
    $sql8 = "CALL Contador('$fecha_mes_inc','$fecha1','$fecha_ini','$fecha_fin')";
    $result8 = $mysqli->query($sql8);
    $row8 = $result8->fetch_array(MYSQLI_ASSOC);
  
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
        <link rel="icon" type="image/x-icon" href="../../imagenes/logos/favicon.ico" />
    </head>
    <body>
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="nav-link" href="#"><img  class="" src="../../imagenes/logos/logo.png" title="" width="80" height="50"></img></a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">
                        <img src="../../imagenes/iconos/ag10.png" title="Listado de Agentes" width="70" height="70"></img>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mod_config/desconectar.php">
                        <img  class="menu" src="../../imagenes/iconos/cerrar.png"  title="Cerrar sesion" width="80" height="80"></img>
                    </a>
                </li>
                 
            </ul>
            <div class="container fuente"> 
                <div class="col-sm-8 titulo" >
                    <CENTER> 
                    <font color="white"><h3 >CONFRONTA</h3>                        
                    HISTORICO VENTAS </CENTER></font>
                </div>
                <div class="titulo">
                    <ul class="list-group">
                        <center>
                            <a class="nav-link" >
                                <img  class="menu" src="../../imagenes/iconos/ag.png"  title="<?php echo $nombre." ".$apellido; ?>" width="60" height="60"></img>
                            </a>
                        </center>
                        <li class="badge badge-danger badge-pill">
                            <span class="badge badge-dark badge-pill"><?php echo $nombre." ".$apellido; ?></span><br>  
                            <span class="badge badge-dark badge-pill"><?php echo $cargo; ?></span>
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
                                <div class="col-sm-5 ">
                                
                                </div>
                                <div class="col-sm-5 ">
                                </div>
                                <div class="col-sm-10 ">
                                    <div class="container"> 
                                        <div class="col-3 ">
                                            <ul class="list-group">
                                              <li class="badge badge-success badge-pill">
                                                VENTAS DIARIAS
                                                <span class="badge badge-dark badge-pill">
                                                    <?php echo $row8['conteod']; ?>
                                                </span>
                                              </li>
                                              <li class="badge badge-primary badge-pill">
                                                VENTAS <?php if (date('m')==1) {?>
                                                ENERO<?php }?>
                                                <?php if (date('m')==2) {?>
                                                FEBRERO<?php }?>
                                                <?php if (date('m')==3) {?>
                                                MARZO<?php }?>
                                                <?php if (date('m')==4) {?>
                                                ABRIL<?php }?>
                                                <?php if (date('m')==5) {?>
                                                MAYO<?php }?>   
                                                <?php if (date('m')==6) {?>
                                                JUNIO<?php }?>
                                                <?php if (date('m')==7) {?>
                                                JULIO<?php }?>
                                                <?php if (date('m')==8) {?>
                                                AGOSTO <?php }?>
                                                <?php if (date('m')==9) {?>
                                                SEPTIEMBRE<?php }?>
                                                <?php if (date('m')==10) {?>
                                                OCTUBRE<?php }?>
                                                <?php if (date('m')==11) {?>
                                                NOVIEMBRE<?php }?>
                                                <?php if (date('m')==12) {?>
                                                DICIEMBRE<?php }?>   
                                                <span class="badge badge-dark badge-pill">
                                                    <?php echo $row8['conteom']; ?></span>
                                              </li>
                                              <li class="badge badge-danger badge-pill">
                                                HISTORICO DE VENTAS  
                                                <span class="badge badge-dark badge-pill"><?php echo $row8['conteoh']; ?></span>
                                              </li>
                                            </ul>
                                        </div><br> 
                                    </div>                                     
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
                                    <th><center>FECHA VENTA</th>
                                    <th><center>VER</th>    
                                </tr>
                            </thead>
                            <!--cuerpo de la tabla-->
                            <tbody id="myTable">
                                <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $row['id_llamada']; ?></td>
                                        <td><?php echo $row['cedula_cliente']; ?></td>
                                        <td><?php echo $row['usuario_cedula']; ?></td>
                                        <td><?php echo $row['campana']; ?></td>
                                        <td><?php echo $row['registro']; ?></td>
                                        <td><center><a href="detalle.php?token=<?php echo $row['token_confronta']; ?>"><img src="../../imagenes/iconos/Ver1.png" width="30" height="30"></a></td></a></td>
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
                                <center><p>Tecnologia Pereira</p></center>
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