
<?php include '../extend/header.php'; 
#para bloquear usuarios
include '../extend/permiso.php';

?>

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Alta de usuarios</span>
				<!-- ins_usuarios es una instancia que se agrega para identificarlo mas rapido y enctype="multipart/form-data es para enviar una foto del usuario-->
				<form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data" autocomplete="off">
					<div class="input-field">
				<!-- onblur="may(this.value, this.id"> es para dejar enviar todos los datos del formulario en mayusculas -->
						<input type="text" name="nick" required autofocus title="DEBE DE TENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value, this.id)">
						<label for="nick">Nick</label>
					</div>

					<!-- para validar si el usuario existe en la bd -->
					<div class="validacion"></div>

					<!-- para ingresar contraseña -->
					<div class="input-field">
						<input type="password" name="pass1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pass1" required>
						<label for="pass1">Contraseña</label>
					</div>

					<!-- para verificar contraseña -->
					<div class="input-field">
						<input type="password" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pass2" required>
						<label for="pass2">Verificar contraseña</label>
					</div>

					<!-- para el nivel del usuario -->
					<select name="nivel" required>
						<option value="" disabled selected>ELIGE UN NIVEL DE USUARIO</option>
						<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						<option value="ASESOR">ASESOR</option>
					</select>

					<!-- para el nombre de usuario -->
					<div class="input-field">
						<input type="text" name="nombre" title="Nombre de usuario" id="nombre" onblur="may(this.value, this.id)" required pattern="[A-Z/s ]+">
						<label for="nombre">Nombre completo del usuario</label>
					</div>

					<!-- para el correo de usuario -->
					<div class="input-field">
						<input type="email" name="correo" title="Correo electronico" id="correo" >
						<label for="corre">Correo electronico</label>
					</div>

					<!-- para la foto del usuario-->
					<div class="file-field input-field">
						<div class="btn">  
							<span>Foto</span>
							<input type="file" name="foto" >
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
						
					</div>
<button type="submit" class="btn black" id="btn_guardar">Guardar<i class="material-icons">send</i> </button>
				</form> 
			</div>
		</div>
	</div>
</div>


<!--barra de busqueda para filtrar los usuarios  -->
<div class="row">
	<div class="col s12">
		<nav class="brown lighten-3">
			<div class="nav-wrapper">
				<div class="input-field">
					<input type="search" id="buscar" autocomplete="off">
					<label for="buscar"><i class="material-icons">search</i></label>
					<i class="material-icons">close</i>
				</div>
			</div>
		</nav>
	</div>
</div>

<!-- mostrar los datos del formulario en el navegador -->
<?php $sel = $con->query("SELECT * FROM usuario"); 
$row = mysqli_num_rows($sel);
?>
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Usuario (<?php echo $row ?>)</span> <!-- para mostrar cuantos usuarios hay -->
				<table>
					<head>
						<tr class="cabecera"> <!--para que no me filtre las tr y me muestre las cabeceras -->
						<th>Nick</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Nivel</th>
						<th></th>
						<th>Foto</th>
						<th>Bloqueo</th>
						<th>Eliminar</th>
						</tr>
					</head>
					<!-- para recorrer las filas -->
					<?php while ($f = $sel->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $f['nick'] ?></td>
							<td><?php echo $f['nombre'] ?></td>
							<td><?php echo $f['correo'] ?></td>
							<td>

								<!--este es para cambiar de usuario -->
								<form action="up_nivel.php" method="post">
									<input type="hidden" name="id" value="<?php echo $f['id'] ?>"><!-- hidden es un input invisible -->
										<select name="nivel" required>
											<option value="<?php echo $f['nivel'] ?>" ><?php echo $f['nivel'] ?></option>
											<option value="ADMINISTRADOR">ADMINISTRADOR</option>
											<option value="ASESOR">ASESOR</option>
										</select>
										
							</td>
							<td>
								<!--boton para cambiar de usuario -->
								<button type="submit" class="btn-floating"><i class="material-icons">repeat</i></button>
								</form>
							</td>
							<td><img src="<?php echo $f['foto'] ?>" width="50" class="circle"></td>
							<!--para bloquear los usuarios -->
							<td>
							<!-- para poner icono para bloquear-->

							<?php if ($f['bloqueo'] == 1): ?> 
								<a href="bloqueo_manual.php?us=<?php echo $f['id'] ?>&bl=<?php echo $f['bloqueo'] ?>"><i class="material-icons green-text">lock_open</i></a>
							<?php else: ?>
								<a href="bloqueo_manual.php?us=<?php echo $f['id'] ?>&bl=<?php echo $f['bloqueo'] ?>"><i class="material-icons red-text">lock_outline</i></a>
							<?php endif; ?>
							</td>
							<td>
								<a href="#" class="btn-floating red" onclick="swal({title: 'Esta seguro que desea minar el usuario?', text: 'Al eliminarlo no podra recuperarlo', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, eliminarlo!' }).then(function () {
								    location.href='eliminar_usuario.php?id=<?php echo $f['id'] ?>'; })"><i class="material-icons">clear</i></a>
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include '../extend/scripts.php'; ?>
<!-- hacemos llamado a los javascripts-->
	<script src="../js/validacion.js"></script>

	

</body>
</html>
