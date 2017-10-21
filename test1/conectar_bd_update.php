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
				echo "**********************************UPDATE***********************************";
				echo "<br>";

					$usuario = "root";
					$password = "12345";
					$servidor = "localhost";
					$basededatos = "test_1";

					$USER=$_POST['id_usuario'];
					$NOMBRE=$_POST['Nombre'];
					$APELLIDO=$_POST['Apellido'];
					$NICKNAME=$_POST['Nickname'];
					$ESTADO=$_POST['Estado'];
					
					// creación de la conexión a la base de datos con mysql_connect()
					$conexion = mysqli_connect( $servidor, $usuario,$password);
					
					// Selección del a base de datos a utilizar
					$db = mysqli_select_db( $conexion, $basededatos );

				// establecer y realizar consulta. guardamos en variable.
					$campos1 = "UPDATE usuario SET nombre='$NOMBRE',apellido='$APELLIDO', nickname= '$NICKNAME',estado_id= $ESTADO WHERE id_usuario = $USER";
					
					$resultado1 = mysqli_query( $conexion, $campos1 ) or die ( "NO se realizaron Actualizaciones ");
					if($resultado1)
					{
					    
					    echo("____________________________________________");echo "<br>";
					    echo("Datos Actualizados");echo "<br>";
					    echo("____________________________________________");echo "<br>";echo "<br>";
					    $campos = "SELECT u.id_usuario, u.nombre, u.apellido, u.nickname,u.clave, e.nombre AS `Descripción del Estado` ";
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
							echo "<tr>";
							echo "<td>" .$columna['id_usuario'] . "</td> <td>"."</td> <td>". $columna['nombre'] . "</td> <td>"."</td> <td>" . $columna['apellido']. "</td> <td>" ."</td><td>". $columna['nickname']. "</td> <td>". "</td><td>" .$columna['clave'] . "</td> <td>" ."</td><td>" . $columna['Descripción del Estado'] ."</td> <td>"."</td><td>"."</td>";
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