<?php

   require 'config/conexion.php';

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
    
    $sql = "SELECT cedula_usuario, nombres FROM usuarios ";//
    $resultado = $mysqli->query($sql);

    /*$sql1 = "SELECT concat(usuarios.apellido_1,' ',usuarios.apellido_2) as apellidos,concat(usuarios.nombre_1,' ',usuarios.nombre_2) as nombres from usuarios where usuario=' $user'";
    $result = $mysqli->query($sql1);
    $row1 = $result->fetch_array(MYSQLI_ASSOC)*/
?>
<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="imagenes/logos/favicon.ico" />
    </head>
	<body style="background-color:#F0000;">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="nav-link" href="menu.php"><img  class="menu" src="imagenes/logos/logo.png" title="Personal" width="40" height="10"></img></a>


            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="tip_cons/planta.php">
                        <img  class="menu" src="imagenes/iconos/personal.jpg" title="Personal"></img>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tip_cons/cursos.php">
                        <img class="menu2" src="imagenes/iconos/curso.jpg" title="Cursos"></img>
                    </a>
                </li>
            </ul>
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
        </nav><br>
        
        <div class="container table-responsive shadow-lg p-3 mb-5 bg-white rounded"><br>
            <h3 style="text-align: center; font-family: 'Fjalla One', sans-serif;">Agentes Registrados</h3>
            <table  class="table table-striped"  border="3" style="font-family: 'Quicksand', sans-serif;" >
                <thead class="thead-dark" >
                    <tr  scope="row" style="background-color:#cccccc; font-family: 'Fjalla One', sans-serif;">
                        <th><center>Cedula</th>
                        <th><center>Nombres y Apellidos</th>
                        <!--<th><center>Cargo</th>
                        <th><center>Campaña</th>
                        <th><center>Segmento</th>-->
                        <th><center>Ver</th>
                    </th>
                </thead>
                <!--cuerpo de la tabla-->
                <tbody>
                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <td><center><?php echo $row['cedula_usuario']; ?></td>
                            <td><center><?php echo $row['nombres']; ?></td>
                           
                            <td><center><a href="modulos/mod_consul/ver.php?id_empleado=<?php echo $row['cedula_usuario']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
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
                        <div class="footer-copyright  py-3" style="font-family: 'IM Fell English SC', serif;">© 2018 Copyright:<a style="font-family: 'IM Fell English SC', serif;">Be Call <img src="imagenes/logos/logo.png" width="50" height="30"></a>
                            <p>Yesid Marquez. Tecnologia Pereira</p>
                        </div>
                              
                    </div>
                </div>
                
            </div>
        </div> 
    
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

