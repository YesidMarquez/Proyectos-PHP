
<?php
    require '../config/conexion.php';
    session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../index.php'; </script>";
    }
    
    $where = "";
    
    if(!empty($_POST))
    {
        $valor = $_POST['campo'];
        if(!empty($valor)){
            $where = "WHERE id_empleado ='$valor'";
        }
    }
    $sql = "SELECT id_empleado,concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres FROM empleado $where";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
?>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link rel="icon" type="image/x-icon" href="../imagenes/logos/favicon.ico" />
    </head>
    
    <body>
        
        <div class="container">
            <div class="row">
                <h2 style="text-align:center">Curso de PHP y MySQL</h2>
            </div>
            
            <div class="row">
               <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </form>
            </div>
            
             <form class="form-horizontal" method="POST" action="../tip_cons/actualizar.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Identificacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['id_empleado']; ?>" required readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-10">
                        
                        <input type="text" class="form-control"  value="<?php echo $row['apellidos']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">
                    </div>
                    
                </div>   
            </form>
    </body>
</html>