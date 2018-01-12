<?php
    require '../conexion.php';
    
    $id = $_GET['id_empleado'];
    
    $sql = "SELECT * FROM acreditacion WHERE empleado_id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
?>
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
                <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="../tip_cons/actualizar.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Fecha de Acreditacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['fecha_acreditacion']; ?>" required>
                    </div>
                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo $row['id_empleado']; ?>" />
                             
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="../tip_cons/acreditaciones.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>