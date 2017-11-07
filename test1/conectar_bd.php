<!DOCTYPE html>
<html>
<head>
	<title>CRUD 1.0</title>
</head>
<body>
	<div>
		<center>

			
			<fieldset>
			  
			  <h1>CRUD</h1>
			  <?php


				echo "**********************************SELECT*********************************";
				echo "<br>";
				echo "<br>";


					// Ejemplo de conexión a base de datos MySQL con PHP.
					//
					// Ejemplo realizado por Oscar Abad Folgueira: http://www.oscarabadfolgueira.com y https://www.dinapyme.com
					
					// Datos de la base de datos
					
					$usuario = "root";
					$password = "12345";
					$servidor = "localhost";
					$basededatos = "test_1";
					
					
					// creación de la conexión a la base de datos con mysql_connect()
					$conexion = mysqli_connect( $servidor, $usuario,$password);
					
					// Selección del a base de datos a utilizar
					$db = mysqli_select_db( $conexion, $basededatos );
					// establecer y realizar consulta. guardamos en variable.
					$consul=$_POST['usuario'];
					if (empty($consul)) {
						echo("No se ingresaron parametros para la busqueda");
						echo "<br>";
						echo "<br>";

					}


						
												
					else{
						$campos = "SELECT nombre, apellido, nickname, clave";
						$tablas = " FROM usuario";
						$condicion = " WHERE id_usuario = ";
						$query = $campos.$tablas.$condicion.$consul;
						$resultado = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal ");
						
						// Motrar el resultado de los registro de la base de datos
						// Encabezado de la tabla
						echo "<table width='10%' borde='50' >";
						echo "<tr>";

						echo "<th>Nombre</th>";
						echo "</td> <td>";
						echo "<th>Apellido</th>";
						echo "</td> <td>";
						echo "<th>Nickname</th>";
						echo "</td> <td>";
						echo "<th>Contraseña</th>";
						echo "</td> <td>";
						
						echo "</tr>";
						
						// Bucle while que recorre cada registro y muestra cada campo en la tabla.
						while ($columna = mysqli_fetch_array( $resultado ))
						{
							echo "<tr>";
							echo "<td>" . $columna['nombre'] . "</td> <td>"."</td> <td>" . $columna['apellido']. "</td> <td>" ."</td><td>". $columna['nickname']. "</td> <td>". "</td><td>" .$columna['clave'] . "</td> <td>" ."</td><td>" ."</td><td>"."</td>";
							echo "</tr>";
						}
						
						echo "</table>"; // Fin de la tabla
						// cerrar conexión de base de datos
						mysqli_close( $conexion );
						echo "<br>";
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




