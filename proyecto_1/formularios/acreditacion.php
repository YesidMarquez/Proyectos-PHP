
<html lang="es">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
        <!--<link href="../css/style.css" rel="stylesheet">-->


        
    </head>
    
    <body>
        <div class="container">
            <div class="row">

                
                <h3 style="text-align:center">DATOS DEL EMPLEADO</h3>
            </div>

            
            <form class="form-horizontal" method="POST" action="../operaciones/inser_new.php" autocomplete="off">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="menu_ingresos.php" class="btn btn-default">Regresar</a>
                        <td><a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                       
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="menu_ingresos.php" class="btn btn-default">Guardar</a>
                        <td><a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                       
                    </div>
                </div>
               

                
               
            </form>
        </div>
    </body>
</html>