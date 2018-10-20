
<?php
    require '../mod_config/conexion.php';
    session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../../index.php'; </script>";
    }
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
    
    $where = "WHERE estado_id=1 and empl.id_empleado=ac.empleado_id and ac.empleado_id=cc.empleado_id and cc.curso_id=cu.id_cursos and ac.fecha_acreditacion BETWEEN CAST('2018-01-01' AS DATE) AND CAST('2019-12-31' AS DATE)";
    $sql = "SELECT empl.id_empleado, concat(empl.apellido_1,' ',empl.apellido_2) as apellidos,concat(empl.nombre_1,' ',empl.nombre_2) as nombres,cu.descripcion,cc.nro_curso,cc.fecha_vencimiento,ac.fecha_acreditacion fROM empleado empl, acreditacion ac, control_cursos cc, cursos cu $where";//
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
        <link rel="icon" type="image/x-icon" href="../imagenes/logos/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <title>Acreditaciones | 2.0</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
            @import url('https://fonts.googleapis.com/css?family=Amatic+SC|Gloria+Hallelujah');
            @import url('https://fonts.googleapis.com/css?family=Satisfy');
        </style>
       
    </head>
    <body font face="Comic Sans MS,verdana">
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="../../menu.php" style="font-family: 'Satisfy', cursive;" title="Menu">Mat-Sw</a>
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="planta.php"><img  class="menu" src="../../imagenes/iconos/personal.png" title="Personal"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cursos.php"><img class="menu2" src="../../imagenes/iconos/curso.png" title="Cursos"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acreditaciones.php"><img class="menu1" src="../../imagenes/iconos/acreditacion.png" title="Acreditaciones"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../mod_insert/formularios/empleado.php"><img class="menu" src="../../imagenes/iconos/empleado.png" title="Ingreso Nuevo"></img></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../mod_config/desconectar.php"><img  class="menu" src="../../imagenes/iconos/cerrar.png" title="Cerrar"></a>
            </li>
          </ul>
            <div class="container"> 
                <div class="col-sm-4 ">
                </div>
                <div class="col-sm-4 ">
                </div>
                <div class="col-3 ">
                    <ul class="list-group">
                      <li class="badge badge-primary badge-pill">
                        Vigentes
                        <span class="badge badge-dark badge-pill"></span>
                      </li>
                      <li class="badge badge-danger badge-pill">
                        Vencidos
                        <span class="badge badge-dark badge-pill"></span>
                      </li>
                    </ul>
                </div> 
            </div> 
        </nav><br>
        <div class="container">
            <h2 style="text-align:center">Vencimiento Acreditacion</h2>
            <!--<a href="../reporteexcel/reporteexcel.php"> Haz clic para descargar el reporte</a>-->
            <br>
            <div class="row table-responsive shadow-lg p-3 mb-5 bg-white rounded">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-sm-8 ">
                        
                        </div>
                        <div class="col-sm-2 ">
                            
                        </div>
                        <div class="col-sm-2 ">
                            <input class="form-control justify-content-end" id="myInput" type="text" placeholder="Filtrar.." align="left">   
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th><center>Cedula</center></th>
                            <th><center>Apellidos</center></th>
                            <th><center>Nombres</center></th>
                            <th><center>Nivel del Seguridad</center></th>
                            <th><center>Ven. Acreditacion</center></th>
                            <th><center>Modificar</center></th>
                        </tr>
                    </thead>
                    <!--cuerpo de la tabla-->
                    <tbody id="myTable">
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><center><?php echo $row['id_empleado']; ?></center></td>
                                <td><center><?php echo $row['apellidos']; ?></center></td>
                                <td><center><?php echo $row['nombres']; ?></center></td>
                                <td><center><?php echo $row['descripcion']; ?></center></td>
                                <td><center><?php echo $row['fecha_acreditacion']; ?></center></td>
                                <td><center><a href="../operaciones/modificar.php?id_empleado=<?php echo $row['id_empleado']; ?>"><i class="fas fa-eye"></i></a></center></td>
                                </tr>
                        <?php } ?>
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
                            <a href="https://ymarquez.000webhostapp.com/"><img src="../../imagenes/logos/logo.png" width="50" height="50"></a>
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
