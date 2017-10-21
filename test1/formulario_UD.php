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
			  	<FORM ACTION="conectar_bd_update.php" METHOD="POST">

				Ingrese el Id_Usuario: <INPUT TYPE="text" NAME="id_usuario"><br><br>	
				Ingrese el Nombre:     <INPUT TYPE="text" NAME="Nombre"><br><br>
				Ingrese el Apellido:   <INPUT TYPE="text" NAME="Apellido"><br><br>
				Ingrese el Nickname:   <INPUT TYPE="text" NAME="Nickname"><br><br>
				Ingrese el Estado:     <INPUT TYPE="text" NAME="Estado"><br><br>
				<INPUT TYPE="submit" VALUE="Actualizar"><br><br>
				</FORM>
				<form ACTION="menu.html">
				<INPUT TYPE="submit" VALUE="Retornar al menu"><br><br></form>

				<?php


				echo "<br>";
				echo "<th>*****************************INFORMACION DE LA BASE DE DATOS*****************************<th>";
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
					

					$campos = "SELECT id_usuario, nombre, apellido, nickname, clave FROM usuario ";
					$tablas = " ";
					
					$query = $campos.$tablas;
					$resultado = mysqli_query( $conexion, $campos ) or die ( "Consulta no retirno nigun dato");
					
					// Motrar el resultado de los registro de la base de datos
					// Encabezado de la tabla
					echo "<table width='10%' borde='50' >";
					echo "<tr>";

					echo "<th>Id_Usuario</th>";
					echo "</td> <td>";
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
						echo "<td>" .$columna['id_usuario'] ."</td> <td>". "</td> <td>". $columna['nombre'] . "</td> <td>"."</td> <td>" . $columna['apellido']. "</td> <td>" ."</td><td>". $columna['nickname']. "</td> <td>". "</td><td>" .$columna['clave'] . "</td> <td>" ."</td><td>" ."</td><td>"."</td>";
						echo "</tr>";
					}
					
					echo "</table>"; // Fin de la tabla
					// cerrar conexión de base de datos
					mysqli_close( $conexion );
					echo "<br>";
					
					

						
				?>

			
