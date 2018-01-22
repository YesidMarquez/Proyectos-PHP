
<html lang="es">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 

        
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <h3 style="text-align:center">CAMBIO DE CONTRASEÑA</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="../tip_cons/actualizar_pw.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label" >Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" value="" >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Contraseña Actual</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pw" name="pw"  placeholder="Contraseña Actual"  value="" >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nueva Contraseña</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="npw" name="npw"  placeholder="Nueva Contraseña"  value=""  >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Confirmar Contraseña</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cnpw" name="cnpw"  placeholder="Confirmar Contraseña" value="" >
                    </div>
                                  
                </div>
               
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="../menu.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary">Cambiar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>