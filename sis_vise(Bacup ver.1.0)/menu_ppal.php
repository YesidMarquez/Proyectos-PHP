
<?php

    require 'config/conexion.php';

    date('m');
    if (date('m')==01) {
     	$dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==2) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('12 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==3) {
       	$dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==4) {
      	$dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==5) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==6) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        $fecha = date_create('2018-06-01');
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==7) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==8) {
      	$dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==9) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==10) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==11) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==12) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }
    
    $where = "where fecha_vencimiento BETWEEN CAST('$fecha1' AS DATE) AND CAST('$fecha3' AS DATE) and id_empleado=empleado_id and estado_id=1";
    $sql = "SELECT id_empleado, concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, nro_curso, fecha_vencimiento FROM empleado, control_cursos $where";//
    $resultado = $mysqli->query($sql);
    
?>

<htm lang="es">
	<head>
		<script src='http://www.google.com/jsapi'></script>
		<meta name="viewporte" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="css/bootstrap-theme.css">
		<link rel="stylesheet"  href="css/bootstrap.min.css">
		<script src="js/jquery-3.3.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>Sis_Vise</title>
		<style type="text/css">
			
			{
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			.Fields input{
				background-color: #E9E9E9;
				border: 2px solid #A8A8A8;
				font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
				font-size: 10px;
			}

			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
		</style>
	</head>

	<body width:100% class="row table-responsive">
        <div class="container" >
            <div class="row"><font face="Comic Sans MS,verdana">
	            <h2 style="text-align: center; "  >Menu Principal</h2>
	        </div>
       
		<center>
				<div class="row u-row-wrapper" data-reactid="32">
	        		
	        		<div class="col-xs-12 col-sm-4" data-reactid="36">
	        			<div class="Card" data-reactid="37">
	        				<figure data-reactid="38">
	        				<a href="menu.php" class="Card-link" data-reactid="46"><img src="imagenes/menu.png" width="100" height="100" data-reactid="39"></a>
	        				</figure>
	        				<div class="Card-info" data-reactid="40">
	        					<span class="Card-title" data-reactid="42"><h4 style="text-align: center; ;">Menu <br> De Sevicios</span>
						    </div>
	        			</div>
	        		</div>
	        		<div class="col-xs-12 col-sm-4" data-reactid="36">
	        			<div class="Card" data-reactid="37">
	        				<figure data-reactid="38">
	        				<a href="config/config_user.php" class="Card-link" data-reactid="46"><img src="imagenes/config.jpg" width="100" height="100" data-reactid="39"></a>
	        				</figure>
	        				<div class="Card-info" data-reactid="40">
	        					<span class="Card-title" data-reactid="42"><h4 style="text-align: center; ;">Configuraciones</span>
						    </div>
	        			</div>
	        		</div>
	        		<div class="col-xs-12 col-sm-4" data-reactid="58">
		    			<div class="Card" data-reactid="59">
		    				<figure data-reactid="60">
		    					<a href="index.html"   data-reactid="68"><img src="imagenes/cerrar.png"  width="100" height="100" data-reactid="71"></a>
		    				</figure>
		    				<div class="Card-info" data-reactid="62">
		    					
		    					<span class="Card-title" data-reactid="64"><h4 style="text-align: center; ;">Cerrar <br> Sesion</span>
		    					
		    				</div>
			    				
		    			</div>
		    		</div>
	    		</div>
		</center>
		<h3 style="text-align: center;">Vencimientos Proximos </h3>
		<h4 style="text-align: center;"">Mes <?php $mes=date('m'); echo ($mes)?></h4>
		<div class="row table-responsive">
            <table  class="table table-striped"  border="3" style="background-color:red" >
                <thead border="3" >
                    <tr  style="background-color:#cccccc">
                        <th><center>Cedula</th>
                        <th><center>Nombres</th>
                        <th><center>Apellidos</th>
                        <th><center>NRO</th>
                        <th><center>Vencimiento Curso</th>
                        <th><center>Modificar</th>

                </thead>

                <!--cuerpo de la tabla-->
                <tbody>
                    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>

                            <td><center><?php echo $row['id_empleado']; ?></td>
                            <td><center><?php echo $row['nombres']; ?></td>
                            <td><center><?php echo $row['apellidos']; ?></td>
                            <td><center><?php echo $row['nro_curso']; ?></td>
                            <td><center><?php echo $row['fecha_vencimiento']; ?></td>
                            <td><center><a href="operaciones/modificar_cursos.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
	</body>
</html>

