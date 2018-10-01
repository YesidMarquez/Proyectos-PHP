<?php
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
     
    $id=$_SESSION['cedula'];
    $nivel=$_SESSION['id_cargo'];

    $cargo=$_SESSION['cargo'];
    $nombre = $_SESSION['nombre'];
    $apellido=$_SESSION['apellido'];

    date('m');
    if (date('m')==01) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==2) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==3) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==4) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==5) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==6) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        $fecha = date_create('2018-06-01');
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==7) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==8) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==9) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==10) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==11) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==12) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('5 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }
    
    $sql = "SELECT cedula_usuario, nombres, apellidos FROM usuarios where cargo_id=1";//
    $resultado = $mysqli->query($sql);

    $sql2 = "SELECT  count(*) as conteo FROM `usuarios` where cargo_id=1";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Agentes</title>
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
 <!--<body style="background-color:#0E74BC;">
 <!-- Diseño del bore domnde se ubucican las opciones de navegacion.-->       
        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <!-- Brand/logo -->
            <a class="nav-link" href="#"><marquee scrollamount="3"><img  class="" src="../../imagenes/logos/logo2.png" title="Personal" width="65" height="35"></img><img  class="" src="../../imagenes/logos/tigoune.png" title="Personal" width="65" height="40"></img></marquee></a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../modulos/mod_consul/allventas.php">
                        <img  class="menu" src="../../imagenes/iconos/hventas.png" title="Historico de Ventas" width="80" height="80"></img>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reporteexcel.php">
                        <img  class="menu" src="../../imagenes/iconos/descargae.png" title="Descarga" width="70" height="70"></img>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../imagenes/manuales/Manual Usuario Administrador.pdf">
                        <img  class="menu" src="../../imagenes/iconos/manual02.png" title="Manual Admin" width="65" height="65">
                        </img>
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
                    <font color="white"><h3 >RECOMENDADOR</h3>                        
                    AGENTES REGISTRADOS <?php if (date('m')==1) {?>
                        MES DE ENERO<?php }?>
                        <?php if (date('m')==2) {?>
                        MES DE FEBRERO<?php }?>
                        <?php if (date('m')==3) {?>
                        MES DE MARZO<?php }?>
                        <?php if (date('m')==4) {?>
                        MES DE ABRIL<?php }?>
                        <?php if (date('m')==5) {?>
                        MES DE MAYO<?php }?>   
                        <?php if (date('m')==6) {?>
                        Mes de JUNIO<?php }?>
                        <?php if (date('m')==7) {?>
                        MES DE JULIO<?php }?>
                        <?php if (date('m')==8) {?>
                        MES DE AGOSTO <?php }?>
                        <?php if (date('m')==9) {?>                       
                        MES DE SEPTIEMBRE<?php }?>
                        <?php if (date('m')==10) {?>
                        MES DE OCTUBRE<?php }?>
                        <?php if (date('m')==11) {?>
                        MES DE NOVIEMBRE<?php }?>
                        <?php if (date('m')==12) {?>
                        MES DE DICIEMBRE<?php }?></CENTER></font>
                </div>
                    <div class="titulo">
                    <ul class="list-group">
                        <li class="border badge badge-primary badge-pill">
                            <span class="border badge badge-dark badge-pill"><?php echo $nombre." ".$apellido; ?></span><br>  
                            <span class="border badge badge-dark badge-pill"><?php echo $cargo; ?></span>
                        </li><br>
                        <li class="border badge badge-primary badge-pill">
                        USUARIOS ACTIVOS
                            <span class="border badge badge-dark badge-pill"><?php echo $row2['conteo']; ?></span>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav><br>
        <div class="container table-responsive shadow-lg p-3 mb-6 bg-white rounded"><br>
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
            <table  class="table table-striped"  border="3"  >
                <thead class="thead-dark"  >
                     <tr  scope="row" style="background-color:#cccccc ">
                        <th><center>Cedula</th>
                        <th><center>Nombres y Apellidos</th>
                        <th><center>N° Ventas</th>
                        <th><center>Ver</th>
                    </tr>
                </thead>
                <!--cuerpo de la tabla-->
                <tbody id="myTable" >
                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><center><?php echo $row['cedula_usuario']; ?></td>
                            <td><center><?php echo $row['nombres']." ".$row['apellidos']; ?></td>
                            <?php $id_us=$row['cedula_usuario'];  
                            $sql4 = "SELECT  count(*) as conteo FROM `movil`where        usuario_cedula=$id_us";
                            $resultado4 = $mysqli->query($sql4);
                            $row4 = $resultado4->fetch_array(MYSQLI_ASSOC); ?> 
                            <td><center><span class="border badge badge-dark badge-pill"><?php echo $row4['conteo'];?></span></td>
                            <td><center><a href="ventaxagente.php?cedula_usuario=<?php echo $row['cedula_usuario']; ?>"><img src="../../imagenes/iconos/Ver1.png" width="30" height="30"></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>    
        
    
<!-- **********************************FIN DE AREA DE TRABAJO************************************************-->
<!--************************************** FOOTER ***********************************************************-->
  
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
    
 		<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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

