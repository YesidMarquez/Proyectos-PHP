
<!DOCTYPE html>
<html>
<head>
	<title>CRUD 1.0</title>
	<script type="text/javascript" src="js/validaciones.js"></script>
</head>
<body>
	<div>
		<center>

			
			<fieldset>
			  
			  <h1>CRUD</h1>
			  	<FORM ACTION="conectar_bd_insert.php" METHOD="POST" name= "formulario" id="formulario" onclick="" onsubmit="">

				Ingrese el Nombre: <INPUT TYPE="text" NAME="Nombre" id= "Nombre" complement="required"><br><br>
				Ingrese el Apellido: <INPUT TYPE="text" NAME="Apellido" id= "Apellido" complement="required"><br><br>
				Ingrese el Nickname: <INPUT TYPE="text" NAME="Nickname" id= "Nickname" complement="required"><br><br>
				Ingrese el Estado: <INPUT TYPE="text" NAME="Estado" id= "Estado" complement="required"><br><br>
				<button TYPE="button" VALUE="Insertar" onclick="validarFormulario('formulario');">Insertar</button>
			
				</FORM>
				<form ACTION="menu.html">
				<INPUT TYPE="button" VALUE="Retornar al menu"><br><br></form>



			</fieldset>
		</center>
	</div>

</body>
</html>
