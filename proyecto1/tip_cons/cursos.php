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
       
        $fecha = date_create('2018-02-01');
        date_add($fecha, date_interval_create_from_date_string('27 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
        /*
        $fecha = new DateTime('2018-02-01');
        $fecha->add(new DateInterval('P27D'));
        echo $fecha->format('Y-m-d') . "\n";*/
    }elseif (date('m')==3) {
        $fecha1= '2018-03-01';
       
        $fecha = date_create('2018-03-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }elseif (date('m')==4) {
        $fecha1= '2018-04-01';
        
        $fecha = date_create('2018-04-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        
    }elseif (date('m')==5) {
        $fecha1= '2018-05-01';
       
        $fecha = date_create('2018-05-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }elseif (date('m')==6) {
        $fecha1= '2018-06-01';
       
        $fecha = date_create('2018-06-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
      
    }elseif (date('m')==7) {
        $fecha1= '2018-07-01';
       
        $fecha = date_create('2018-07-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }elseif (date('m')==8) {
        $fecha1= '2018-08-01';
       
        $fecha = date_create('2018-08-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }elseif (date('m')==9) {
        $fecha1= '2018-09-01';
       
        $fecha = date_create('2018-09-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }elseif (date('m')==10) {
        $fecha1= '2018-10-01';
      
        $fecha = date_create('2018-10-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
        
    }elseif (date('m')==11) {
        $fecha1= '2018-11-01';
       
        $fecha = date_create('2018-11-01');
        date_add($fecha, date_interval_create_from_date_string('29 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }elseif (date('m')==12) {
        $fecha1= '2018-12-01';
       
        $fecha = date_create('2018-12-01');
        date_add($fecha, date_interval_create_from_date_string('30 days'));
        $fecha3= date_format($fecha, 'Y-m-d');
       
    }
    
    $where = "where estado_id=1 and fecha_vencimiento BETWEEN CAST('2018-01-01' AS DATE) AND CAST('2050-12-01' AS DATE) and id_empleado=empleado_id and estado_id=1 ";
    $sql = "SELECT id_empleado, concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, nro_curso, fecha_vencimiento FROM empleado, control_cursos $where";//
    $resultado = $mysqli->query($sql);
    
?>

<htm lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
            @import url('https://fonts.googleapis.com/css?family=Amatic+SC|Gloria+Hallelujah');
            @import url('https://fonts.googleapis.com/css?family=Satisfy');
        </style>
        <title>Cursos</title>
    </head>
    <body><font face="Comic Sans MS,verdana">
        <div class="container">
            <div class="row">
                <h2 style="text-align:center">Vencimiento de Cursos</h2>
                <h3 style="color: blue;text-align:center; border-width: 10000px"><?php if (date('m')==2) {?>
                    Febrero
                <?php }?></h3>
                <h3 style="text-align:center"><?php if (date('m')==6) {?>
                    Mes De los Padres
                <?php }?></h3>
                <h3 style="text-align:center"><?php if (date('m')==5) {?>
                    Mes De madres
                <?php }?></h3>
                <h3 style="text-align:center"><?php if (date('m')==12) {?>
                    Feliz Navidad
                <?php }?></h3>
            </div>
            <form ACTION="../menu.php"><br>
                <input TYPE="submit" VALUE="Retornar al menu" class="btn btn-primary"><br>
            </form>
            <di class="row">
                <div class="col-sm-4">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>
            </di>
            <br>
            <div class="row table-responsive">
                <table  class="table table-striped" border="3" style="background-color:#e6f9ff; font-size:100%">
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
                    <tbody id="myTable">
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                <td width="10%"><center><?php echo $row['id_empleado']; ?></td>
                                <td width="20%"><center><?php echo $row['nombres']; ?></td>
                                <td width="20%"><center><?php echo $row['apellidos']; ?></td>
                                <td width="15%"><center><?php echo $row['nro_curso']; ?></td>
                                <td width="10%"><center><?php echo $row['fecha_vencimiento']; ?></td>
                                <td width="9%"><center><a href="../operaciones/modificar_cursos.php?id_empleado=<?php echo $row['id_empleado']; ?>"><i class="fas fa-eye"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    </tbody>
                </table>
            </div>
         </div>
         <!--****************************************************** foother ************************************************************************-->
        <div class="container">    
            <div class="row">
                <div class="col">
                     <div class="row justify-content-md-center">
                        <div class="footer-copyright  py-3">© 2018 Copyright:
                            <a href="https://ymarquez.000webhostapp.com/" style="font-family: 'Satisfy', cursive;">Mat-Sw<img src="../imagenes/logo.jpg" width="50" height="50"></a>
                        </div>
                              
                    </div>
                </div>
                
            </div>
        </div>
<!--******************************************************************************************************************************-->
            <!-- Optional JavaScript -->
            <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function(){
                $('[data-toggle="popover"]').popover();
                });
            </script>
            
            

    </body>
</html>
