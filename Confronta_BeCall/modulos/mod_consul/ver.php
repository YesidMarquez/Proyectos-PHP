<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/

    require '../../config/conexion.php';
    
    $id = $_GET['cedula_usuario'];
    
    $sql = "SELECT * FROM usuario WHERE cedula_usuario = '$id' ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    /*-----------------------------------------------------------------------*/
    $sql1 = "SELECT concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, fecha_nacimiento, (SELECT nombre_mun FROM municipio, empleado WHERE empleado.id_empleado='$id' and municipio.cod_mun=empleado.ciudad_expedicion) as ciudad_expedicion, tipo_sangre, (SELECT nombre_mun FROM municipio, empleado WHERE empleado.id_empleado='$id' and municipio.cod_mun=empleado.ciudad_nacimiento) as ciudad_nacimiento, direccion,(SELECT nombre_mun FROM municipio, empleado WHERE empleado.id_empleado='$id' and municipio.cod_mun=empleado.ciudad_residencia) as ciudad_residencia, telefono,  genero, contrato.fecha_ingreso,contrato.fecha_vencimiento,contrato.prorrogas, tipo_contrato.descripcion as descrip, estado_id, cargo.descripcion FROM empleado, contrato,tipo_contrato,cargo,imagenes_fotos WHERE id_empleado='$id' and contrato.empleado_id='$id' and tipo_contrato.id_tipo_contrato = contrato.tipo_contrato_id and contrato.cargo_id = cargo.id_cargo ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
   
     /*-----------------------------------------------------------------------*/
    $sql2 = "SELECT cu.descripcion,cc.nro_curso,cc.fecha_vencimiento, ac.nombre FROM control_cursos cc, cursos cu, academias ac  WHERE cc.empleado_id='$id' and cc.curso_id=cu.id_cursos and ac.nit_academia= cc.academia_nit";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    /*------------------------------------------------------------------------*/
    $sql3 = "SELECT fecha_radicado,numero_radicado FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado3 = $mysqli->query($sql3);
    $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
    /*------------------------------------------------------------------------*/
    $sql4 = "SELECT * FROM `imagenes_fotos` WHERE id_foto= '$id'";
    $res = $mysqli->query($sql4);
    while($filas=mysqli_fetch_array($res)){
        $ruta=$filas['ruta'];
        $desc=$filas['id_foto'];
    }
    /*------------------------------------------------------------------------*/
    $sql5 = "SELECT * FROM `imagenes_cedula` WHERE id_imagenc= '$id'";
    $res1 = $mysqli->query($sql5);
    while($filas=mysqli_fetch_array($res1)){
        $ruta1=$filas['ruta'];
        $desc1=$filas['id_imagenc'];
    }
    /*------------------------------------------------------------------------*/
    $sql6 = "SELECT * FROM `imagenes_credencial` WHERE id_imagen= '$id'";
    $res2 = $mysqli->query($sql6);
    while($filas=mysqli_fetch_array($res2)){
        $ruta2=$filas['ruta'];
        $desc2=$filas['id_imagen'];
    }
    /*------------------------------------------------------------------------*/
    $sql7 = "SELECT * FROM `imagenes_cursos` WHERE id_imgcurso= '$id'";
    $res3 = $mysqli->query($sql7);
    while($filas=mysqli_fetch_array($res3)){
        $ruta3=$filas['ruta'];
        $desc3=$filas['id_imgcurso'];
    }
    /*------------------------------------------------------------------------*/
    $sql4 = "SELECT * FROM contrato WHERE empleado_id = '$id' ";
    $resultado4 = $mysqli->query($sql4);
    $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
    /*------------------------------------------------------------------------*/
    $sql5 = "SELECT * FROM tipo_contrato, contrato WHERE empleado_id = '$id' and    tipo_contrato_id=   id_tipo_contrato ";
    $resultado5 = $mysqli->query($sql5);
    $row5 = $resultado5->fetch_array(MYSQLI_ASSOC);
/************************************************** FIN AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO ****************************/ 
?>
<!--******************************************************** INICIO AREA DE DISEÑO (FRONTEND)PROYECTO ********************************-->
<!DOCTYPE html>
<html>
<head>
    <title>Datos Personales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color:lavender;">
    <!--<div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col col-sm-3 btn-danger">Column</div>
            <div class="col col-sm-6 btn-info">Column</div>
            <div class="col col-sm-3 btn-primary">Column</div>
        </div>
    </div>-->
   
