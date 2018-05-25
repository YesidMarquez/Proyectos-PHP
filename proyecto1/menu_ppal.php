<?php

    require 'config/conexion.php';

    date('m');
    if (date('m')==01) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==2) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('12 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==3) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==4) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==5) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==6) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        $fecha = date_create('2018-06-01');
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==7) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==8) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==9) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==10) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==11) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }elseif (date('m')==12) {
        $dato=Date('m-d');
        $fecha1= "2018-".$dato;
        $fecha = date_create('2018-'.$dato);
        date_add($fecha, date_interval_create_from_date_string('10 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
    }
    
    //$user=$_POST['user'];

    $where = "where fecha_vencimiento BETWEEN CAST('$fecha1' AS DATE) AND CAST('$fecha3' AS DATE) and id_empleado=empleado_id and estado_id=1";
    $sql = "SELECT id_empleado, concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, nro_curso, fecha_vencimiento FROM empleado, control_cursos $where";//
    $resultado = $mysqli->query($sql);

    $sql1 = "SELECT concat(usuarios.apellido_1,' ',usuarios.apellido_2) as apellidos,concat(usuarios.nombre_1,' ',usuarios.nombre_2) as nombres from usuarios where usuario=' $user'";
    $result = $mysqli->query($sql1);
    $row1 = $result->fetch_array(MYSQLI_ASSOC)
?>

<htm lang="es">
    <head>
        <link rel="stylesheet"  href="css/bootstrap-theme.css">
        <link rel="stylesheet"  href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <title>->MENU.1</title>
    </head>

    <body width:100% class="row table-responsive">
        <div class="container" >
            <div class="row"><font face="Comic Sans MS,verdana">
                <br><h2 style="text-align: center;" type="text/css" class="animated bounceIn">Menu Principal</h2><br>
                
            </div>
        <center>
            <div class="col-sm-4" title="Menu de Sevicios">
                <figure>
                    <a href="menu.php" ><img src="imagenes/menu.png" width="100" height="100" ></img></a><h4 style="text-align: center;" class="animated bounceIn">Menu <br> De Sevicios</h4>
                </figure>
            </div>
            <div class="col-sm-4" title="Configuraciones">
                <figure>
                    <a href="config/config_user.php"><img src="imagenes/config.jpg" width="100" height="100" ></img></a><h4 style="text-align: center; " class="animated bounceIn">Configuraciones</h4>
                </figure>
            </div>
            <div class="col-sm-4" title="Cerrar Sesion">
                <figure>
                    <a href="index.html"><img src="imagenes/cerrar.png"  width="100" height="100" ></img></a><h4 style="text-align: center; ;" class="animated bounceIn">Cerrar <br> Sesion</span>
                </figure>
            </div>
        </center>
        <h3 style="text-align: center;">Vencimientos Proximos </h3>
        <h4 style="text-align: center;"><?php if (date('m')==1) {?>
        Mes de Enero<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==2) {?>
        Mes de Febrero<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==3) {?>
        Mes de Marzo<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==4) {?>
        Mes de Abril<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==5) {?>
        Mes de Mayo<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==6) {?>
        Mes de Junio<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==7) {?>
        Mes de Julio<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==8) {?>
        Mes de Agosto<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==9) {?>
        Mes de Septiembre<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==10) {?>
        Mes de Octubre<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==11) {?>
        Mes de Noviembre<?php }?></h4>
        <h4 style="text-align: center;""><?php if (date('m')==12) {?>
        Mes de Diciembre<?php }?></h4>
        <div class="row table-responsive">
            <table  class="table table-striped"  border="3" style="background-color:red" >
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
                            <td><center><a href="operaciones/modificar_cursos.php?id_empleado=<?php echo $row['id_empleado']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

