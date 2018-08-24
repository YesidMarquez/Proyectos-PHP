<?php
    require '../../config/conexion.php';
    
    $id = $_GET['cedula_usuario'];
    $sql = "SELECT * FROM usuarios where cedula_usuario=$id";
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
<body>
	<div class="container shadow-lg p-3 mb-5 bg-white rounded">
		<div class="row">
			<div class="col">
            	<h3 style="text-align:center">INGRESO DE VENTAS CONFRONTA</h3>
            </div>	
        </div><br><br>
        <form class="needs-validation" method="POST" action="insert.php" novalidate>
 	        <div class="container ">
			    <div class="row">
			    	<div class="col ">
			    		
						<div class="form-row">
						    <div class="col-md-8 mb-3">
						    	<label for="validationCustom01">Cedula Agente</label>
						        <input type="text" class="form-control" id="id_empleado" placeholder="First name" value="<?php echo $id; ?>" name="id_empleado" readonly="readonly">
						        <div class="valid-feedback">
						       
						      	</div>
						    </div>
						</div>    
						<div class="form-row">
						    <div class="col-md-8 mb-3">
						      	<label for="validationCustomUsername">Nombres Agente</label>
						      	<div class="input-group">
						        	<input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" value="<?php echo $row['nombres']; ?>"disabled>
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
			                        <option value="DIGITAL">UNE DIGITAL</option>
			                        <option value="PREMIUM">UNE PREMIUM</option>
			                        <option value="UNE HOGARES">UNE HOGARES</option>
			                        <option value="UNE HOGARES INBOUND">UNE HOGARES INBOUND</option>
			                        <option value="RECUPERACION">UNE RECUPERACION</option>
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
			    	<div class="col">
			    		<div class="custom-file">
			    			<input enctype="multipart/form-data" type="file" class="custom-file-input" id="validatedCustomFile"  action="<?php echo $_SERVER["PHP_SELF"]?>" name="userfile" required>
			    			<label class="custom-file-label" for="validatedCustomFile"></label>
						</div>
			    	</div>
			  	</div>
			</div>
			<a  href="../mod_consul/ventaxagente.php?cedula_usuario=<?php echo $id; ?>" class="btn btn-primary">ATRAS</a>
	     	<button class="btn btn-primary" type="submit">GUARDAR</button>
		</form>
        	
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
	
	</script>
	