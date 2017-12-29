<!DOCTYPE html>
<html>
<head>
	<title>Sis_Vise</title>
	<script type="text/javascript" src="js/validaciones_bd_update.js"></script>
</head>
<body>
	<div>
		<center>

			
			<fieldset>
			  
			  <h1>Sis_Vise</h1>

			  	<form action="conectar_bd_update.php" enctype="multipart/form-data" method="post" name= "formulario_ud" id="formulario_ud" onclick="" onsubmit="">

		  			Ingrese la Cedula: <INPUT TYPE="text" NAME="Cedula" id= "Cedula" complement="required"><br><br>	
					<label for="imagen">Imagen:</label> 
				  	<input id="imagen" name="imagen" size="30" type="file" accept="image/* " /><br><br>
				  	<input type="submit" VALUE="Actualizar" onclick="validarFormulario('formulario_ud');"></button><br><br>
				</form>
			  					
				<form ACTION="menu.php">
				<button TYPE="submit" VALUE="Retornar al menu">Retornar al menu</button><br><br>  
				
				