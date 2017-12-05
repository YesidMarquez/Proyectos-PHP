<!DOCTYPE html>
<html>
<head>
	<title>CRUD 1.0</title>
</head>
<body>
	<div>
		<center>

			
			<fieldset>
			  
			  <h1>Sis_Vise</h1>
			  	<?php

				echo "********************************INSERT*********************************";	
				echo "<br>";


					$usuario = "root";
					$password = "12345";
					$servidor = "localhost";
					$basededatos = "credenciales";
					$ID=$_POST["Identificacion"];
					$NOMBRES=$_POST["Nombres"];
					$APELLIDOS=$_POST["Apellidos"];
					$CARGO=$_POST["Cargo"];
					$CIUDAD=$_POST["Ciudad"];
					$nombre_img = $_FILES['imagen']['name'];
					$tipo = $_FILES['imagen']['type'];
					$tamano = $_FILES['imagen']['size'];

					// creación de la conexión a la base de datos con mysql_connect()
					$conexion = mysqli_connect( $servidor, $usuario,$password);
					
					// Selección del a base de datos a utilizar
					$db = mysqli_select_db( $conexion, $basededatos );


					//Si existe imagen y tiene un tamaño correcto
					if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) 
					{
					   //indicamos los formatos que permitimos subir a nuestro servidor
					   if (($_FILES["imagen"]["type"] == "image/gif")
					   || ($_FILES["imagen"]["type"] == "image/jpeg")
					   || ($_FILES["imagen"]["type"] == "image/jpg")
					   || ($_FILES["imagen"]["type"] == "image/png"))
					   //|| ($_FILES["archivo"]["type"] == "archivo/pdf"))
					   {
					      // Ruta donde se guardarán las imágenes que subamos
					      $directorio = $_SERVER['DOCUMENT_ROOT'].'/Proyectos-PHP/sis_vise/intranet/uploads/';
					      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
					      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
					    } 
					    else 
					    {
					       //si no cumple con el formato
					       echo "No se puede subir una imagen con ese formato ";
					    }
					} 
					else 
					{
					   //si existe la variable pero se pasa del tamaño permitido
					   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
					}

					
					
				// establecer y realizar consulta. guardamos en variable.
					//$campos1 = "UPDATE credencial SET ruta_imagen = '$nombre_img' ";
					$campos1 = "INSERT INTO empleado (`id_empleado`, `nombres`, `apellidos`, `cargo`, `ciudad`)  VALUES ('$ID', '$NOMBRES', '$APELLIDOS', '$CARGO', '$CIUDAD')";
					$campos2 = "INSERT INTO credencial (`empleado_id`,`ruta_imagen`) VALUES ('$ID', '$nombre_img')";

					
					$resultado1 = mysqli_query( $conexion, $campos1 ) or die ( "Algo ha ido mal en la insecion a la base de datos");
					$resultado2 = mysqli_query( $conexion, $campos2 ) or die ( "Algo ha ido mal en la insecion a la base de datos");
					
					if($resultado1)
					{	
						echo("____________________________________________");echo "<br>";
					    echo("Datos Ingresados");echo "<br>";
					    echo("____________________________________________");echo "<br>";echo "<br>";
					    				    						
						
					} 
					else
					{
					   echo("Datos no ingresados");
					}
						
				?>

				<!DOCTYPE html>
				<html>
				<head>
					<title></title>
				</head>
				<body>


					<form ACTION="menu.html">
					<INPUT TYPE="submit" VALUE="Retornar al menu"><br></form>

					

				</body>
				</html>

			</fieldset>
		</center>
	</div>

</body>
</html>






