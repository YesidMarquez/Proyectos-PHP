<?php 
$ipvisitante =$_SERVER["REMOTE_ADDR"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>pr_form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">    
        <div class="row">
			<form method="post" action="insert.php">
			  <div class="form-group">
				<label for="inputAddress"></label>
				<input type="text" class="form-control" id="nombre" name="nombre" 	placeholder="Tu Nombre">
			  </div>
			  <div class="form-group">
				<label for="inputAddress2"></label>
				<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Tu Movil">
			  </div>
			  <div class="form-group">
			  	
				<label for="inputAddress2"></label>
				<input type="text" class="form-control" id="ip" name="ip" value="<?php echo $ipvisitante;?>" style="display:none">
			  </div>
			  
			  
			  <div class="form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="gridCheck">
				  <label class="form-check-label" for="gridCheck">
					Acepto <strong>	*Políticas de protección de datos personales</strong>
				  </label>
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
	</div>
</body>
</html>