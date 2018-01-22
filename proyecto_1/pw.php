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
        
        <center>

		<div id="header">
			<ul class="nav" align="left">
				
				<li><a href="">Servicios</a>
					<ul>
						
						<li><a href="formularios/formulario_UD.php">Actualizaciones</a></li>
						<li><a href="tip_cons/cursos.php" >Control Cursos</a></li>
						<li><a href="tip_cons/acreditaciones.php" >Control SVSP</a></li>
						<li><a href="tip_cons/planta.php">Planta Personal</a></li>					
						<li><a href="formularios/formulario_UD.php">Vencieminto Contrato</a></li>
						<!--<li><a href="formularios/formulario_CS.php" >Consultas</a></li>
						<li><a href="formularios/formulario.php">Ingresos</a></li>
						<li><a href="formularios/formulario_UD.php">Personal Proceso SVSP</a></li>
						<li><a href="tip_cons/per_acredi.php">Personal SVSP</a></li>-->
						
												
					</ul>
				</li>
								
				<li><a href="">Documentacion</a>
					<ul>
						<li><a href="formularios/formulario_CS.php" >Tutorial</a></li>
						<li><a href="formularios/formulario.php">Notas Legales</a></li>
						<li><a href="SOPORTES/QUERYS.xls">Soporte</a></li>
					
					</ul>
				</li>
				<li><a href="">Opciones</a>
					<ul>
						<li><a href="index.html" >Cerrar Sesion</a></li>
						<li><a href="operaciones/cambiar_pw.php">Cambiar Contraseña</a></li>
						
						<li><a href="https://codigosdeprogramacion.com/cursos/?lesson=4-crud-parte-2-insertar-actualizar-eliminar-y-buscar">Tutorial Curso</a></li>
						
					</ul>
					
				</li>
							
			</ul>
		</div>
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

