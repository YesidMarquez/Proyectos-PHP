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
    $where = "WHERE ubicacion.empleado_id=empleado.id_empleado AND  control_cursos.empleado_id=empleado.id_empleado and contrato.empleado_id=empleado.id_empleado and ubicacion.cliente_id=cliente.id_cliente and  ubicacion.puesto_id= puesto.id_puesto and  estado_id=1 and id_empleado LIKE '%$valor'";
    $sql = "SELECT empleado.id_empleado,concat(empleado.apellido_1,' ',empleado.apellido_2) as apellidos,concat(empleado.nombre_1,' ',empleado.nombre_2) as nombres,empleado.direccion, puesto.nombre_puesto,cliente.nombre_cliente, ubicacion.modalidad_id,control_cursos.nro_curso,control_cursos.fecha_vencimiento, contrato.fecha_ingreso,contrato.fecha_vencimiento FROM ubicacion,puesto,empleado,control_cursos, contrato,cliente $where";//
    $resultado = $mysqli->query($sql);

    $sql1 = "SELECT  count(*) as conteo FROM `empleado` WHERE estado_id= 1";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);

    $sql2 = "SELECT  count(*) as conteo FROM `empleado` WHERE estado_id= 2";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    //echo $row2['conteo'];
    
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
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Personal</title>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="../menu.php" style="font-family: 'Satisfy', cursive;" title="Menu">Mat-Sw</a>
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="planta.php"><img  class="menu" src="../imagenes/iconos/personal.jpg" title="Personal"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cursos.php"><img class="menu2" src="../imagenes/iconos/curso.jpg" title="Cursos"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acreditaciones.php"><img class="menu1" src="../imagenes/iconos/acreditacion.png" title="Acreditaciones"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../formularios/empleado.php"><img class="menu" src="../imagenes/iconos/empleado.png" title="Ingreso Nuevo"></img></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#"><img  class="menu" src="../imagenes/iconos/cerrar.png" title="Cerrar"></a>
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
                        ACTIVOS
                        <span class="badge badge-dark badge-pill"><?php echo $row1['conteo']; ?></span>
                      </li>
                      <li class="badge badge-danger badge-pill">
                        RETIRADOS
                        <span class="badge badge-dark badge-pill"><?php echo $row2['conteo']; ?></span>
                      </li>
                    </ul>
                </div> 
            </div> 
        </nav><br>
        
<!--****************************************************** header *************************************************************************-->
        <div class="container">
            <div class="row">
                <div class="col"><h2 style="text-align:center">Datos del Personal</h2></div>
            </div>
        </div>
<!--****************************************************** Tabla de batos *****************************************************************-->
        <div class="container-fluid">
            <div class="row">
                <div class="col ">
                    <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
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
                                    <th><center>Cedula</th>
                                    <th><center>Apellidos</th>
                                    <th><center>Nombres</th>
                                    <th><center>Puesto</th>
                                    <th><center>Cliente</th>
                                    <th><center>Ver</th>
                                </tr>
                            </thead>
                            <!--cuerpo de la tabla-->
                            <tbody id="myTable">
                                <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $row['id_empleado']; ?></td>
                                        <td><?php echo $row['apellidos']; ?></td>
                                        <td><?php echo $row['nombres']; ?></td>
                                        <td><?php echo $row['nombre_puesto']; ?>
                                        <td><?php echo $row['nombre_cliente']; ?></td>
                                        <td><center><a href="../tip_cons/ver.php?id_empleado=<?php echo $row['id_empleado']; ?>"><i class="fas fa-eye"></i></a></td></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
