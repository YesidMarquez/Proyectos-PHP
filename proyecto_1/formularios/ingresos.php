
<html lang="es">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <script src="../js//jquery-3.1.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script> 


        
    </head>
    
    <body>
        <div class="container">
            <div class="row">

                
                <h3 style="text-align:center">DATOS DEL EMPLEADO</h3>
            </div>
            
            
            <form class="form-horizontal" method="POST" action="../operaciones/inser_new.php" autocomplete="off">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="../tip_cons/planta.php" class="btn btn-default">Regresar</a>
                        <td><a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Identificacion</label>
                    <div class="col-sm-10">
                         <input type="text" class="form-control" id="Cedula" name="Cedula" placeholder="Cedula"  >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Apellido 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellido_1" name="apellido_1" placeholder="apellido 1"  >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Apellido 2</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="apellido_2" name="apellido_2" placeholder="apellido 2"  >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nombre 1</label>
                    <div class="col-sm-10">
                         <input type="text" class="form-control" id="nombre_1" name="nombre_1" placeholder="nombre 1"  >
                    </div>
                     <label for="nombre" class="col-sm-2 control-label">Nombre 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre_2" name="nombre_2" placeholder="nombre 2"  >
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