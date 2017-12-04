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

				echo "********************************INSERT*********************************";	
				echo "<br>";


					$usuario = "root";
					$password = "12345";
					$servidor = "localhost";
					$basededatos = "test_1";
					$NOMBRE=$_POST["Nombre"];
					$APELLIDO=$_POST["Apellido"];
					$NICKNAME=$_POST["Nickname"];
					$ESTADO=$_POST["Estado"];

					
					// creación de la conexión a la base de datos con mysql_connect()
					$conexion = mysqli_connect( $servidor, $usuario,$password);
					
					// Selección del a base de datos a utilizar
					$db = mysqli_select_db( $conexion, $basededatos );

				// establecer y realizar consulta. guardamos en variable.
					$campos1 = "INSERT  INTO usuario (nombre, apellido, nickname,estado_id) VALUES ('$NOMBRE' ,'$APELLIDO' ,'$NICKNAME', $ESTADO) ";
					
					$resultado1 = mysqli_query( $conexion, $campos1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
					if($resultado1)
					{	
						echo("____________________________________________");echo "<br>";
					    echo("Datos Ingresados");echo "<br>";
					    echo("____________________________________________");echo "<br>";echo "<br>";
					    
					    //$campos = "SELECT MAX(u.id_usuario) AS ID, u.nombre, u.apellido, u.nickname,u.clave, e.nombre AS `Descripción del Estado` ";
						//$tablas = "FROM usuario u, estado e ";
						//$condicion = "WHERE u.estado_id = e.id_estado AND u.id_usuario = 58 ";
						$query = "SELECT * FROM usuario ORDER by id_usuario DESC LIMIT 1";//$campos//.$tablas//.$condicion;
						$resultado = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
						
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






