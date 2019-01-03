<?php
require("../mod_config/conexion.php");
//Iniciar Sesión
session_start();
   
//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "../../index.html"
    </script>';
    }       
 
$usuario=$_SESSION['cedula'];
$nivel=$_SESSION['id_cargo'];
$sql = "SELECT * FROM usuarios where cedula_usuario=$usuario";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de Ventas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../../imagenes/logos/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body style="background: rgba(24, 42, 121,0.3);"><br>
	
	<div class="container shadow-lg p-3 mb-5 bg-white rounded" style="background-color: blue;">
		<div class="row">
			<div class="col-4">
            	<marquee scrollamount="5"><img  class="" src="../../imagenes/logos/logo2.png" title="Personal" width="65" height="35"></img><img  class="" src="../../imagenes/logos/tigoune.png" title="Personal" width="65" height="40"></img></marquee>
            </div>
			<div class="col-5">
            	<span class="border border badge badge-dark badge-pill"><CENTER><marquee><h3 style="text-align:center">INGRESO DE VENTAS</h3></marquee></CENTER></span>
            </div>
            <div class="col-4">

            	
            </div>	
        </div><br>
        <form class="needs-validation" method="POST" action="insert.php" novalidate enctype="multipart/form-data" >
 	        <div class="container-fluid " >
			    <div class="row">
			    	<div class="col ">
						<div class="form-row">
						    <div class="col-md-8 mb-3">
						    	<label for="validationCustom01">Cedula Agente</label>
						        <input type="text" class="form-control" id="id_empleado" placeholder="First name" value="<?php echo $usuario; ?>" name="id_empleado" readonly="readonly">
						        <div class="valid-feedback">
						       
						      	</div>
						    </div>
						</div>    
						<div class="form-row">
						    <div class="col-md-8 mb-3">
						      	<label for="validationCustomUsername">Nombres Agente</label>
						      	<div class="input-group">
						        	<input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" value="<?php echo $row['nombres']." ".$row['apellidos']; ?>"disabled>
						     	</div>
						    </div>
						</div>
					  	<div class="form-row">
					    	<div class="col-md-8 mb-3">
					      		<label for="validationCustom03">Cedula Cliente</label>
					      		<input type="text" class="form-control" id="validationCustom03" name="id_cliente" required>
					      		<div class="invalid-feedback">
					        	Por favor, ingrese un numero de cedula válido..
					      		</div>
					    	</div>
					    </div>
					    <div class="form-row">
					    	<div class="col-md-8 mb-3">
					      		<label for="validationCustom03">Campaña</label>
					      		<select class="form-control" id="validationCustom03" name="campaña" required>
					      			<option value=""></option>
			                        <option value="PREPOST">PREPOST</option>
			                        <option value="UPGRADE">UPGRADE</option>
			                        <option value="SAMEGRADE">SAMEGRADE</option>
			                        <option value="DOWNGRADE">DOWNGRADE</option>
			                        <option value="PORTBACK">PORTBACK</option>
			                    </select>
					      		<div class="invalid-feedback">
					        	Por favor, relacione una campaña..
					      		</div>
					    	</div>
					    </div>	
					    <div class="form-row">
					    	<div class="col-md-8 mb-3">
					      		<label for="validationCustom03">Id Llamada</label>
					      		<input type="text" class="form-control" id="validationCustom03"  name="id_llamada" required>
					      		<div class="invalid-feedback">
					        	Por favor, ingrese el id de la llamada..
					      		</div>
					    	</div>
					    </div>
					    <div class="form-row">
					    	<div class="col-md-8 mb-3">
					    		<input type="text" class="form-control" id="validationCustom03" placeholder="City" name="token" value="<?php echo $token = rand(); ?>" style="display:none">
					       	</div>
					    </div>
			    	</div>
			    	<div class="col-md-8">
			    		<div class="custom-file">
							<input type="file" name="imagen" class="custom-file-input"" required="" id="imagen" ">
							<label class="custom-file-label" for="customFileLang" id="imagen">Cargar Imagen</label>
							<div class="invalid-feedback">
					        	Por favor, ingrese Una imagen..
					      	</div>
						</div>
			    		<div class="custom-file" class="btn btn-primary"><br>
							<h6>Vista Previa de la imagen</h6>
							<img id="img_destino" src="" alt="Imagen" width="735" height="410"/> 				
						</div>
			    	</div>
			  	</div>
			</div>
			<a  href="../mod_consul/ventaxagente.php" class="btn btn-primary" >ATRAS</a>
	     	<button> <img src="../../imagenes/iconos/guardar.png" width="50" height="50"></button>
        	
		</div>				
	</div>
	
	<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Fetch all the forms we want to apply custom Bootstrap validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();

	function mostrarImagen(input) {
	 if (input.files && input.files[0]) {
	  var reader = new FileReader();
	  reader.onload = function (e) {
	   $('#img_destino').attr('src', e.target.result);
	  }
	  reader.readAsDataURL(input.files[0]);
	 }
	}
	 
	$("#imagen").change(function(){
	 mostrarImagen(this);
	});
	
	</script>
	