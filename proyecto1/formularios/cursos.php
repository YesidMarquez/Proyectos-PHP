<?php
    require '../config/conexion.php';
    
    $where = "";
    
    if(!empty($_POST))
    {
        $valor = $_POST['campo'];
        if(!empty($valor)){
            $where = "WHERE id_empleado ='$valor'";
        }
    }
    $sql = "SELECT id_empleado,concat(apellido_1,' ',apellido_2) as apellidos,concat(nombre_1,' ',nombre_2) as nombres FROM empleado $where";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);

    $sql= "SELECT NOMBRE FROM `academias`";
    $resultado1 = $mysqli->query($sql);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
    
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>->MENU.2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/JavaScript">
        function mayus(e) {
            e.value = e.value.toUpperCase();
        }
    </script>            
</head>
<body style="background-color:#F0000;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
     <a class="navbar-brand" href="../menu.php" style="font-family: 'Satisfy', cursive;" title="Menu">Mat-Sw</a>
      
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="empleado.php"><img class="menu" src="../imagenes/iconos/empleado.png" title="Empleado"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contrato.php""><img  class="menu" src="../imagenes/iconos/contrato.png" title="Personal"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acreditacion.php"><img class="menu1" src="../imagenes/iconos/acreditacion.png" title="Acreditaciones"></img></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><img class="menu2" src="../imagenes/iconos/curso.png" title="Cursos"></img></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="puesto.php"><img class="menu2" src="../imagenes/iconos/puesto.png" title="Puesto"></img></a>
        </li>
                  
         <li class="nav-item">
          <a class="nav-link" href="#"><img  class="menu" src="../imagenes/iconos/cerrar.png" title="Cerrar"></a>
        </li>
      </ul>
    </nav><br>

    <div class="container">
        <h3 style="text-align:center">INGRESO DE CURSOS </h3>
        <div class="row">
           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div> 
    <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_cursos.php">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="nombre" class="control-label">Cedula</label>
                    <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="Cedula" value="<?php echo $row['id_empleado']; ?>" required readonly="readonly">

                    <label for="nombre" class="control-label">Apellidos</label>
                    <input type="text" class="form-control"  value="<?php echo $row['apellidos']; ?>" readonly="readonly">

                    <label for="nombre" class="control-label">Nombres</label>
                    <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">

                    <label for="estado_civil" class="control-label">Academia</label>
                    <select class="form-control" id="Academia" name="academia" placeholder="academia" >
                            <option value="0"></option>
                            <option value="8001916712">ACADEMIA DE VIGILANTES ADEVIP LIMITADA</option>
                            <option value="8300434435">CENTRO DE APRENDIZAJE EN SEGURIDAD PRIVADA CADEVIP LTDA.</option>
                            <option value="8040073153">ACADEMIA DE ESTUDIOS TECNICOS EN SEGURIDAD LTDA.</option>
                            <option value="8050317483">ACADEMIA DE FORMACION INTEGRAL EN SEGURIDAD Y DESARROLLO EMPRESARIAL LTDA</option>
                            <option value="8090065755">INSTITUTO INTERNACIONAL DE SEGURIDAD INTEGRAL LIMITADA ISI LTDA.</option>
                            <option value="8100061763">INSTITUTO NACIONAL DE CAPACITACION EN SEGURIDAD INTEGRAL LIMITADA INDESEG LTDA</option>
                            <option value="8100068452">FORMANDO SEGURIDAD LTDA</option>
                            <option value="8300211325">ESCUELA COLOMBIANA DE SEGURIDAD PRIVADA ECOSEP LTDA</option>
                            <option value="8300380203">ACADEMIA NACIONAL DE SEGURIDAD PRIVADA LAS AMERICAS LTDA ANSA LTDA</option>
                            <option value="8300393700">ESCUELA COLOMBIANA DE CAPACITACION EN VIGILANCIA PRIVADA ECOLVIP LIMITADA</option>
                            <option value="8300589162">SCHOOL SECURITY LTDA</option>
                            <option value="8300594958">ESCORT SECURITY LTDA</option>
                            <option value="8300703391">ACADEMIA DE SEGURIDAD Y VIGILANCIA COGNOSEGURIDAD LTDA</option>
                            <option value="8300703470">ACADEMIA SUPERIOR DE VIGILANCIA Y SEGURIDAD PRIVADA EL CONDOR LTDA</option>
                            <option value="8300833785">ACADEMIA DE SEGURIDAD PRIVADA MARSHALS SERVICE LTDA</option>
                            <option value="8301012190">ACADEMIA COLOMBIANA DE PROFESIONALES EN SEGURIDAD LTDA</option>
                            <option value="8301073924">ACADEMIA DE FORMACION EN SEGURIDAD COLOMBO LATINA LTDA</option>
                            <option value="8301283282">SEGURED LTDA</option>
                            <option value="8320104907">ACADEMIA DE CAPACITACION EN SEGURIDAD Y VIGILANCIA ELITE LTDA</option>
                            <option value="8440009188">ESCUELA DE CAPACITACION PARA LA FORMACION DE VIGILANTES Y ESCOLTA ESCAVIG LTDA</option>
                            <option value="9000145891">CENTRO EDUCATIVO INTEGRAL EN SEGURIDAD LTDA</option>
                            <option value="9000172529">ACADEMIA NACIONAL DE ENTRENAMIENTO EN VIGILANCIA Y SEGURIDAD PRIVADA AESS LIMITADA</option>
                            <option value="9000235313">ACADEMIA DE CAPACITACION EN SEGURIDAD SANTACRUZ LTDA</option>
                            <option value="9000296358">CLAVE ANSP LTDA. ACADEMIA NACIONAL DE SEGURIDAD PRIVADA</option>
                            <option value="9000366332">CENTRO INTELIGENTE PARA LA VIGILANCIA Y LA SEGURIDAD PRIVADA CISEP LTDA</option>
                            <option value="9000542984">ACADEMIA NACIONAL DE VIGILANCIA Y SEGURIDAD PRIVADA LOS NOGALES LTDA</option>
                            <option value="9001757802">ESCUELA DE CAPACITACION EN VIGILANCIA Y SEGURIDAD PRIVADA RAMSES LTDA</option>
                            <option value="9002025368">CENTRO DE FORMACION EN VIGILANCIA Y SEGURIDAD PRIVADA CEFORVIG LIMITADA</option>
                            <option value="9002966351">INGESLINGAS SAS</option>
                            <option value="9003071865">ESCUELA DE CAPACITACION Y ENTRENAMIENTO LA CIENCIA DE LA SEGURIDAD LIMITADA</option>
                            <option value="9003345508">CENTRO DE ALTO RENDIMIENTO DE CAPACITACION EN SEGURIDAD PRIVADA LTDA</option>
                            <option value="9003365822">COLOMBIAN SECURITY ACADEMY LTDA</option>
                            <option value="9003763605">M & S CAPACITACIONES EN SEGURIDAD LTDA</option>
                            <option value="9004963237">SECURITY CENTER AAA LTDA</option>
                            <option value="9005108808">ACADEMIA DE SEGURIDAD PARA VIGILANTES ESCOLTAS Y SUPERVISORES A.S.V.E.S. LTDA</option>
                            <option value="9005520114">CENTRO DE ESTUDIOS ESPECIALIZADOS EN SEGURIDAD PRIVADA CEESP</option>
                    </select>
                </div>
                <div class="col">
                    <label for="estado_civil" class="control-label">Nivel de Seguridad</label>
                    <select class="form-control" id="niv" name="niv" placeholder="Nivel" >
                        <option value="0"></option>
                        <option value="2303">ESPECIALlZACION ESCOLTA MANEJO DEFENSIVO</option>
                        <option value="2302">ESPECIALlZACION ESCOLTA MERCANCIAS</option>
                        <option value="2305">ESPECIALlZACION ESCOLTA PROTECCION A DIGNATARIOS</option>
                        <option value="2304">ESPECIALlZACION ESCOLTA TRANSPORTE VALORES</option>
                        <option value="5306">ESPECIALlZACION MANEJADOR CANINO BUSQUEDA y RESCATE</option>
                        <option value="5302">ESPECIALlZACION MANEJADOR CANINO DEFENSA CONTROLADA</option>
                        <option value="5303">ESPECIALlZACION MANEJADOR CANINO DETECCION EXPLOSIVOS</option>
                        <option value="5305">ESPECIALlZACION MANEJADOR CANINO DETECCION MONEDA</option>
                        <option value="5304">ESPECIALlZACION MANEJADOR CANINO DETECCION NARCOTICOS</option>
                        <option value="5301">ESPECIALlZACION MANEJADOR CANINO SUPERVISOR</option>
                        <option value="4301">ESPECIALlZACION MEDIOS TECNOLOGICOS COORDINADOR</option>
                        <option value="4302">ESPECIALlZACION MEDIOS TECNOLOGICOS INSTALADOR</option>
                        <option value="3301">ESPECIALlZACION SUPERVISORES AEROPORTUARIA</option>
                        <option value="3303">ESPECIALlZACION SUPERVISORES COMERCIAL</option>
                        <option value="3304">ESPECIALlZACION SUPERVISORES EDUCATIVA</option>
                        <option value="3313">ESPECIALlZACION SUPERVISORES ENTIDADES OFICIALES</option>
                        <option value="3305">ESPECIALlZACION SUPERVISORES EVENTOS PUBLlCOS</option>
                        <option value="3315">ESPECIALlZACION SUPERVISORES GRANDES SUPERFICIES</option>
                        <option value="3306">ESPECIALlZACION SUPERVISORES HOSPITALARIA</option>
                        <option value="3308">ESPECIALlZACION SUPERVISORES INDUSTRIAL</option>
                        <option value="3310">ESPECIALlZACION SUPERVISORES MEDIOS TECNOLOGICOS</option>
                        <option value="3314">ESPECIALlZACION SUPERVISORES MINERA</option>
                        <option value="3311">ESPECIALlZACION SUPERVISORES PETROLERA</option>
                        <option value="3307">ESPECIALlZACION SUPERVISORES PORTUARIA</option>
                        <option value="3309">ESPECIALlZACION SUPERVISORES RESIDENCIAL</option>
                        <option value="3302">ESPECIALlZACION SUPERVISORES SECTOR FINANCIERO</option>
                        <option value="3316">ESPECIALlZACION SUPERVISORES TRANSPORTE MASIVO</option>
                        <option value="3312">ESPECIALlZACION SUPERVISORES TURISTICA</option>
                        <option value="1301">ESPECIALlZACION VIGILANCIA AEROPORTUARIA</option>
                        <option value="1303">ESPECIALlZACION VIGILANCIA COMERCIAL</option>
                        <option value="1304">ESPECIALlZACION VIGILANCIA EDUCATIVA</option>
                        <option value="1312">ESPECIALlZACION VIGILANCIA ENTIDADES OFICIALES</option>
                        <option value="1305">ESPECIALlZACION VIGILANCIA EVENTOS PUBLlCOS</option>
                        <option value="1314">ESPECIALlZACION VIGILANCIA GRANDES SUPERFICIES</option>
                        <option value="1306">ESPECIALlZACION VIGILANCIA HOSPITALARIA</option>
                        <option value="1308">ESPECIALlZACION VIGILANCIA INDUSTRIAL</option>
                        <option value="1313">ESPECIALlZACION VIGILANCIA MINERA</option>
                        <option value="1310">ESPECIALlZACION VIGILANCIA PETROLERA</option>
                        <option value="1307">ESPECIALlZACION VIGILANCIA PORTUARIA</option>
                        <option value="1309">ESPECIALlZACION VIGILANCIA RESIDENCIAL</option>
                        <option value="1302">ESPECIALlZACION VIGILANCIA SECTOR FINANCIERO</option>
                        <option value="1315">ESPECIALlZACION VIGILANCIA TRANSPORTE MASIVO</option>
                        <option value="1311">ESPECIALlZACION VIGILANCIA TURISTICA</option>
                        <option value="2101">FUNDAMENTACION ESCOLTA</option>
                        <option value="5105">FUNDAMENTACION MANEJADOR CANINO ENFASIS EN BUSQUEDA y RESCATE</option>
                        <option value="5103">FUNDAMENTACION MANEJADOR CANINO ENFASIS EN DEFENSA</option>
                        <option value="5104">FUNDAMENTACION MANEJADOR CANINO ENFASIS EN EXPLOSIVOS</option>
                        <option value="5102">FUNDAMENTACION MANEJADOR CANINO ENFASIS EN MONEDA</option>
                        <option value="5101">FUNDAMENTACION MANEJADOR CANINO ENFASIS EN NARCOTICOS</option>
                        <option value="4101">FUNDAMENTACION MEDIOS TECNOLOGICOS</option>
                        <option value="3101">FUNDAMENTACION SUPERVISORES</option>
                        <option value="1101">FUNDAMENTACION VIGILANCIA</option>
                        <option value="2403">PROFUNDIZACION ESCOLTA MANEJO DEFENSIVO</option>
                        <option value="2402">PROFUNDIZACION ESCOLTA MERCANCIAS</option>
                        <option value="2401">PROFUNDIZACION ESCOLTA PERSONAS</option>
                        <option value="2405">PROFUNDIZACION ESCOLTA PROTECCION A DIGNATARIOS</option>
                        <option value="2404">PROFUNDIZACION ESCOLTA TRANSPORTE VALORES</option>
                        <option value="5406">PROFUNDIZACION MANEJADOR CANINO BUSQUEDA y RESCATE</option>
                        <option value="5402">PROFUNDIZACION MANEJADOR CANINO DEFENSA CONTROLADA</option>
                        <option value="5403">PROFUNDIZACION MANEJADOR CANINO DETECCION EXPLOSIVOS</option>
                        <option value="5405">PROFUNDIZACION MANEJADOR CANINO DETECCION MONEDA</option>
                        <option value="5404">PROFUNDIZACION MANEJADOR CANINO DETECCION NARCOTICOS</option>
                        <option value="5401">PROFUNDIZACION MANEJADOR CANINO SUPERVISOR</option>
                        <option value="4401">PROFUNDIZACION MEDIOS TECNOLOGICOS COORDINADOR</option>
                        <option value="4402">PROFUNDIZACION MEDIOS TECNOLOGICOS INSTALADOR</option>
                        <option value="3401">PROFUNDIZACION SUPERVISORES AEROPORTUARIA</option>
                        <option value="3403">PROFUNDIZACION SUPERVISORES COMERCIAL</option>
                        <option value="3404">PROFUNDIZACION SUPERVISORES EDUCATIVA</option>
                        <option value="3413">PROFUNDIZACION SUPERVISORES ENTIDADES OFICIALES</option>
                        <option value="3405">PROFUNDIZACION SUPERVISORES EVENTOS PUBLlCOS</option>
                        <option value="3415">PROFUNDIZACION SUPERVISORES GRANDES SUPERFICIES</option>
                        <option value="3406">PROFUNDIZACION SUPERVISORES HOSPITALARIA</option>
                        <option value="3408">PROFUNDIZACION SUPERVISORES INDUSTRIAL</option>
                        <option value="3414">PROFUNDIZACION SUPERVISORES MINERA</option>
                        <option value="3411">PROFUNDIZACION SUPERVISORES PETROLERA</option>
                        <option value="3407">PROFUNDIZACION SUPERVISORES PORTUARIA</option>
                        <option value="3409">PROFUNDIZACION SUPERVISORES RESIDENCIAL</option>
                        <option value="3402">PROFUNDIZACION SUPERVISORES SECTOR FINANCIERO</option>
                        <option value="3416">PROFUNDIZACION SUPERVISORES TRANSPORTE MASIVO</option>
                        <option value="3412">PROFUNDIZACION SUPERVISORES TURISTICA</option>
                        <option value="1401">PROFUNDIZACION VIGILANCIA AEROPORTUARIA</option>
                        <option value="1403">PROFUNDIZACION VIGILANCIA COMERCIAL</option>
                        <option value="1404">PROFUNDIZACION VIGILANCIA EDUCATIVA</option>
                        <option value="1412">PROFUNDIZACION VIGILANCIA ENTIDADES OFICIALES</option>
                        <option value="1405">PROFUNDIZACION VIGILANCIA EVENTOS PUBLlCOS</option>
                        <option value="1414">PROFUNDIZACION VIGILANCIA GRANDES SUPERFICIES</option>
                        <option value="1406">PROFUNDIZACION VIGILANCIA HOSPITALARIA</option>
                        <option value="1408">PROFUNDIZACION VIGILANCIA INDUSTRIAL</option>
                        <option value="1413">PROFUNDIZACION VIGILANCIA MINERA</option>
                        <option value="1410">PROFUNDIZACION VIGILANCIA PETROLERA</option>
                        <option value="1407">PROFUNDIZACION VIGILANCIA PORTUARIA</option>
                        <option value="1409">PROFUNDIZACION VIGILANCIA RESIDENCIAL</option>
                        <option value="1402">PROFUNDIZACION VIGILANCIA SECTOR FINANCIERO</option>
                        <option value="1415">PROFUNDIZACION VIGILANCIA TRANSPORTE MASIVO</option>
                        <option value="1411">PROFUNDIZACION VIGILANCIA TURISTICA</option>
                        <option value="2201">REENTRENAMIENTO ESCOLTA</option>
                        <option value="5205">REENTRENAMIENTO MANEJADOR CANINO ENFASIS EN BUSQUEDA Y RESCATE</option>
                        <option value="5203">REENTRENAMIENTO MANEJADOR CANINO ENFASIS EN DEFENSA</option>
                        <option value="5204">REENTRENAMIENTO MANEJADOR CANINO ENFASIS EN EXPLOSIVOS</option>
                        <option value="5202">REENTRENAMIENTO MANEJADOR CANINO ENFASIS EN MONEDA</option>
                        <option value="5201">REENTRENAMIENTO MANEJADOR CANINO ENFASIS EN NARCOTICOS</option>
                        <option value="4201">REENTRENAMIENTO MEDIOS TECNOLOGICOS</option>
                        <option value="3201">REENTRENAMIENTO SUPERVISORES</option>
                        <option value="1201">REENTRENAMIENTO VIGILANCIA</option>
                        <option value="6101">SEMINARIO ADMINISTRACION DE SERVICIOS DE V.S.P.</option>
                        <option value="6107">SEMINARIO COORDINADORE y DIRECTIVOS INSTALADORES DE EQUIPOS PARA LA VIGILANCIA Y S.P.</option>
                        <option value="6106">SEMINARIO COORDINADORES DE MEDIOS TECNOLOGICOS</option>
                        <option value="6104">SEMINARIO ESPECTACULOS PUBLlCOS</option>
                        <option value="6103">SEMINARIO JEFES DE OPERACION DE EMPRESA DE V.S.P.</option>
                        <option value="6102">SEMINARIO JEFES DE RECURSOS HUMANOS</option>
                        <option value="6105">SEMINARIO JEFES DE SEGURIDAD DE DEPARTAMENTOS</option>
                    </select>

                    <label class="control-label">NRO</label>
                    <input type="text" class="form-control" id="nro" name="nro" placeholder="Fecha Radicado" onkeyup="mayus(this);" required>

                    <label class="control-label">Fecha Vencimiento</label>
                    <input type="date" class="form-control" id="f_vence" name="f_vence" placeholder="Fecha Radicado" required>
                </div>    
            </div>
        </div><br>  <br>                  
        <div class="container">
            <div class="row justify-content-md-center">
                <a href="menu_ingresos.php" class="btn btn-default">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>            
        </div>
    </form><br>
</body>
</html>
<head>
        