
<?php
    require '../config/conexion.php';
    
    $where = "WHERE empl.id_empleado=ac.empleado_id and ac.empleado_id=cc.empleado_id and cc.curso_id=cu.id_cursos";
    $sql = "SELECT empl.id_empleado, concat(empl.apellido_1,' ',empl.apellido_2) as apellidos,concat(empl.nombre_1,' ',empl.nombre_2) as nombres,cu.descripcion,cc.nro_curso,cc.fecha_vencimiento,ac.fecha_acreditacion fROM empleado empl, acreditacion ac, control_cursos cc, cursos cu $where";//
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

    
    <body>

        <div class="container">
            <div class="row">
                <h2 style="text-align:center">Vencimiento Acreditacion</h2>
            </div>
        <form ACTION="../menu.php"><br>
            <INPUT TYPE="submit" VALUE="Retornar al menu" class="btn btn-primary"><br>
        </form>

                                   
            <br>

            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cedula</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Curso</th>
                            <th>Ven. Acreditacion</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <!--cuerpo de la tabla-->
                    <tbody>
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $row['id_empleado']; ?></td>
                                <td><?php echo $row['apellidos']; ?></td>
                                <td><?php echo $row['nombres']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
                                <td><?php echo $row['fecha_acreditacion']; ?></td>
                                <td><a href="../operaciones/modificar.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="../operaciones/eliminar.php?id_empleado=<?php echo $row['id_empleado']; ?>"  data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                                
                                
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                        </div>
                        
                        <div class="modal-body">
                            ¿Desea eliminar este registro?
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger btn-ok">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                $('#confirm-delete').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    
                    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                });
            </script>
            
    </body>
</html>
