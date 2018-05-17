<!--En este archivo se actualizan los datos de perfil-->
<?php include '../extend/header.php'; ?> 

<div class="row">
	<div class="col s12">
		<!--codigo de materialize-> components-> cards  -->
		<div class="card">
    <div class="card-content">
     <h1>Editar perfil</h1>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#datos" class="active">Datos</a></li>
        <li class="tab"><a href="#pass">Contraseña</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="datos">
      	<!-- ins_usuarios es una instancia que se agrega para identificarlo mas rapido y enctype="multipart/form-data es para enviar una foto del usuario-->
				<form class="form" action="up_perfil.php" method="post" enctype="multipart/form-data" autocomplete="off">
				

					<!-- para el nombre de usuario -->
					<div class="input-field">
						<input type="text" name="nombre" title="Nombre de usuario" id="nombre" onblur="may(this.value, this.id)" required pattern="[A-Z/s ]+" value="<?php echo $_SESSION['nombre'] ?>"> <!-- el value es para mostrar los datos del usuario en los campos -->
						<label for="nombre">Nombre completo del usuario</label>
					</div>

					<!-- para el correo de usuario -->
					<div class="input-field">
						<input type="email" name="correo" title="Correo electronico" value="<?php echo $_SESSION['correo'] ?> " >
						<label for="correo">Correo electronico</label>
					</div>

					
<button type="submit" class="btn black" >Editar<i class="material-icons">send</i> </button>
		</form> 
      </div>


      <div id="pass">
      	<!-- ins_usuarios es una instancia que se agrega para identificarlo mas rapido y enctype="multipart/form-data es para enviar una foto del usuario-->
		<form class="form" action="up_pass.php" method="post" enctype="multipart/form-data" autocomplete="off">
			<!-- para validar si el usuario existe en la bd -->			
			<div class="input-field">
				<input type="password" name="pass1" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pass1" required>
				<label for="pass1">Contraseña</label>
			</div>

			<!-- para verificar contraseña -->
			<div class="input-field">
				<input type="password" title="CONTRASEÑA CON NUMEROS, LETRAS MAYUSCULAS Y MINUSCULAS ENTRE 8 Y 15 CARACTERES" pattern="[A-Za-z0-9]{8,15}" id="pass2" required>
				<label for="pass2">Verificar contraseña</label>
			</div>
<button type="submit" class="btn black" id="btn_guardar">Editar<i class="material-icons">send</i></button>			
      </form>     
    </div>
  </div>
 </div>
	</div>
</div>

<?php include '../extend/scripts.php'; ?>
<script src="../js/validacion.js"></script> <!--aqui es para que desaparesca el boton de guardar cuando esta en el campo de contraseña -->
</body>
</html>