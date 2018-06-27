<?php
    require '../config/conexion.php';
    
    $id = $_GET['id_empleado'];
    
    $sql = "SELECT * FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    /*-----------------------------------------------------------------------*/
    $sql1 = "SELECT concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, fecha_nacimiento, (SELECT nombre_mun FROM municipio, empleado WHERE empleado.id_empleado='$id' and municipio.cod_mun=empleado.ciudad_expedicion) as ciudad_expedicion, tipo_sangre, (SELECT nombre_mun FROM municipio, empleado WHERE empleado.id_empleado='$id' and municipio.cod_mun=empleado.ciudad_nacimiento) as ciudad_nacimiento, direccion,(SELECT nombre_mun FROM municipio, empleado WHERE empleado.id_empleado='$id' and municipio.cod_mun=empleado.ciudad_residencia) as ciudad_residencia, telefono,  genero, contrato.fecha_ingreso,contrato.fecha_vencimiento,contrato.prorrogas, tipo_contrato.descripcion as descrip, estado_id, cargo.descripcion FROM empleado, contrato,tipo_contrato,cargo,imagenes_fotos WHERE id_empleado='$id' and contrato.empleado_id='$id' and tipo_contrato.id_tipo_contrato = contrato.tipo_contrato_id and contrato.cargo_id = cargo.id_cargo ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
   
     /*-----------------------------------------------------------------------*/
    $sql2 = "SELECT cu.descripcion,cc.nro_curso,cc.fecha_vencimiento FROM control_cursos cc, cursos cu  WHERE cc.empleado_id='$id' and cc.curso_id=cu.id_cursos ";
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
 
?>
<html lang="es">
    <head><title>Planta x Persona</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
   
        <script src="../js//jquery-3.3.1.slim.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 
        <script src="../js/popper.min.js"></script> 
        

        
    </head>
    
    <body><font face="Comic Sans MS,verdana">
        
        <!--<div class="container">
            <div class="row">

                
                <h3 style="text-align:center">DATOS DEL EMPLEADO</h3>
            

            
            <form class="form-horizontal" method="POST" action="../tip_cons/actualizar.php" autocomplete="off">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a href="../tip_cons/planta.php" class="btn btn-info">Regresar</a>
                       
                        <td><a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                       
                    </div>
                     <?php if($row1['estado_id']=="1"){ ?>
                    <div class="form-group">
                        <input type="text" id="" name="" value="ACTIVO" class="btn btn-success" readonly="readonly" />
                    </div>
                    
                    <?php } else { ?>
                        <div class="form-group">
                            <input type="text" id="" name="" value="RETIRADO" class="btn btn-danger" readonly="readonly"/>
                        </div>

                    <?php } ?>
                </div>
                <div class="form-group">
                    
                    
                    <div class="col-sm-10">
                         
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <left><img src="../<?php echo $ruta; ?>" class='imgRedonda'>
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Identificacion</label>
                    <div class="col-sm-10">
                       
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['empleado_id']; ?>" required readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-10">
                      
                        <input type="text" class="form-control"  value="<?php echo $row1['apellidos']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['nombres']; ?>" readonly="readonly">
                    </div>
                    
                    <label for="nombre" class="col-sm-2 control-label">Expedicion Cedula</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['ciudad_expedicion']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Fecha Nacimiento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['fecha_nacimiento']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Ciudad Nacimiento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['ciudad_nacimiento']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Tipo de Sangre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['tipo_sangre']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['direccion']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Ciudad/Residencia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['ciudad_residencia']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['telefono']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Cargo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['descripcion']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Fecha Ingreso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['fecha_ingreso']; ?>" readonly="readonly">
                    </div>
                     <label for="nombre" class="col-sm-2 control-label">Fecha Vencimiento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['fecha_vencimiento']; ?>" readonly="readonly">
                    </div>
                     <label for="nombre" class="col-sm-2 control-label">Prorrogas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['prorrogas']; ?>" readonly="readonly">
                    </div>
                     <label for="nombre" class="col-sm-2 control-label">Tipo Contrato</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row1['descrip']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nivel curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['descripcion']; ?>" readonly="readonly">
                    </div>
                   
                    <label for="nombre" class="col-sm-2 control-label">Vencimiento Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['fecha_vencimiento']; ?>" readonly="readonly">
                    </div>
                     <label for="nombre" class="col-sm-2 control-label">Fecha Radicado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row3['fecha_radicado']; ?>" readonly="readonly">
                    </div>
                     <label for="nombre" class="col-sm-2 control-label">Numero Radicado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row3['numero_radicado']; ?>" readonly="readonly">
                    </div>
                    
                    <label for="nombre" class="col-sm-2 control-label">Fecha de Acreditacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['fecha_acreditacion']; ?>" readonly="readonly">
                    </div>

                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo $row['empleado_id']; ?>" />
                             
                
               
            </form>
        </div>-->

        <div class="row">

            <div class="container" >
                
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="../<?php echo $ruta; ?>" alt="Card image" style="width:60%">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row1['nombres'].$row1['apellidos'];?></h4>
                        <h5>Cedula: <?php echo $row['empleado_id'];?></h5>

                        <h5>DATOS BASICOS</h5>
                        <div class="list-group">
                            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">
                                Ciudad Nacimiento: <?php echo $row1['ciudad_nacimiento']; ?></a>
                            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">
                                Expedicion Cedula: <?php echo $row1['ciudad_expedicion']; ?></a>
                            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">
                                Ciudad/Residencia: <?php echo $row1['ciudad_residencia']; ?></a>
                        </div>

                      
                    </div>
                </div>


            </div>
            
        </div>
        <div class="ROW">
            <div class="container">
                <a href="../tip_cons/planta.php" class="btn btn-primary">REGRESAR</a>
                <a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']?>" class="btn btn-primary">MODIFICAR</a>
                <?php if($row1['estado_id']=="1"){ ?>
                <a class="btn btn-success">ACTIVO</a>
                <?php } else { ?>
                    <a class="btn btn-danger">RETIRADO</a>
                <?php } ?>
                
            </div>
            </div>
        
        
    </body>
</html>