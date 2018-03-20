<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Con esta funcion estoy omitiendo este error: Notice: Undefined variable: valor in C:\xampp\htdocs\Proyectos-PHP XAMPP\proyecto_1\tip_cons\planta.php on line 15*/
    require '../config/conexion.php';
   
    
    if(!empty($_POST))
    {  
        $valor = $_POST['campo'];
        if(!empty($valor)){
            $where = "WHERE '";
        }
    }
  

    $where = "WHERE ubicacion.empleado_id=empleado.id_empleado AND  control_cursos.empleado_id=empleado.id_empleado and contrato.empleado_id=empleado.id_empleado and ubicacion.cliente_id=cliente.id_cliente and  ubicacion.puesto_id= puesto.id_puesto and id_empleado LIKE '%$valor'";
    /*empleado.estado_id=estado.id_estado ";*/
    $sql = "SELECT empleado.id_empleado,concat(empleado.apellido_1,' ',empleado.apellido_2) as apellidos,concat(empleado.nombre_1,' ',empleado.nombre_2) as nombres,empleado.direccion, puesto.nombre_puesto,cliente.nombre_cliente, ubicacion.modalidad_id,control_cursos.nro_curso,control_cursos.fecha_vencimiento, contrato.fecha_ingreso,contrato.fecha_vencimiento FROM ubicacion,puesto,empleado,control_cursos, contrato,cliente $where";//

   /* SELECT empleado.id_empleado,concat(empleado.apellido_1,' ',empleado.apellido_2) as apellidos,concat(empleado.nombre_1,' ',empleado.nombre_2) as nombres,empleado.direccion, puesto.nombre_puesto,cliente.nombre_cliente, ubicacion.modalidad_id,control_cursos.nro_curso,control_cursos.fecha_vencimiento, contrato.fecha_ingreso,contrato.fecha_vencimiento,estado.descripcion FROM ubicacion,puesto,empleado,control_cursos, contrato,cliente,estado WHERE ubicacion.empleado_id=empleado.id_empleado AND control_cursos.empleado_id=empleado.id_empleado and contrato.empleado_id=empleado.id_empleado and ubicacion.cliente_id=cliente.id_cliente and empleado.estado_id=estado.id_estado and estado.id_estado=1 and ubicacion.puesto_id= puesto.id_puesto and id_empleado LIKE '1088248409'*/
    $resultado = $mysqli->query($sql);

    $sql1 = "SELECT  count(*) as conteo FROM `empleado` WHERE estado_id= 1";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);

    $sql2 = "SELECT  count(*) as conteo FROM `empleado` WHERE estado_id= 2";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    
?>

<htm lang="es">
    <head>
        <link rel="stylesheet"  href="../css/bootstrap-theme.css">
        <link rel="stylesheet"  href="../css/bootstrap.min.css">
        <script src="../js/jquery-3.3.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <title>Planta</title>
    </head>

    
    <body><font face="Comic Sans MS,verdana">

        <div class="container" >
            <div class="row">
                <h2 style="text-align:center">Datos del Personal</h2>
            </div>
            <div class="row">
                
                <div align="right" >
                    <div class="col-sm-offset-2 col-sm-10" >
                        <input type="text" id="" name="" value="PERSONAL ACTIVOS" class="btn btn-primary" readonly="readonly" />
                        <input type="text" id="" name="" value="PERSONAL INACTIVOS" class="btn btn-primary" readonly="readonly" />
                    </div>
                </div>
                <div align="right" >
                    <div class="col-sm-offset-2 col-sm-10" >
                        <input type="text" id="" name="" value="<?php echo $row1['conteo']; ?>" class="btn btn-success" readonly="readonly" />
                        <input type="text" id="" name="" value="<?php echo $row2['conteo']; ?>" class="btn btn-danger" readonly="readonly" />
                    </div>
                </div>
               
                
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" value="" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </form>
            </div>
            
            <br>
            </FORM>
                <form ACTION="../menu.php">
                <INPUT TYPE="submit" VALUE="Retornar al menu" class="btn btn-primary"><br></form>
            <div class="row table-responsive">
                <table class="table table-striped" border="3" style="background-color:#e6f9ff; font-size:100%"><br>
                    <thead>
                        <tr style="background-color:#cccccc" >
                            <th><center>Cedula</th>
                            <th><center>Apellidos</th>
                            <th><center>Nombres</th>
                            <th><center>Puesto</th>
                            <th><center>Cliente</th>
                            <th WIDTH="100"><center>Ingreso</th>
                            <th WIDTH="100"><center>Vencimiento</th>
                            
                            <th><center>Ver</th>
                        </tr>
                    </thead>
                    <!--cuerpo de la tabla-->
                    <tbody>
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><center><?php echo $row['id_empleado']; ?></td>
                                <td><center><?php echo $row['apellidos']; ?></td>
                                <td><center><?php echo $row['nombres']; ?></td>
                                <td><center><?php echo $row['nombre_puesto']; ?>
                                <td><center><?php echo $row['nombre_cliente']; ?></td>
                                <td><center><?php echo $row['fecha_ingreso']; ?></td>
                                <td><center><?php echo $row['fecha_vencimiento']; ?></td>
                                
                                                   
                                <td><center><a href="../tip_cons/ver.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></td></a></td>
                                <!--<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>-->
                            </tr>
                        <?php } ?>
                    </tbody>
                    
                
                   
                </table>

            </div>
            
            

    </body>
</html>

