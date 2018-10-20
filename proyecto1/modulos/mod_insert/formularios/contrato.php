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
    $sql = "SELECT id_empleado,concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, estado_id FROM empleado $where";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contrato | 2.0</title>
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
          <a class="nav-link" href="#"><img  class="menu" src="../../../imagenes/iconos/contrato.png" title="Personal"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acreditacion.php"><img class="menu1" src="../../../imagenes/iconos/acreditacion.png" title="Acreditaciones"></img></a>
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
        <h3 style="text-align:center">INGRESO DE CONTRATOS</h3>
       
            <div class="row">
                <div class="col-sm-3">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="input-group">                    
                            <input type="text" id="campo" name="campo" />
                            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                             <?php if($row['estado_id']=="1"){ ?>
                                <input value="ACTIVO" class="btn btn-success" disabled="" />
                            <?php } else { ?>
                                <input value="RETIRADO" class="btn btn-danger" disabled="" />
                            <?php } ?>
                           
                        </div>
                    </form>    
                </div>
            </div>        
        
        <div class="container">
        <form class="form-horizontal" method="POST"  action="../inserciones/insertar_contrato.php"> 
            <div class="row">
                <div class="col">
                    <label for="nombre" class="control-label">Cedula</label>
                    <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="fecha" value="<?php echo $row['id_empleado']; ?>" required readonly="readonly">

                    <label for="nombre" class="control-label">Apellidos</label>
                    <input type="text" class="form-control"  value="<?php echo $row['apellidos']; ?>" readonly="readonly">

                    <label for="nombre" class="control-label">Nombres</label>
                    <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">

                    <label class="control-label">Fecha Ingreso</label>
                    <input type="date" class="form-control" id="in" name="in" placeholder="Fecha Ingreso" required>
                
                </div>
                <div class="col">
                    <label class="control-label">Fecha Vencimiento</label>
                    <input type="date" class="form-control" id="out" name="out" placeholder="Fecha Vencimiento" required>

                    <label class="control-label">prorrogas</label>
                    <select class="form-control" id="prorroga" name="prorroga">
                        <option value="2">2 DE 6 MESES</option>
                        <option value="4">4 DE 4 MESES</option>
                    </select>

                    <label class="control-label">Tipo Contrato</label>
                    <select class="form-control" id="t_contr" name="t_contr">
                        <option value="1">ANTIGUA CONTRATACION OPERATIVOS (Q)</option>
                        <option value="20">CONTRATACION NIVELADOS OPERATIVOS (Q)</option>
                        <option value="22">CONTRATACION NIVELADOS OPERATIVOS (M)</option>
                        <option value="40">NUEVA CONTRATACION OPERATIVOS (Q)</option>
                        <option value="42">NUEVA CONTRATACION OPERATIVOS (M)</option>
                    </select>

                    <label for="nombre" class="control-label">Cargo</label>
                    <select type="text" class="form-control" id="cargo" name="cargo" >
                        <option value="0"></option>
                        <option value="1000">VIGILANTE</option>
                        <option value="1409">SUPERVISOR DE ZONA (MOTORIZADO)</option>
                        <option value="1802">DIRECTOR DE SUCURSAL</option>
                        <option value="1020">AGENTE DE CONTROL MEDIO TIEMPO</option>
                        <option value="1014">AUXILIAR DE TECNOLOGÍA</option>
                        <option value="1003">MANEJADOR CANINO</option>
                        <option value="1400">SUPERVISOR</option>
                        <option value="1070">AGENTE DE CONTROL</option>
                        <option value="1040">AUXILIAR  DE SERVICIOS GRALES</option>
                        <option value="1015">AUXILIAR ADMINISTRATIVO</option>
                        <option value="1454">LIDER DE CONTROL</option>
                        <option value="1401">COORDINADOR DE OPERACIONES</option>
                        <option value="1051">VIGILANTE</option>
                        <option value="1404">COORDINADOR ADMINISTRATIVO</option>
                        <option value="1437">ANALISTA ADMINISTRATIVO</option>
                        <option value="1019">AGENTE DE CONTROL TIEMPO COMPLETO</option>
                    </select>

                </div>
            </div>
            </div><br><br>    
            <div class="container">
                <div class="row justify-content-md-center">
                    <a href="../../../menu.php" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>            
            </div>
        </form><br>
</body>
</html>
<head>