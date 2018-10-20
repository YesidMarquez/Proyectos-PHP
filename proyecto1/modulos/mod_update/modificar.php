<?php
    require '../config/conexion.php';
    session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../index.php'; </script>";
    }
    
    $id = $_GET['id_empleado'];
    
    $sql = "SELECT * FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    /*-----------------------------------------------------------------------*/
    $sql1 = "SELECT concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres FROM empleado WHERE id_empleado='$id' ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
     /*-----------------------------------------------------------------------*/
    $sql2 = "SELECT cu.descripcion,cc.nro_curso,cc.fecha_vencimiento FROM control_cursos cc, cursos cu  WHERE cc.empleado_id='$id' and cc.curso_id=cu.id_cursos ";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    /*------------------------------------------------------------------------*/
    $sql6 = "SELECT * FROM `imagenes_credencial` WHERE id_imagen= '$id'";
    $res2 = $mysqli->query($sql6);
    while($filas=mysqli_fetch_array($res2)){
        $ruta2=$filas['ruta'];
        $desc2=$filas['id_imagen'];
    }
    
    
?>
<html lang="es">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
        <link rel="icon" type="image/x-icon" href="../imagenes/logos/favicon.ico" />

        
    </head>
    
    <body><font face="Comic Sans MS,verdana">
        <div class="col-sm-5">
             <table class="table table-striped" border="3" style="background-color:#e6f9ff; font-size:10%">
                <thead>
                    <tr style="background-color:#cccccc" >
                        <th><center><img src="../<?php echo $ruta2; ?>" width="600" height="600"><br></th>
            </thead>
        </div>
        <div class="container">
            <div class="row">
                <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="../tip_cons/actualizar.php" autocomplete="off">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Identificacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['empleado_id']; ?>" required readonly="readonly">
                    </div>
                       <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['apellidos']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['nombres']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nivel curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['descripcion']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">NRO Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['nro_curso']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Vencimiento Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['fecha_vencimiento']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Fecha de Acreditacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['fecha_acreditacion']; ?>" required>
                    </div>
                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo $row['empleado_id']; ?>" />
                             
                
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