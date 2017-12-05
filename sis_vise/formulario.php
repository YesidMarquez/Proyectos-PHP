
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
			  
			  <h1>Sis_Vise</h1>

			  	<form action="conectar_bd_insert.php" enctype="multipart/form-data" method="post" name= "formulario" id="formulario" onclick="" onsubmit="">

		  			Codigo Empleado: <INPUT TYPE="text" NAME="Identificacion" id= "Identificacion" complement="required"><br><br>
		  			Ingrese los Nombres: <INPUT TYPE="text" NAME="Nombres" id= "Nombres" complement="required"><br><br>
					Ingrese los Apellidos: <INPUT TYPE="text" NAME="Apellidos" id= "Apellidos" complement="required"><br><br>
					Ingrese el Cargo: <INPUT TYPE="text" NAME="Cargo" id= "Cargo" complement="required"><br><br>
					Ingrese la Ciudad: <INPUT TYPE="text" NAME="Ciudad" id= "Ciudad" complement="required"><br><br>
				 	<label for="imagen">Cargar Imagen:</label> 
				  	<input id="imagen" name="imagen" size="30" type="file" /><br><br>
				  	<input type="submit" value="Insertar Daros" />
				</form>
			  									
				<form ACTION="menu.html"><br><br>
				<button TYPE="submit" VALUE="Retornar al menu"">Retornar al menu</button>	
				<br><br></form>



			</fieldset>
		</center>
	</div>

</body>
</html>
