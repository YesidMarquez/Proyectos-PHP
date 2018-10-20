<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login | 2.0</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="imagenes/logos/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Coiny');
    </style>
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center"><img src="imagenes/logos/logo.png" width="180" height="150"></h1>
          <center><h3 id="textH">Gestion de Empleados</h3></center>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="modulos/mod_config/validar.php" method="post" id="frm_ingreso">
            <div class="form-group">
              <input name="User" id="User" type="text" class="form-control input-lg" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <input type="password" name="Password" id="Password" class="form-control input-lg" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info btn-lg btn-block" id="textB">Ingresar</button>
              
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12"><center>
            <div class="row justify-content-md-center">
                <div class="footer-copyright  py-3" style="font-family: 'IM Fell English SC', serif;">© 2018 Copyright:<a><img src="imagenes/logos/logo.png" width="50" height="30"></a>
                  <p>Yesid Leandro Marquez P.</p>
                </div>
            </div>
		      </div></center>	
      </div>
  </div>
  </div>
</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>