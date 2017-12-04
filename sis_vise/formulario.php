
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

				
				<form enctype="multipart/form-data" action="uploader.php" method="POST">
				Codigo Empleado: <INPUT TYPE="text" NAME="Nombre" id= "Nombre" complement="required"><br><br>
				<input name="uploadedfile" type="file" />
				<input type="submit" value="Subir archivo" />
				</form>
				<button TYPE="button" VALUE="Insertar" onclick="validarFormulario('formulario');">Insertar</button>
			
				</FORM>
				<form ACTION="menu.html">
				<button TYPE="submit" VALUE="Retornar al menu"">Retornar al menu</button>	
				<br><br></form>



			</fieldset>
		</center>
	</div>

</body>
</html>
