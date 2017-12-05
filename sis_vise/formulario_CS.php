<!DOCTYPE html>
<html>
<head>
	<title>Sis_Vise</title>
	<script type="text/javascript" src="js/validaciones_bd.js"></script>
</head>
<body>
	<script type="text/javascript"></script>
	<div>
		<center>

			
			<fieldset>
			  
			  <h1>Sis_Vise</h1>
			  	<FORM ACTION="conectar_bd.php" METHOD="POST" name= "formulario_cs" id="formulario_cs" onclick="" onsubmit="">

				Ingrese el Id_Empleado: <INPUT TYPE="text" NAME="usuario" id= "usuario" complement="required"><br><br>	
				
				<button TYPE="button" VALUE="Consultar" onclick="validarFormulario('formulario_cs');">Consultar</button>

				</FORM>

				

				<form ACTION="menu.html">
				<INPUT TYPE="submit" VALUE="Retornar al menu"><br></form>

				
			  

			</fieldset>
		</center>
	</div>

</body>
</html>






