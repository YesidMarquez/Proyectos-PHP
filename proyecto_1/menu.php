<?php
	require 'config/conexion.php';
	
	$where = "where venc_curso BETWEEN CAST('2018-12-01' AS DATE) AND CAST('2018-12-31' AS DATE) and id_empleado=empleado_id";
	$sql = "SELECT id_empleado, nombres, apellidos, venc_curso, venc_acreditacion FROM empleado, credencial $where";//
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
			
			* {
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
	
	<body>
				
		
		
		<center>
            <div class="container">
            <div class="row">

                <h2 style="text-align: center;">Sistema de Infomacion</h2>
                <h6 style="text-align: center;">PROYECTO 1</h6>
                
            </div>
           
        		
           
        </center>




		<!--<<div id="header">
			<ul class="nav" align="center">
				
				<li><a href="">Servicios</a>
					<ul>
						
						<li><a href="tip_cons/consulta.php">Actualizaciones</a></li>
						<li><a href="tip_cons/cursos.php" >Control Cursos</a></li>
						<li><a href="tip_cons/acreditaciones.php" >Control SVSP</a></li>
						<li><a href="tip_cons/planta.php">Planta Personal</a></li>					
						<li><a href="formularios/formulario_UD.php">Vencieminto Contrato</a></li>
						li><a href="formularios/formulario_CS.php" >Consultas</a></li>
							
						<li><a href="formularios/formulario.php">Ingresos</a></li>
						<li><a href="formularios/formulario_UD.php">Personal Proceso SVSP</a></li>
						<li><a href="tip_cons/per_acredi.php">Personal SVSP</a></li>
						
												
					</ul>
				</li>
								
				<li><a href="">Documentacion</a>
					<ul>
						<li><a href="formularios/formulario_CS.php" >Tutorial</a></li>
						<li><a href="formularios/formulario.php">Notas Legales</a></li>
						<li><a href="archivos/SOPORTES/CREDENCIALES/CREDENCIALES VENCEN 15-11-2017.jpg">Soporte</a></li>
					
					</ul>
				</li>
				<li><a href="">Opciones</a>
					<ul>
						<li><a href="index.html" >Cerrar Sesion</a></li>
						<li><a href="operaciones/cambiar_pw.php">Cambiar Contraseña</a></li>
						
						<li><a href="https://codigosdeprogramacion.com/cursos/?lesson=4-crud-parte-2-insertar-actualizar-eliminar-y-buscar">codigosdeprogramacion</a></li>
						<li><a href="https://styde.net/manejo-de-errores-404-en-laravel/">styde.net</a></li>
						
					</ul>
					
				</li>
							
			</ul>
		</div>--><br>
		<center>
				<div class="row u-row-wrapper" data-reactid="32">
	        		
	        		<div class="col-xs-12 col-sm-4" data-reactid="36">
	        			<div class="Card" data-reactid="37">

	        				<figure data-reactid="38">
	        				<a href="tip_cons/consulta.php" class="Card-link" data-reactid="46"><img src="imagenes/update.jpg" width="100" height="100" data-reactid="39"></a>
	        				</figure>
	        				<div class="Card-info" data-reactid="40">
	        					
	        					<span class="Card-title" data-reactid="42">Actualizacion</span>

						       					
	        				</div>
	        				<a href="tip_cons/consulta.php" class="Card-link" data-reactid="46"></a>
	        			</div>
	        		</div>
	        		<div class="col-xs-12 col-sm-4" data-reactid="47">
	        			<div class="Card" data-reactid="48">
	        				<figure data-reactid="49">
	        					<a href="tip_cons/cursos.php" ><img src=imagenes/control.jpg alt="" width="100" height="100" data-reactid="50">
	        				</figure>
	        				<div class="Card-info" data-reactid="51">
	        					<span class="Card-title" data-reactid="53">Control Cursos</span>
	        					
	        				</div>
	        				
	        			</div>
	        		</div>
	        		<div class="col-xs-12 col-sm-4" data-reactid="58">
	        			<div class="Card" data-reactid="59">
	        				<figure data-reactid="60">
	        					<a href="tip_cons/acreditaciones.php"  class="Card-link" data-reactid="68"><img src="imagenes/control2.jpg" alt="Desarrollo con Java " width="100" height="100" data-reactid="61"></a>
	        				</figure>
	        				<div class="Card-info" data-reactid="62">
	        					
	        					<span class="Card-title" data-reactid="64">Control SVSP</span>
	        					
	        				</div>
	        				
	        			</div>
	        		</div>
	        		
	    	</div><br><br>			
		</center>
		<center>
			<div class="col-xs-12 col-sm-4" data-reactid="58">
    			<div class="Card" data-reactid="59">
    				<figure data-reactid="60">
    					<a href="tip_cons/planta.php"   data-reactid="68"><img src="imagenes/personal.jpg" alt="Desarrollo con Java " width="100" height="100" data-reactid="71"></a>
    				</figure>
    				<div class="Card-info" data-reactid="62">
    					
    					<span class="Card-title" data-reactid="64">Planta de Personal</span>
    					
    				</div>
    				<a href="" class="Card-link" data-reactid="68"></a>
    			</div>
    			
    		</div>
    		<div class="col-xs-12 col-sm-4" data-reactid="58">
    			<div class="Card" data-reactid="59">
    				<figure data-reactid="60">
    					<a href="index.html"   data-reactid="68"><img src="imagenes/cerrar.jpg" alt="Desarrollo con Java " width="100" height="100" data-reactid="71"></a>
    				</figure>
    				<div class="Card-info" data-reactid="62">
    					
    					<span class="Card-title" data-reactid="64">Cerrar Sesion</span>
    					
    				</div>
    				<a href="" class="Card-link" data-reactid="68"></a>
    			</div>
    			
    		</div>
		</center>
		

		</center>
		
	</body><br><br><br><br><br>
	<center>

		<div >
			<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<marquee direction="right"  onmouseover="stop()" onmouseout="start()" scrollamount="15" scrolldelay="100" >
					<img src="imagenes/logo.jpg" align="" width="10%">
					<img src="imagenes/logo1.jpg" align="" width="10%">
					<img src="imagenes/SISE.jpg" align="" width="10%">
					<img src="imagenes/SISE1.jpg" align="" width="10%">
					<img src="imagenes/SISE2.jpg" align="" width="10%">
					<img src="imagenes/SISE3.jpg" align="" width="10%">
					
				</marquee>
			</p>
			
		</div>
		
				
	</center>

</html>

