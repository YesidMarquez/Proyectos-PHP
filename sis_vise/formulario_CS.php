<!DOCTYPE html>
<html>
<head>

	<meta name="viewporte" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="css/bootstrap-theme.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>Sis_Vise</title>
	<script type="text/javascript" src="js/validaciones_bd.js"></script>
</head>
<body>
	<script type="text/javascript"></script>
	<div class="container">
			<div class="row">
				<h2 style="text-align: center">Consulta de Personal</h2>
			</div>
			<div class="row">
				<FORM ACTION="conectar_bd.php" METHOD="POST" name= "formulario_cs" id="formulario_cs" onclick="" onsubmit="">

				Ingrese el Id_Empleado: <INPUT TYPE="text" NAME="usuario" id= "usuario" complement="required"><br><br>	
				
				<button TYPE="button" VALUE="Consultar" onclick="validarFormulario('formulario_cs');" class="btn btn-primary">Consultar</button>
				

				</FORM>
				<form ACTION="menu.html"><br>
				<INPUT TYPE="submit" VALUE="Retornar al menu" class="btn btn-primary"><br></form>
									
		</div>
	
</body>
</html>






