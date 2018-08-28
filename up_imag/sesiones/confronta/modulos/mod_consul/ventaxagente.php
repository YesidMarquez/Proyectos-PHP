
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
$sql = "SELECT *  FROM `confronta` WHERE usuario_cedula = $id";
$resultado = $mysqli->query($sql);


$sql2 = "SELECT  count(*) as conteo FROM `confronta` WHERE usuario_cedula= $id";
$resultado2 = $mysqli->query($sql2);
$row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
//echo $row2['conteo'];
    
?>

<htm lang="es">
    <head>
        <title>MENU.2</title>
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
            <?php if ($nivel==2) {?>
                <a class="nav-link" href="../../menu.php"><img  class="" src="../../imagenes/logos/logo.png" title="Personal" width="80" height="50"></img></a>
            <?php } ?>
            <a class="nav-link" href="#"><img  class="" src="../../imagenes/logos/logo.png" title="Personal" width="80" height="50"></img></a>
            <!-- Links -->
            <ul class="navbar-nav">
                <?php if ($nivel==2) {?>
                <li class="nav-item">
                    <a class="nav-link" href="../../menu.php">
                        <img  class="menu" src="../../imagenes/iconos/agentes.png"  title="Agentes"></img>
                    </a>
                </li>   
                <?php } ?>
                
                <li class="nav-item">
                    <a class="nav-link" href="../mod_insert/ventas.php">
                        <img  class="menu" src="../../imagenes/iconos/ventas.png" title="Ventas">
                        </img>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mod_config/desconectar.php">
                        <img  class="menu" src="../../imagenes/iconos/cerrar.png"  title="Agentes" width="80" height="80"></img>
                    </a>
                </li>
                <li>
                    <div class="container" >
                        <p><h3 style="text-align: center; font-family: 'Fjalla One', sans-serif;">Confronta</h3></p>
                        <p>

                        <h4 style="text-align: center; font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==1) {?>
                        Mes de Enero<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==2) {?>
                        Mes de Febrero<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==3) {?>
                        Mes de Marzo<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==4) {?>
                        Mes de Abril<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==5) {?>
                        Mes de Mayo<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==6) {?>
                        Mes de Junio<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==7) {?>
                        Mes de Julio<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==8) {?>
                        Mes de Agosto<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==9) {?>
                        Mes de Septiembre<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==10) {?>
                        Mes de Octubre<?php }?></h4>
                        <h4 style="text-align: center; font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==11) {?>
                        Mes de Noviembre<?php }?></h4>
                        <h4 style="text-align: center;font-family: 'Fjalla One', sans-serif;"><?php if (date('m')==12) {?>
                        Mes de Diciembre<?php }?></h4>
                        </p>
                    </div>   
                </li>
            </ul>
        </nav><br>      
        
<!--****************************************************** header *************************************************************************-->
        <div class="container">
            
            <div class="row">
                <div class="col"><h2 style="text-align:center">Datos del Personal</h2></div>
            </div>
        </div>

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
                                    <th><center>TOKEN</th>
                                    <th><center>FECHA VENTA</th>
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
                                        <td><?php echo $row['campana']; ?>
                                        <td><?php echo $row['token_confronta']; ?>
                                        <td><?php echo $row['registro']; ?>
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
                        <div class="footer-copyright  py-3" style="font-family: 'IM Fell English SC', serif;">© 2018 Copyright:<a style="font-family: 'IM Fell English SC', serif;">Be Call <img src="../../imagenes/logos/logo.png" width="50" height="30"></a>
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