<!-- ***************************************************INICIO DE AREA DE TRABAJO****************************************************--> 
    <div class="container-fluid">
        <h1 class="text-center font-weight-light">Datos Personales</h1><br>
        <div class="container-fluid">     
        <div class="row">
            <div class="col-sm-3  ">
                <img src="../<?php echo $ruta; ?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                <h6 class="card-title"><strong><?php echo $row1['nombres']. " " .$row1['apellidos'];?></strong></h5>
                <h6><strong>Cargo: </strong><span class="badge badge-dark"><?php echo $row1['descripcion'];?></span></h5>
                <h6><strong>Cedula:</strong> <?php echo $row['empleado_id'];?></h5>
                <div class="btn-group">
                    <a href="../tip_cons/planta.php" class="btn btn-outline-primary ">ATRAS</a>
                    <?php if($row1['estado_id']=="1"){ ?>
                    <a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']?>" class="btn btn-outline-primary">MODIFICAR</a>
                    <a class="btn btn-primary disabled">ACTIVO</a>
                    <?php } else { ?>
                                     
                        <a class="btn btn-outline-danger  text-dark" data-toggle="popover" title="Datos de Inactividad" data-content="Renuncia el  <?php echo $row1['fecha_vencimiento']; ?> ">INACTIVO</a>
                    <?php } ?>

                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class=" container">
                                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">CONTRATO</button>
                                <div id="demo" class="collapse">
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Contrato/Fecha Ingreso:    </strong></big> <?php echo $row1['fecha_ingreso']; ?></a>
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Contrato/Fecha Vencimiento:    </strong></big> <?php echo $row1['fecha_vencimiento']; ?></a>
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Tipo Contrato:    </strong></big> <?php echo $row5['descripcion']; ?></a>
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>N° Prorogas:    </strong></big> <?php echo $row4['prorrogas']; ?></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class=" container-fluid ">
                                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo2">CAPACITACION</button>
                                <div id="demo2" class="collapse">
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Academia:    </strong></big> <?php echo $row2['nombre']; ?></a>
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Nivel curso:    </strong></big> <?php echo $row2['descripcion']; ?></a>
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Vencimiento Curso:    </strong></big> <?php echo $row2['fecha_vencimiento']; ?></a> 
                                    <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Fecha de Acreditacion:    </strong></big> <?php echo $row['fecha_acreditacion']; ?></a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

<!--00 ********************************************************EFECTO DE IMAGENES*****************************************************-->
                <div class="container mt-3">

                    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="../<?php echo $ruta1; ?>" alt="Los Angeles" width="550" height="500">
                        </div>
                        <div class="carousel-item">
                          <img src="../<?php echo $ruta2; ?>" alt="Chicago" width="550" height="500">
                        </div>
                        <div class="carousel-item">
                          <img src="../<?php echo $ruta3; ?>" alt="New York" width="550" height="500">
                        </div>
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" >
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                </div>
<!--00 *******************************************************FIN EFECTO DE IMAGENES**************************************************-->
            </div>
            <div class="col-sm-3">
                <div class=" container p-2 bg-info">
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">DATOS PERSONALES</button>
                    <div >
                        <a class="list-group-item list-group-item-info"><big><strong>Ciudad Nacimiento:    </strong></big> <?php echo $row1['ciudad_nacimiento']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Expedicion Cedula:    </strong></big> <?php echo $row1['ciudad_expedicion']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Ciudad/Residencia:  </strong></big> <?php echo $row1['ciudad_residencia']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action" ><big><strong>Direccion/Residencia:    </strong></big> <?php echo $row1['direccion']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Telefono:    </strong></big> <?php echo $row1['telefono']; ?></a>
                        <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action"><big><strong>Tipo de Sangre:    </strong></big> <?php echo $row1['tipo_sangre']; ?></a>
                      
                       
                    </div>
                </div>
                
        
            </div>
        </div>
    </div>
<!-- ***************************************************FIN DE AREA DE TRABAJO******************************************************-->    
    <!-- Optional JavaScript -->
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
<!--************************************************************** FIN AREA DE DISEÑO (FRONTEND)PROYECTO *****************************-->


