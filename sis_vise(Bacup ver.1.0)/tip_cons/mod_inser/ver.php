<?php
    require '../config/conexion.php';
    
    $id = $_GET['id_empleado'];
    
    $sql = "SELECT * FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    /*-----------------------------------------------------------------------*/
    $sql1 = "SELECT concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres, fecha_nacimiento, ciudad_expedicion as exp_cedula, tipo_sangre, ciudad_nacimiento, direccion,ciudad_residencia, telefono,  genero, contrato.fecha_ingreso,contrato.fecha_vencimiento,contrato.prorrogas, tipo_contrato.descripcion FROM empleado, contrato,tipo_contrato WHERE id_empleado='$id' and contrato.empleado_id='$id' and tipo_contrato.id_tipo_contrato = contrato.tipo_contrato_id ";
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
    
    
?>
<html lang="es">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 

        
    </head>
    
    <body><font face="Comic Sans MS,verdana">
        
        <div class="container">
            <div class="row">

                
                <h3 style="text-align:center">DATOS DEL EMPLEADO</h3>
            

            
            <form class="form-horizontal" method="POST" action="../tip_cons/actualizar.php" autocomplete="off">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a href="../tip_cons/planta.php" class="btn btn-info">Regresar</a>
                       
                        <td><a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                       
                    </div>
                </div>
                <div class="form-group">
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
                        <input type="text" class="form-control"  value="<?php echo $row1['exp_cedula']; ?>" readonly="readonly">
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
                        <input type="text" class="form-control"  value="<?php echo $row1['descripcion']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nivel curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['descripcion']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">NRO Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['nro_curso']; ?>" readonly="readonly">
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
                     <label for="nombre" class="col-sm-2 control-label">Vencimiento Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  value="<?php echo $row2['fecha_vencimiento']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Fecha de Acreditacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row['fecha_acreditacion']; ?>" readonly="readonly">
                    </div>

                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo $row['empleado_id']; ?>" />
                             
                
               
            </form>
        </div>
    </body>
</html>