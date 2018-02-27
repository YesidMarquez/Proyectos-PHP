<?php
    require '../config/conexion.php';
    
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


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <script src="../js//jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    <!--<link href="../css/style.css" rel="stylesheet">-->
    
</head>
<body><font face="Comic Sans MS,verdana">
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">INGRESO DE ACREDIATCION Y RADICADOS SVSP</h3>
        </div>
        <div class="row">
           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </div>
            </form>
        </div>
                    
        <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_acreditacion.php">
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="fecha" value="<?php echo $row['id_empleado']; ?>" required readonly="readonly">
                </div>
            </div>
            
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                    
                    <input type="text" class="form-control"  value="<?php echo $row['apellidos']; ?>" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Estado Acreditacion</label>
                <div class="col-sm-10">
                    <select class="form-control" id="estado_a" name="estado_a">
                        <option value="ACREDITADO">ACREDITADO</option>
                        <option value="EN PROCESO">EN PROCESO</option>
                        <option value="0"></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Acreditacion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="f_acredi" name="f_acredi" placeholder="Fecha Acreditacion" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Estado Radicado</label>
                <div class="col-sm-10">
                    <select class="form-control" id="estado_r" name="estado_r">
                        <option value="ACREDITADO">RADICADO</option>
                        <option value="0"></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Radicado</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="f_radicado" name="f_radicado" placeholder="Fecha Radicado" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Numero Radicado</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="n_radicado" name="n_radicado" placeholder="Numero Radicado" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="menu_ingresos.php" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>
<head>
        