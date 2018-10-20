<?php
    require '../../mod_config/conexion.php';
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
<!DOCTYPE html>
<html>
<head>
        <title>Acredi | 2.0</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
        <link rel="icon" type="image/x-icon" href="../imagenes/logos/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
        <script type="text/JavaScript">
            function mayus(e) {
                e.value = e.value.toUpperCase();
            }
        </script>            
</head>
<body style="background-color:#F0000;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
     <a class="navbar-brand" href="../../../menu.php" style="font-family: 'Satisfy', cursive;" title="Menu">Mat-Sw</a>
      
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="empleado.php"><img class="menu" src="../../../imagenes/iconos/empleado.png" title="Empleado"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contrato.php""><img  class="menu" src="../../../imagenes/iconos/contrato.png" title="Personal"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img class="menu1" src="../../../imagenes/iconos/acreditacion.png" title="Acreditaciones"></img></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cursos.php"><img class="menu2" src="../../../imagenes/iconos/curso.png" title="Cursos"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="puesto.php"><img class="menu2" src="../../../imagenes/iconos/puesto.png" title="Puesto"></img></a>
        </li>
                  
         <li class="nav-item">
          <a class="nav-link" href="../../../menu.php"><img  class="menu" src="../../../imagenes/iconos/atras.png" title="Retorno Menu"></a>
        </li>
      </ul>
    </nav><br>
    <div class="container">
        <h3 style="text-align:center">INGRESO DE ACREDIATCION Y RADICADOS SVSP</h3><br>
        
        <div class="row">
           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </div>
            </form>
        </div>
        <div class="conatiner">
            <form class="form-horizontal" method="POST"  action="../inserciones/insertar_acreditacion.php">
                <div class="row">
                    <div class="col">
                        <label for="nombre" class="control-label">Cedula</label>
                        <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="fecha" value="<?php echo $row['id_empleado'];?>" required readonly="readonly">

                        <label for="nombre" class="control-label">Apellidos</label>
                        <input type="text" class="form-control"  value="<?php echo $row['apellidos']; ?>" readonly="readonly">

                        <label for="nombre" class="control-label">Nombres</label>
                        <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">

                        <label class="control-label">Estado Acreditacion</label>
                        <select class="form-control" id="estado_a" name="estado_a">
                            <option value="ACREDITADO">ACREDITADO</option>
                            <option value="EN PROCESO">EN PROCESO</option>
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="control-label">Fecha Acreditacion</label>
                        <input type="date" class="form-control" id="f_acredi" name="f_acredi" placeholder="Fecha Acreditacion" required>

                        <label class="control-label">Estado Radicado</label>
                        <select class="form-control" id="estado_r" name="estado_r">
                            <option value="ACREDITADO">RADICADO</option>
                            <option value="0"></option>
                        </select>

                        <label class="control-label">Fecha Radicado</label>
                        <input type="date" class="form-control" id="f_radicado" name="f_radicado" placeholder="Fecha Radicado" required>

                        <label for="nombre" class="control-label">Numero Radicado</label>
                        <input type="text" class="form-control" id="n_radicado" name="n_radicado" placeholder="Numero Radicado" required>    
                    </div>
                </div><br><br>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <a href="../../../menu.php" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>            
                </div>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>
<head>
        