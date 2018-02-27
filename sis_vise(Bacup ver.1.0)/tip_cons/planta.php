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
  

    $where = "WHERE ubicacion.empleado_id=empleado.id_empleado AND  control_cursos.empleado_id=empleado.id_empleado and contrato.empleado_id=empleado.id_empleado and ubicacion.cliente_id=cliente.id_cliente and empleado.estado_id=estado.id_estado and estado.id_estado=1 and ubicacion.puesto_id= puesto.id_puesto and id_empleado LIKE '%$valor'";
    /*empleado.estado_id=estado.id_estado ";*/
    $sql = "SELECT empleado.id_empleado,concat(empleado.apellido_1,' ',empleado.apellido_2) as apellidos,concat(empleado.nombre_1,' ',empleado.nombre_2) as nombres,empleado.direccion, puesto.nombre_puesto,cliente.nombre_cliente, ubicacion.modalidad_id,control_cursos.nro_curso,control_cursos.fecha_vencimiento, contrato.fecha_ingreso,contrato.fecha_vencimiento,estado.descripcion FROM ubicacion,puesto,empleado,control_cursos, contrato,cliente,estado $where";//

   /* SELECT empleado.id_empleado,concat(empleado.apellido_1,' ',empleado.apellido_2) as apellidos,concat(empleado.nombre_1,' ',empleado.nombre_2) as nombres,empleado.direccion, puesto.nombre_puesto,cliente.nombre_cliente, ubicacion.modalidad_id,control_cursos.nro_curso,control_cursos.fecha_vencimiento, contrato.fecha_ingreso,contrato.fecha_vencimiento,estado.descripcion FROM ubicacion,puesto,empleado,control_cursos, contrato,cliente,estado WHERE ubicacion.empleado_id=empleado.id_empleado AND control_cursos.empleado_id=empleado.id_empleado and contrato.empleado_id=empleado.id_empleado and ubicacion.cliente_id=cliente.id_cliente and empleado.estado_id=estado.id_estado and estado.id_estado=1 and ubicacion.puesto_id= puesto.id_puesto and id_empleado LIKE '1088248409'*/
    $resultado = $mysqli->query($sql);
    
?>

<htm lang="es">
    <head><title>Planta</title>
        <meta name="viewporte" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="../css/bootstrap-theme.css">
        <link rel="stylesheet"  href="../css/bootstrap.min.css">
        <script src="../js/jquery-3.3.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <title>Sis_Vise</title>
        <style type="text/css">
            
            * {
                margin:0px;
                padding:0px;
            }
            
            #header {
                margin:auto;
                width:500px;
                font-family:Arial, Helvetica, sans-serif;
            }
            
            ul, ol {
                list-style:none;
            }
            
            .nav > li {
                float:left;
            }
            
            .nav li a {
                background-color:#000;
                color:#fff;
                text-decoration:none;
                padding:10px 12px;
                display:block;
            }
            .Fields input{
                background-color: #E9E9E9;
                border: 2px solid #A8A8A8;
                font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
                font-size: 10px;
            }

            
            .nav li a:hover {
                background-color:#434343;
            }
            
            .nav li ul {
                display:none;
                position:absolute;
                min-width:140px;
            }
            
            .nav li:hover > ul {
                display:block;
            }
            
            .nav li ul li {
                position:relative;
            }
            
            .nav li ul li ul {
                right:-140px;
                top:0px;
            }
        </style>
    </head>

    
    <body><font face="Comic Sans MS,verdana">

        <div class="container">
            <div class="row">
                <h2 style="text-align:center">Datos del Personal</h2>
            </div>
            <div class="row">
                
                
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
                    </tbody>
                </table>
            </div>
            

    </body>
</html>

