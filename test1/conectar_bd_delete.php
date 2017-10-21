
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

				echo "***********************************DELETE*************************************";	
				echo "<br>";


					$usuario = "root";
					$password = "12345";
					$servidor = "localhost";
					$basededatos = "test_1";
					$ID_USER=$_POST['id_usuario'];
					

					
					// creación de la conexión a la base de datos con mysql_connect()
					$conexion = mysqli_connect( $servidor, $usuario,$password);
					
					// Selección del a base de datos a utilizar
					$db = mysqli_select_db( $conexion, $basededatos );

				// establecer y realizar consulta. guardamos en variable.
					$campos1 =  "DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = $ID_USER";
					$resultado1 = mysqli_query( $conexion, $campos1 ) or die ( "Operacion en Base de Datos fallida");
					if($resultado1){
					    echo("____________________________________________");echo "<br>";
					    echo("Los datos seleccionados han sido Eliminados");echo "<br>";
					    echo("____________________________________________");
					    echo("");echo "<br>";echo "<br>";
					    echo("Estado Actual de la Base de Datos");echo "<br>";
					    echo("********************************************");
					    $campos = "SELECT u.id_usuario,u.nombre, u.apellido, u.nickname,u.clave, e.nombre AS `Descripción del Estado` ";
						$tablas = "FROM usuario u, estado e ";
						$condicion = "WHERE u.estado_id = e.id_estado ";
						$query = $campos.$tablas.$condicion;
						$resultado = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
						
						// Motrar el resultado de los registro de la base de datos
						// Encabezado de la tabla
						echo "<table width='10%' borde='50' >";
						echo "<tr>";

						echo "<th>Id_User</th>";
						echo "</td> <td>";
						echo "<th>Nombre</th>";
						echo "</td> <td>";
						echo "<th>Apellido</th>";
						echo "</td> <td>";
						echo "<th>Nickname</th>";
						echo "</td> <td>";
						echo "<th>Contraseña</th>";
						echo "</td> <td>";
						echo "<th>Descripción del Estado</th>";
						echo "</tr>";
						
						// Bucle while que recorre cada registro y muestra cada campo en la tabla.
						while ($columna = mysqli_fetch_array( $resultado ))
						{
							echo "<td>" .$columna['id_usuario'] . "</td> <td>"."</td> <td>". $columna['nombre'] . "</td> <td>"."</td> <td>" . $columna['apellido']. "</td> <td>" ."</td><td>". $columna['nickname']. "</td> <td>". "</td><td>" .$columna['clave'] . "</td> <td>" ."</td><td>" . $columna['Descripción del Estado'] ."</td> <td>"."</td><td>"."</td>";
							echo "</tr>";
						}
						
						echo "</table>"; // Fin de la tabla
						// cerrar conexión de base de datos
						mysqli_close( $conexion );
						echo "<br>";

					}else{
					   echo("Datos no Eliminados");
					}

				echo "*****************************************************************";
				echo "<br>";
				?>


				<!DOCTYPE html>
				<html>
				<head>
					<title></title>
				</head>
				<body>


					<form ACTION="formulario_DL.php">
					<INPUT TYPE="submit" VALUE="Retornar al menu de Eliminacion"><br></form>

					

				</body>
				</html>
			  
			
			</fieldset>
		</center>
	</div>

</body>
</html>

