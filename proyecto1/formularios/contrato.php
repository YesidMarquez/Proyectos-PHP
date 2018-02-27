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
    $sql = "SELECT id_empleado,concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, estado_id FROM empleado $where";
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
            <h3 style="text-align:center">INGRESO DE CONTRATOS</h3>
        </div>
        <div class="row">
           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </div>
            </form>

            <?php if($row['estado_id']=="1"){ ?>
                <div class="form-group">
                    <input type="submit" id="enviar" name="enviar" value="ACTIVO" class="btn btn-success" />
                </div>
                
            <?php } else { ?>
                <div class="form-group">
                    <input type="submit" id="enviar" name="enviar" value="RETIRADO" class="btn btn-danger" />
                </div>

            <?php } ?>
           


           
            
        </div>
                    
        <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_contrato.php">
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
                <label class="col-sm-2 control-label">Fecha Ingreso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="in" name="in" placeholder="Fecha Ingreso" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Vencimiento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="out" name="out" placeholder="Fecha Vencimiento" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">prorrogas</label>
                <div class="col-sm-10">
                    <select class="form-control" id="prorroga" name="prorroga">
                        <option value="2">2 DE 6 MESES</option>
                        <option value="4">4 DE 4 MESES</option>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tipo Contrato</label>
                <div class="col-sm-10">
                    <select class="form-control" id="t_contr" name="t_contr">
                        <option value="1">ANTIGUA CONTRATACION OPERATIVOS (Q)</option>
                        <option value="20">CONTRATACION NIVELADOS OPERATIVOS (Q)</option>
                        <option value="22">CONTRATACION NIVELADOS OPERATIVOS (M)</option>
                        <option value="40">NUEVA CONTRATACION OPERATIVOS (Q)</option>
                        <option value="42">NUEVA CONTRATACION OPERATIVOS (M)</option>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Cargo</label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control" id="cargo" name="cargo" >
                            <option value="1000">VIGILANTE</option>
                            <option value="1049">SUPERVISOR MOTORIZADO</option>
                            <option value="0"></option>
                        </select>
                       
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
