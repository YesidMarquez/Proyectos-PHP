<?php
    require '../config/conexion.php';
    
    $id = $_GET['id_empleado'];
    
    $sql = "SELECT * FROM acreditacion WHERE empleado_id = '$id' ";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    /*-----------------------------------------------------------------------*/
    $sql1 = "SELECT concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres FROM empleado WHERE id_empleado='$id' ";
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
     /*-----------------------------------------------------------------------*/
    $sql2 = "SELECT cu.descripcion,cc.nro_curso,cc.fecha_vencimiento, cc.academia_nit, a.nombre FROM control_cursos cc, cursos cu, academias a WHERE cc.empleado_id='$id' and cc.curso_id=cu.id_cursos and cc.academia_nit=a.nit_academia";
    $resultado2 = $mysqli->query($sql2);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    
    
?> 
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
                <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="../tip_cons/actualizar_cursos.php" autocomplete="off">
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
                    <label for="nombre" class="col-sm-2 control-label">Academia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row2['nombre']; ?>" readonly="readonly">
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">Nivel curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="niv" name="niv" placeholder="Nivel" value="<?php echo $row2['descripcion']; ?>" >
                    </div>
                    <label for="nombre" class="col-sm-2 control-label">NRO Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nro" name="nro" placeholder="nro" value="<?php echo $row2['nro_curso']; ?>" >
                    </div>
                    
                    <label for="estado_civil" class="col-sm-2 control-label">Modificar Academia</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="Academia" name="Academia" placeholder="Academia" >
                            <option value="<?php echo $row2['academia_nit']; ?>"></option>
                            <option value="8300211325">Escuela Colombiana De Seguridad Privada ECOSEP Ltda</option>
                            <option value="8300393700">Escuela Colombiana De Capacitacionen Vigilancia Privada </option>
                            <option value="8300703391">Academia de Seguridad y Vigilancia Cognoseguridad LTDA</option>
                            <option value="8300833785">Academia De Seguridad Privada Marshals Service </option>
                            <option value="8301012190">Academia Colombiana de Profesionales en Seguridad</option>
                            <option value="8301283282">Escuela de Entrenamiento en Vigilancia y Seguridad Privada SEGURED LTDA</option>
                            <option value="9000172529">Academia Nacional de Entrenamiento en Vigilancia y Seguridad Privada AESS Ltda</option>
                            <option value="9000296358">Academia Nacional de Seguridad Privada CLAVE A.N.S.P.</option>
                            <option value="9002025368">Centro De Formacion En Vigilancia Y Seguridad Privada CEFORVIG</option>
                        </select>
                     </div>
                
                    <label for="nombre" class="col-sm-2 control-label">Vencimiento Curso</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fec" name="fec" placeholder="fecha" value="<?php echo $row2['fecha_vencimiento']; ?>" >
                    </div>
                   
                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo $row['empleado_id']; ?>" />
                             
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="../tip_cons/cursos.php?id_empleado=<?php echo $row['empleado_id'];  ?>" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>