<nav class="black"> 
	<a href="" data-activates="menu" class="button-collpase"><i class="material-icons">menu</i></a>
</nav>

<ul id="menu" class="side-nav fixed"> 
	<li>
		<div class="userView">
			<div class="background">
				<img src="https://i.ytimg.com/vi/FuHcna7q15U/maxresdefault.jpg">
			</div> 
			<a href="../perfil/index.php" ><img src="../usuarios/<?php echo $_SESSION['foto'] ?>" class="circle" alt=""></a>
			<!--aqui actualizamos los datos del usuario admin -->
			<a href="../perfil/perfil.php" class="white-text"><?php echo $_SESSION['nombre'] ?></a>  <!--aqui nos traemos los datos de la bd del usuario -->
			<a href="" class="white-text"><?php echo $_SESSION['correo'] ?></a>
		</div>
	</li>
	<li><a href="../inicio"><i class="material-icons">home</i>Inicio</a></li>	
	<li><div class="divider"></div></li>

	<!--aqui el administrador administra los usuarios -->
	<li><a href="../usuarios"><i class="material-icons">contacts</i>Usuarios</a></li>	
	<li><div class="divider"></div></li>
	<li><a href="../clientes"><i class="material-icons">contact_phone</i>CLIENTES</a></li>	
	<li><div class="divider"></div></li>
	<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">work</i>Propiedades<i class="material-icons right">arrow_drop_down</i></a></li>
	 <li><div class="divider"></div></li>
	 <!--sec10.1 administrar slider -->
	 <li><a href="../inicio/slider.php"><i class="material-icons">web</i>SLIDER</a></li>	
	<li><div class="divider"></div></li>
	 
	<li><a href="../login/salir.php"><i class="material-icons">power_settings_new</i>Salir</a></li>	
	<li><div class="divider"></div></li>
	
</ul>

<ul id="dropdown1" class="dropdown-content">
  <!--<li><a href="../propiedades/index.php">one</a></li> -->
  <li><a href="../propiedades/index.php">GENERAL</a></li>
  <li><a href="../propiedades/index.php?ope=VENTA">Venta</a></li>
  <li><a href="../propiedades/index.php?ope=RENTA">RENTA</a></li>
  <li><a href="../propiedades/index.php?ope=TRASPASO">TRASPASO</a></li>
  <li><a href="../propiedades/index.php?ope=OCUPADO">OCUPADO</a></li>
  <li><a href="../propiedades/cancelados.php">CANCELADOS</a></li>  
</ul>




