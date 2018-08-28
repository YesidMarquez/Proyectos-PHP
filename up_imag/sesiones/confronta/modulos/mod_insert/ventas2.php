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
    <title>Datos Personales</title>
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
<body><font face="Comic Sans MS,verdana">
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">BUEN DIA <?php echo $row['nombres']; ?><br> BIENVENIDA/O AL INGRESO DE VENTAS CONFRONTA</h3>
        </div>
                        
        <form class="form-horizontal" method="POST"  action="insert.php">
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Cedula Agente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="fecha" value="<?php echo $id; ?>"   readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    
                    <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Cedula Cliente</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="Cedula Cliente" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Campaña</label>
                <div class="col-sm-10">
                    <select class="form-control" id="campaña" name="campaña">
                         <option value="DIGITAL">UNE DIGITAL</option>
                         <option value="PREMIUM">UNE PREMIUM</option>
                         <option value="UNE HOGARES">UNE HOGARES</option>
                         <option value="UNE HOGARES INBOUND">UNE HOGARES INBOUND</option>
                         <option value="RECUPERACION">UNE RECUPERACION</option>

                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Id Llamada</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_llamada" name="id_llamada" required>
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="../mod_consul/ventaxagente.php?cedula_usuario=<?php echo $id; ?>" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
            </div>
        </form>
    </div>
    
</body>
</html>
<head>
        