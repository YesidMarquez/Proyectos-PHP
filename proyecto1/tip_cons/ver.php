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
    /*<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js//jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    <script src="../js/popper.min.js"></script>*/
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Datos Personales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
</head>
<body >
    <div class="container-fluid">
      <h1 class="">Datos Personales</h1>
     
      <div class="container-fluid">     
        <div class="row">
          <div class="col-sm-4 ">
            <img src="../<?php echo $ruta; ?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            <h4 class="card-title"><?php echo $row1['nombres']. " " .$row1['apellidos'];?></h4>
            <h5><strong>Cargo: </strong><span class="badge badge-dark"><?php echo $row1['descripcion'];?></span></h5>
            <h5><strong>Cedula:</strong> <?php echo $row['empleado_id'];?></h5>
            <div class="container">
                <a href="../tip_cons/planta.php" class="btn btn-primary">REGRESAR</a>
                <a href="../operaciones/modificar_planta.php?id_empleado=<?php echo $row['empleado_id']?>" class="btn btn-primary">MODIFICAR</a>
                <?php if($row1['estado_id']=="1"){ ?>

                    <a class="badge badge-primary">ACTIVO</a>
                <?php } else { ?>

                    
                    <a class="badge badge-danger">RETIRADO</a>
                <?php } ?>
                
            </div>

          </div>
          <div class="col-sm-8 ">
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action" >                              <big><strong>Ciudad Nacimiento:    </strong></big> <?php echo $row1['ciudad_nacimiento']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Expedicion Cedula:    </strong></big> <?php echo $row1['ciudad_expedicion']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Ciudad/Residencia:    </strong></big> <?php echo $row1['ciudad_residencia']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action" >                              <big><strong>Direccion/Residencia:    </strong></big> <?php echo $row1['direccion']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Telefono:    </strong></big> <?php echo $row1['telefono']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Tipo de Sangre:    </strong></big> <?php echo $row1['tipo_sangre']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action" >                              <big><strong>Contrato/Fecha Ingreso:    </strong></big> <?php echo $row1['fecha_ingreso']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Contrato/Fecha Vencimiento:    </strong></big> <?php echo $row1['fecha_vencimiento']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Nivel curso:    </strong></big> <?php echo $row2['descripcion']; ?></a>
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Vencimiento Curso:    </strong></big> <?php echo $row2['fecha_vencimiento']; ?></a> 
            <a class="list-group-item list-group-item-info" class="list-group-item list-group-item-action">                               <big><strong>Fecha de Acreditacion:    </strong></big> <?php echo $row['fecha_acreditacion']; ?></a>   
          </div>
        </div>
      </div>
    </div>

</body>
</html>
