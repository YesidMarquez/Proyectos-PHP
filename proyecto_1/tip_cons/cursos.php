<?php

    require '../config/conexion.php';

    date('m');
    if (date('m')==01) {
        $fecha1= '2018-01-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-01-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');

        /*$fecha = new DateTime('2018-01-01');
        $fecha->add(new DateInterval('P30D'));
        echo $fecha->format('Y-m-d') . "\n";*/
    }elseif (date('m')==2) {
        $fecha1= '2018-02-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-02-01');
        date_add($fecha, date_interval_create_from_date_string('27 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
        /*
        $fecha = new DateTime('2018-02-01');
        $fecha->add(new DateInterval('P27D'));
        echo $fecha->format('Y-m-d') . "\n";*/
    }elseif (date('m')==3) {
        $fecha1= '2018-03-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-03-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==4) {
        $fecha1= '2018-04-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-04-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==5) {
        $fecha1= '2018-05-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-05-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==6) {
        $fecha1= '2018-06-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-06-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ('Mes de los Padres');
    }elseif (date('m')==7) {
        $fecha1= '2018-07-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-07-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==8) {
        $fecha1= '2018-08-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-08-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==9) {
        $fecha1= '2018-09-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-09-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==10) {
        $fecha1= '2018-10-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-10-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==11) {
        $fecha1= '2018-11-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-11-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }elseif (date('m')==12) {
        $fecha1= '2018-12-01';
        echo ($fecha1);
        echo "  ";
        $fecha = date_create('2018-12-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        echo ($fecha3);
    }
    
    $where = "where fecha_vencimiento BETWEEN CAST('$fecha1' AS DATE) AND CAST('$fecha3' AS DATE) and id_empleado=empleado_id and estado_id=1";
    $sql = "SELECT id_empleado, concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, nro_curso, fecha_vencimiento FROM empleado, control_cursos $where";//
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
                <h2 style="text-align:center">Vencimiento de Cursos</h2>
                <h3 style="color: blue;text-align:center; border-width: 10000px"><?php if (date('m')==2) {?>
                    Febrero
                <?php }?></h3>
                <h3 style="text-align:center"><?php if (date('m')==6) {?>
                    Mes De los Padres
                <?php }?></h3>
                <h3 style="text-align:center"><?php if (date('m')==9) {?>
                    Mes De los Amor y la Amistad
                <?php }?></h3>
                <h3 style="text-align:center"><?php if (date('m')==12) {?>
                    Feliz Navidad
                <?php }?></h3>
            </div>
             </FORM>
                <form ACTION="../menu.php"><br>
                <INPUT TYPE="submit" VALUE="Retornar al menu" class="btn btn-primary"><br></form>

                                   
            <br>

            <div class="row table-responsive">



                <table  class="table table-striped" border="3" style="background-color:#e6f9ff">
                    <thead border="3" >
                        <tr  style="background-color:#cccccc">
                            <th><center>Cedula</th>
                            <th><center>Nombres</th>
                            <th><center>Apellidos</th>
                            <th><center>NRO</th>
                            <th><center>Vencimiento Curso</th>
                            <th><center>Modificar</th>

                


                    </thead>

                    <!--cuerpo de la tabla-->
                    <tbody>
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>



                                <td><center><?php echo $row['id_empleado']; ?></td>
                                <td><center><?php echo $row['nombres']; ?></td>
                                <td><center><?php echo $row['apellidos']; ?></td>
                                <td><center><?php echo $row['nro_curso']; ?></td>
                                <td><center><?php echo $row['fecha_vencimiento']; ?></td>
                                <td><center><a href="../operaciones/modificar_cursos.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

                               

                                

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

