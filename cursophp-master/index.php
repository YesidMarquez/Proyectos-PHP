<!--seccion 10 1 inicio de sitio web y slider -->
<?php include 'admin/conexion/conexion_web.php';?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="admin/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<title>Sitio web</title>
</head>
<body class="blue-grey lighten-5">
<nav class="red">
	<a href="index.php" class="brand-logo center">Logo</a>
</nav>

<div class="slider">
    <ul class="slides">
    	<?php $sel = $con->prepare("SELECT * FROM slider");
    	$sel->execute();
    	$res = $sel->get_result();
    	while ($f = $res->fetch_assoc()) {?>
      <li>
        <img src="admin/inicio/<?php echo $f['ruta'] ?>" > <!-- random image -->
        <div class="caption center-align">
          <h3>Empresa</h3>
          <h5 class="light grey-text text-lighten-3">Slogan de la empresa</h5>
        </div>
      </li>
      
    <?php }
    $sel->close();
    ?>    
    </ul>
  </div>

  <div class="row">
  <?php 
  $sel_marc = $con->prepare("SELECT foto_principal,precio,estado,municipio, fraccionamiento,propiedad FROM inventario WHERE marcado='SI' ");
  $sel_marc->execute();
  $res_marc = $sel_marc->get_result();
  while ($f_marc = $res_marc->fetch_assoc()) { ?>
  	<div class="col s12 m6 l3">
  		<div class="card">
            <div class="card-image">
              <img src="admin/propiedades/<?php echo $f_marc['foto_principal'] ?>">
              <span class="card-title"><?php echo '$'. number_format($f_marc['precio'], 2); ?></span>
            </div>
            <div class="card-content">
              <p><?php echo $f_marc['fraccionamiento'].' '.$f_marc['estado'].' '.$f_marc['municipio']; ?></p>
            </div>
            <div class="card-action">
              <a href="ver_mas.php?id=<?php echo $f_marc['propiedad'] ?>">Ver mas..</a>
            </div>
          </div>
        </div>

        
        <?php }
        $sel_marc->close();        
        ?>
  		</div>
<!--10.7 buscador de inmuebles -->
 
 <div class="row">
 	<div class="col s12">
 		<div class="card">
 			<div class="card-content">
 				<span class="card-title">Busqueda de inmuebles</span>
 				<form action="buscar.php" method="post">
 					<div class="row">
          <div class="col s6">
            <select id="estado" name="estado" required="">
            <option value="" disabled selected>Selecciona un estado</option>
            <?php $sel_estado = $con->prepare("SELECT * FROM estados ");
            $sel_estado->execute();
            $res_estado = $sel_estado->get_result();
            while ($f_estado = $res_estado->fetch_assoc()) {?>
                <option value="<?php echo $f_estado['idestados'] ?>"><?php echo $f_estado['estado'] ?></option>
                <?php }
                $sel_estado->close();
                ?>
            </select>
          </div>
         
        <div class="col s6">
          <div class="res_estado"></div>
        </div> 
      </div>
      <div class="row">
      	<div class="col s6">
      		<select name="operacion" required  >
              <option value="" disabled selected  >ELIGE LA OPERACION</option>
              <option value="VENTA">VENTA</option>
              <option value="RENTA">RENTA</option>
              <option value="TRASPASO">TRASPASO</option>
              <option value="OCUPADO">OCUPADO</option>
            </select>
      	</div>
      	<div class="col s6">
      		<select name="tipo_inmueble" required >
              <option value="" disabled selected  >ELIGE EL TIPO DE INMUEBLE</option>
              <option value="CASA">CASA</option>
              <option value="TERRENO">TERRENO</option>
              <option value="LOCAL">LOCAL</option>
              <option value="DEPARTAMENTO">DEPARTAMENTO</option>
            </select>
      	</div>
      </div>

      <div class="row">
      	<div class="col s6">
      		<div class="input-field">
      		<input type="number" name="rango1" title="" id="rango1" required>
      		<label for="rango1">Precio minimo</label>
      	</div>
      </div>      
      	<div class="col s6">
      		<div class="input-field">
      		<input type="number" name="rango2" title="" id="rango2" required>
      		<label for="rango2">Precio maximo</label>
      	</div>
      </div>
    </div> 
    <button type="submit" class="btn">Buscar inmueble</button> 
 				</form>
 			</div>
 		</div>
 	</div>
 </div>

 <!--10.13 mapa de ubicacion y formulario de contacto -->
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Contacto</span>
				<div class="row">
					<div class="col s6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127225.52486140061!2d-75.78380210400708!3d4.804770976782279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e388748eb56c1fd%3A0x95b39410f9f1dfbc!2sPereira%2C+Risaralda!5e0!3m2!1ses!2sco!4v1523214011016" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen class="z-depth-4"></iframe>
</div>
	<div class="col s6">
		<div class="input-field">
            <input type="text" name="nombre" pattern="[A-Za-z/s ]+"  title=""  id="nombre" required >
            <label for="nombre">Nombre:</label>
        </div>
        <div class="input-field">
            <input type="text" name="asunto"   title=""  id="asunto"  >
                <label for="asunto">Asunto:</label>
        </div>
        <div class="input-field">
            <input type="email" name="correo"   title=""  id="correo" required  >
            <label for="correo">Correo:</label>
        </div>
        <div class="input-field">
            <textarea name="mensaje" rows="8" cols="80" id="mensaje" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
        	<label for="">Mensaje:</label>                   
        </div>
        <button type="button" class="btn" id="enviar">Enviar</button>
                 <!--10.10 para enviar formulario con metodo ajax -->
        <div class="resultado"></div>
		</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="page-footer red white-text center">
	Copyright 2018 Empresa
</footer>

 
 	<script
	  
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	  <script src="admin/materialize/js/materialize.min.js"></script>
	  <!--para inicializar el slider -->
	  <script>
	  	 $('.slider').slider();
	  	 //para el buscardor
	  	 $('select').material_select();
	  	 /*10 departamentos y municipios */
		$('#estado').change(function(){ 
			$.post('admin/propiedades/ajax_muni.php',{
				estado:$('#estado').val(),

				beforeSend: function(){
					$('.res_estado').html("Espere un momento por favor");
				}

			}, function(respuesta){
				$('.res_estado').html(respuesta);
			});
	});
		//10.13 enviar formulario por metodo ajax
	$('#enviar').click(function(){ 
      $.post('email.php',{
        nombre:$('#nombre').val(),
        asunto:$('#asunto').val(),
        correo:$('#correo').val(),
        mensaje:$('#mensaje').val(),
        id_propiedad:$('#id_propiedad').val(),

        beforeSend: function(){
          $('.resultado').html("Espere un momento por favor");
        }

      }, function(respuesta){
        $('.resultado').html(respuesta);
      });
  });
	  </script>
</body>
</html>
