<!DOCTYPE html>
<html>
<head>
	<title>Sis_Vise</title>
</head>
<body>
	<div>
		<center>

			
			<fieldset>
			  
			  <h1>Sis_Vise</h1>

			  	<?php
				echo "**********************************UPDATE***********************************";
				echo "<br>";

					$usuario = "root";
					$password = "12345";
					$servidor = "localhost";
					$basededatos = "credenciales";
					$IDE=$_POST['Cedula'];
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
					$campos1 = "UPDATE credencial SET ruta_imagen = '$nombre_img' WHERE empleado_id = '$IDE'";
					//$campos1 = "UPDATE usuario SET nombre='$NOMBRE',apellido='$APELLIDO', nickname= '$NICKNAME',estado_id= $ESTADO WHERE id_usuario = $USER";
					
					$resultado1 = mysqli_query( $conexion, $campos1 ) or die ( "NO se realizaron Actualizaciones ");
					if($resultado1)
					{
					    
					    echo("____________________________________________");echo "<br>";
					    echo("Datos Actualizados");echo "<br>";
					    echo("____________________________________________");echo "<br>";echo "<br>";
					    $campos = "SELECT *  FROM credencial WHERE empleado_id = '$IDE'";
						//$query = $campos.$IDE;
						$resultado = mysqli_query( $conexion, $campos ) or die ( "Algo ha ido mal en la consulta a la base de datos");
						
						// Motrar el resultado de los registro de la base de datos
						// Encabezado de la tabla
						echo "<table width='10%' borde='50' >";
						echo "<tr>";

						echo "<th>Cedula</th>";
						echo "</td> <td>";
						echo "<th>Archivo</th>";
						echo "</td> <td>";
						echo "</tr>";
						
						// Bucle while que recorre cada registro y muestra cada campo en la tabla.
						while ($columna = mysqli_fetch_array( $resultado ))
						{
							echo "<tr>";
							echo "<td>" .$columna['empleado_id'] . "</td> <td>"."</td> <td>". $columna['ruta_imagen'] . "</td> <td>"."</td> <td>" ;
							echo "</tr>";
						}
						
						echo "</table>"; // Fin de la tabla
						// cerrar conexión de base de datos
						mysqli_close( $conexion );
						echo "<br>";

					} 
					else
					{
					   echo("Datos no Actualizados");
					}

				echo "*****************************************************************";
				echo "<br>";echo "<br>";
				?>
				<form ACTION="menu.html">
				<INPUT TYPE="submit" VALUE="Retornar al menu"><br></form>

			</fieldset>
		</center>
	</div>

</body>
</html>











<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	

	

</body>
</html>