
<?php
    require '../config/conexion.php';
    
    $where = "WHERE ubicacion.empleado_id=empleado.id_empleado AND  control_cursos.empleado_id=empleado.id_empleado and contrato.empleado_id=empleado.id_empleado";
    $sql = "SELECT id_empleado,apellido_1, apellido_2, nombre_1,nombre_2, contrato.fecha_ingreso,contrato.fecha_vencimiento FROM `ubicacion`,`empleado`,control_cursos, contrato  $where";//
    $resultado = $mysqli->query($sql);
    
?>

<htm lang="es">
    <head>
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
            </FORM>
                <form ACTION="../menu.php"><br>
                <INPUT TYPE="submit" VALUE="Retornar al menu" class="btn btn-primary"><br></form>
                                   
            <br>

            <div class="row table-responsive">
                <table class="table table-striped" border="3">
                    <thead>
                        <tr>
                            <th>Cedula</th>
                            <th>Apellido 1</th>
                            <th>Apellido 2</th>  
                            <th>Nombre 1</th>
                            <th>Nombre 2</th>                          
                            <th>Fecha Ingreo</th>
                            <th>Fecha Vencimiento</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <!--cuerpo de la tabla-->
                    <tbody>
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $row['id_empleado']; ?></td>
                                <td><?php echo $row['apellido_1']; ?></td>
                                <td><?php echo $row['apellido_2']; ?></td>
                                <td><?php echo $row['nombre_1']; ?></td>
                                <td><?php echo $row['nombre_2']; ?></td>
                                <td><?php echo $row['fecha_ingreso']; ?></td>
                                <td><?php echo $row['fecha_vencimiento']; ?></td>
                                <td><a href="../operaciones/modificar.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                
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

