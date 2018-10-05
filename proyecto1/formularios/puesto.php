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
              <a class="nav-link" href="cursos.php"><img class="menu2" src="../imagenes/iconos/curso.png" title="Cursos"></img></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img class="menu2" src="../imagenes/iconos/puesto.png" title="Puesto"></img></a>
            </li>
                      
             <li class="nav-item">
              <a class="nav-link" href="#"><img  class="menu" src="../imagenes/iconos/cerrar.png" title="Cerrar"></a>
            </li>
          </ul>
        </nav><br>
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">ASOCIACION HOMBRES VS PUESTOS </h3>
        </div>
        <div class="row">
           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <b>Cedula: </b><input type="text" id="campo" name="campo" />
                    <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                </div>
            </form>
        </div>
                    
        <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_puesto.php">
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="Cedula" value="<?php echo $row['id_empleado']; ?>" required readonly="readonly">
                </div>
            </div>
            
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                    
                    <input type="text" class="form-control"  value="<?php echo $row['apellidos']; ?>" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo $row['nombres']; ?>" readonly="readonly">
                </div>
            </div>
            
            <div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Puesto</label>

                    <div class="col-sm-10" >
                        <select class="form-control" id="puesto" name="puesto" placeholder="Puesto" >
                            <option value="0"></option>
                            <option value="22532">ARMERILLO</option>          
                             <option value="22533">SELECCION / RAYOS X</option>         
                             <option value="22531">PLATAFORMA 1</option>            
                             <option value="22528">PLATAFORMA 1</option>            
                             <option value="22529">ARMERILLO</option>           
                             <option value="22530">SELECCIÓN / RAYOS X</option>         
                             <option value="10298">Coordinador Operativo  PEI # 1</option>          
                             <option value="10299">Lider de Control PEI # 1</option>            
                             <option value="10300">Agente de Control Medio Tiempo PEI # 1</option>          
                             <option value="10301">Agente de Control Medio Tiempo PEI # 2</option>          
                             <option value="10302">Agente de Control Medio Tiempo PEI # 3</option>          
                             <option value="10303">Agente de Control Medio Tiempo PEI # 4</option>          
                             <option value="10304">Agente de Control Medio Tiempo PEI # 5</option>          
                             <option value="10305">Agente de Control Medio Tiempo PEI # 6</option>          
                             <option value="10306">Agente de Control Medio Tiempo PEI # 7</option>          
                             <option value="10307">Agente de Control Medio Tiempo PEI # 8</option>          
                             <option value="10308">Agente de Control Medio Tiempo PEI # 9</option>          
                             <option value="10309">Agente de Control Medio Tiempo PEI # 10</option>         
                             <option value="10310">Agente de Control Medio Tiempo PEI # 11</option>         
                             <option value="10311">Agente de Control Medio Tiempo PEI # 12</option>         
                             <option value="4944">OFICINA AVIANCA  CENTRO C. A.</option>            
                             <option value="4946">ENTRADA/ SALIDA DE EQUIPAJES</option>         
                             <option value="4947">PLATAFORMA</option>           
                             <option value="4948">CONTROL - CUSTODIA CARGA Y CORREO HUB PEI</option>            
                             <option value="4949">CONTROL ACCESO HUB PEI</option>           
                             <option value="4950">INSPECTOR - CUSTODIA CARGA Y CORREO ATO PEI</option>          
                             <option value="4956">REFUERZO DE PLATAFORMA</option>           
                             <option value="5153">AUTOGERMANA PEREIRA</option>          
                             <option value="5077">BANCOMPARTIR OFICINA ARMENIA</option>         
                             <option value="5081">BANCOMPARTIR OFICINA PEREIRA 2</option>           
                             <option value="4963">CD PEREIRA RECEPCION</option>         
                             <option value="4967">CD ARMENIA PORTERIA PEATONAL</option>         
                             <option value="4976">CONSERGE CALARCA</option>         
                             <option value="10473">CONSERJE CD ANTIGUO PEREIRA</option>         
                             <option value="5054">BBVA CENTRO ARMENIA</option>          
                             <option value="5058">BBVA LOS ROSALES</option>         
                             <option value="5062">BBVA OFICINA 259</option>         
                             <option value="5066">BBVA OFICINA PRINCIPAL PEREIRA</option>           
                             <option value="5067">BBVA PPAL PLAZA DE BOLIVAR MANIZALES</option>         
                             <option value="5068">BBVA CENTRO TECNOLOGICO LAGO URIBE</option>           
                             <option value="5069">BBVA PINARES (LA REBECA) PEREIRA</option>         
                             <option value="22177">SUPERVISOR / A/C INSP. CATERING PEREIRA</option>         
                             <option value="22178">BAGGAGE MAKE UP (BMU) PEREIRA</option>           
                             <option value="22179">X - RAY PEREIRA</option>         
                             <option value="22180">RAMP PERIMETER PEREIRA</option>          
                             <option value="22181">AIRCRAFT ACCESS CONTROL PEREIRA</option>         
                             <option value="22182">CARGO INSPECTION PEREIRA</option>            
                             <option value="22183">ACCESS CONTROL / SEALS PEREIRA</option>          
                             <option value="22485">OFICINA COPA-PEREIRA</option>            
                             <option value="22390">SEDE ADM / CAV  PEREIRA I</option>           
                             <option value="22391">CAV PEREIRA I</option>           
                             <option value="22392">CAV PEREIRA II</option>          
                             <option value="22393">CCM PEREIRA</option>         
                             <option value="22394">ADMIN. PEREIRA</option>          
                             <option value="5073">E-PAGO PEREIRA</option>           
                             <option value="5085">EXXON MOBIL CARTAGO RESIDENTE</option>            
                             <option value="5086">EXXON MOBIL CARTAGO PLANTA</option>           
                             <option value="5088">EXXON MOBIL CARTAGO RONDA INTERNA</option>            
                             <option value="5136">OFICINA NUEVA EPS PEREIRA</option>            
                             <option value="5140">OFICINA NUEVA EPS ARMENIA</option>            
                             <option value="5144">OFICINA NUEVA EPS MANIZALES</option>          
                             <option value="5149">OFICINA NUEVA EPS ZARZAL</option>         
                             <option value="10438">PORTERIA PLANTA MANIZALES</option>           
                             <option value="10439">OFICINA/BODEGA PLANTA MANIZALES</option>         
                             <option value="10440">RECORREDOR PLANTA MANIZALES</option>         
                             <option value="10436">PORTERIA PLANTA PEREIRA</option>         
                             <option value="10437">AEROPUERTO MATECAÑA</option>         
                             <option value="10494">RECCOREDOR PLANTA PEREIRA</option>           
                             <option value="22361">LOTE II MERCASA/BANCOLOMBIA</option>         
                             <option value="5092">OFICINA(C.A)</option>         
                             <option value="4980">Supervisor Motorizado(C.A)</option>           
                             <option value="4981">Radio Operador  VISE (C.A)</option>           
                             <option value="4983">COORDINADOR(A) ADMINISTRATIVA</option>            
                             <option value="4987">RECORREDOR ARMENIA</option>           
                             <option value="4988">SECRETARIA OFICINA</option>           
                             <option value="4993">RECORREDOR</option>           
                             <option value="4994">TECNICO GERENCIA TECNOLOGICA</option>         
                             <option value="4995">AUXILIAR DE PROGRAMACION</option>         
                             <option value="4996">JEFE DE OPERACIONES</option>          
                             <option value="4997">SEVICIOS GENERALES PEREIRA</option>           
                             <option value="4998">SUPERVISOR MOTORIZADO</option>            
                             <option value="5002">SUPERVISOR MOTORIZADO</option>            
                             <option value="5003">PORTERIA OFICINAS VISE PEREIRA</option>           


                        </select>
                     </div>
            </div>
            <div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Cliente</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="cliente" name="cliente" placeholder="Cliente" >
                            <option value="0"></option>
                             <option value="3773">AEROVIAS DEL CONTINENTE AMERICANO S.A. AVIANCA</option>
                             <option value="3998">AUTOGERMANA SA</option>
                             <option value="3900">BANCO COMPARTIR S.A</option>
                             <option value="3800">BAVARIA S.A.</option>
                             <option value="3871">BBVA COLOMBIA</option>
                             <option value="9428">COMPAÑIA PANAMEÑA DE AVIACION S.A.</option>
                             <option value="3947">COMUNICACION CELULAR S A COMCEL S A</option>
                             <option value="5070">E PAGO DE COLOMBIA S.A.</option>
                             <option value="3938">EXXON MOBIL DE COLOMBIA S.A</option>
                             <option value="3971">NUEVA EPS</option>
                             <option value="10378">ORGANIZACION TERPEL S.A</option>
                             <option value="5089">TROPITIENDAS S.A.S.</option>
                             <option value="3833">VIGILANCIA Y SEGURIDAD LIMITADA</option>

                             <!--<option value="9481">ABECOL DEMOLICIONES Y CONSTRUCCIONES SAS</option>            
                             <option value="6187">AEROLINEAS GALAPAGOS S A  AEROGAL SUCURSAL COLOMBIANA</option>            
                             <option value="6085">AEROREPUBLICA S A</option>            
                             <option value="9419">AEROVIAS DE INTEGRACION REGIONAL SA</option>          
                             <option value="3773">AEROVIAS DEL CONTINENTE AMERICANO S A  AVIANCA</option>           
                             <option value="10331">AGENCIA NACIONAL DE MINERIA</option>         
                             <option value="5306">AGROAVICOLA SAN MARINO S A </option>          
                             <option value="8515">AGROCAMPO S A S </option>         
                             <option value="5567">ALIADAS PARA EL PROGRESO S A S</option>           
                             <option value="6718">ALIANZA FIDUCIARIA S A FIDEICOMISOS</option>          
                             <option value="9208">ALLIED AVIATION COLOMBIANA S A S</option>         
                             <option value="9384">ALMUNDO COM SAS</option>          
                             <option value="9414">ALTURIA SAS</option>          
                             <option value="9216">ARMANDO PIZZA Y POLA S A S</option>           
                             <option value="6089">ASOBANCARIA</option>          
                             <option value="9432">AUTOCOLOMBIA S A S</option>           
                             <option value="3998">AUTOGERMANA SA</option>           
                             <option value="7126">AUTOKOREANA S A S</option>            
                             <option value="7133">AUTOMAS COMERCIAL LTDA</option>           
                             <option value="9406">AUTOMOVILES EXCLUSIVOS S A S</option>         
                             <option value="9312">AVIATECA SOCIEDAD ANONIMA SUCURSAL COLOMBIA</option>          
                             <option value="3900">BANCO COMPARTIR</option>          
                             <option value="3759">BANCO DE LA REPUBLICA</option>            
                             <option value="4417">BANCO POPULAR</option>            
                             <option value="8450">BANCO PROCREDIT COLOMBIA S A</option>         
                             <option value="9308">BARDOT S A</option>           
                             <option value="3800">BAVARIA S A </option>         
                             <option value="3871">BBVA COLOMBIA</option>            
                             <option value="8508">BLUE TOWER PROPIEDAD HORIZONTAL</option>          
                             <option value="8541">BMC BOLSA MERCANTIL DE COLOMBIA S A</option>          
                             <option value="5256">CAJA COLOMBIANA DE SUBSIDIO FAMILIAR COLSUBSIDIO</option>         
                             <option value="8177">CAJA DE COMPENSACION FAMILIAR "COMPENSAR"</option>            
                             <option value="7163">CARACOL TELEVISION S A </option>          
                             <option value="9587">CARBONES DEL CERREJON LIMITED</option>            
                             <option value="4491">CARS  S A S </option>         
                             <option value="6200">CASS CONSTRUCTORES S A S</option>         
                             <option value="8965">CASS CONSTRUCTORES S A S</option>         
                             <option value="10392">CCF CAJASAN</option>         
                             <option value="9199">CDA AUTOMAS LTDA</option>         
                             <option value="5388">CENCOSUD COLOMBIA S A </option>           
                             <option value="5006">CENTRAL DE INVERSIONES S A </option>          
                             <option value="10423">CENTRAL DE INVERSIONES S A - BTA</option>            
                             <option value="10385">CENTRO COMERCIAL CENTRO MAYOR</option>           
                             <option value="8124">CENTRO DE ALTA TECNOLOGIA</option>            
                             <option value="6045">CENTRO MEDICO DE CALI</option>            
                             <option value="10389">CENTRO OFTALMOLOGICO DEL LLANO S A </option>         
                             <option value="6064">CERVECERIA DEL VALLE S A</option>         
                             <option value="4801">CERVECERIA UNION</option>         
                             <option value="8205">CLUB CAMPESTRE LA SABANA</option>         
                             <option value="9373">CODENSA SA ESP</option>           
                             <option value="4395">COLEGIO DE LA CIA DE MARIA LA ENSEÑANZA</option>          
                             <option value="4422">COLFONDOS S A </option>           
                             <option value="9454">COLITALIA TALLERES SAS</option>           
                             <option value="4402">COMBARRANQUILLA S A </option>         
                             <option value="9236">COMPAÑIA COMERCIAL SAN JORGE SAS</option>         
                             <option value="5884">COMPAÑÍA ELÉCTRICA DE SOCHAGOTA  S A  E S P  - C E S</option>         
                             <option value="10425">COMPAÑIA ENERGETICA DE OCCIDENTE S A E S P</option>          
                             <option value="5416">COMPAÑIA ENERGETICA DEL TOLIMA EMPRESA SERVICIOS PUBLICOS</option>            
                             <option value="9428">COMPAÑIA PANAMEÑA DE AVIACION S A </option>           
                             <option value="3947">COMUNICACIÓN CELULAR S A  - COMCEL S A </option>          
                             <option value="10381">COMUNICACIONES Y NEGOCIOS SA</option>            
                             <option value="8159">CONALVIAS S A </option>           
                             <option value="8496">CONGREGACION DE LOS HERMANOS DE LAS ESCUELAS CRISTIANAS</option>          
                             <option value="8154">CONINSA  RAMON H  S A</option>            
                             <option value="10399">CONSORCIO ALIADAS PARA EL PROGRESO</option>          
                             <option value="9401">CONSORCIO BCL CONSTRUCCIONES</option>         
                             <option value="4002">CONSORCIO CONECTIVIDAD VIAL SAN GIL</option>          
                             <option value="9358">CONSORCIO INTERVIAS SC 3</option>         
                             <option value="5563">CONSTRUCTORA LHS S A S</option>           
                             <option value="9388">CONSTRUCTORES Y DISEÑOS MAGER SAS</option>            
                             <option value="6727">COOCERVUNION LTDA</option>            
                             <option value="9450">COOPORACION DE EDUACION TECNOLOGICA COLSUBSIDIO</option>          
                             <option value="10383">CORFERIAS</option>           
                             <option value="10380">CORPORACION DE FERIAS Y EXPOSICIONES SA USUARIO OPERADOR DE ZONA FRANCA</option>         
                             <option value="5343">CORPORACION UNIVERSITARIA PILOTO DE COLOMBIA</option>         
                             <option value="5155">CSS CONSTRUCTORES S.A</option>            
                             <option value="9227">DEAS LTDA</option>            
                             <option value="9258">DESARROLLADORA CC FONTANAR SAS</option>           
                             <option value="9078">DEXSON ELECTRIC S A S</option>            
                             <option value="9477">DORFAN S A S</option>         
                             <option value="8500">DR  JAIME LOMBANA VILLALBA</option>           
                             <option value="5070">E PAGO DE COLOMBIA S A </option>          
                             <option value="10403">ECOPETROL 3008170 VICHADA - META</option>            
                             <option value="8525">EDIFICIO 82 PROPIEDAD HORIZONTAL</option>         
                             <option value="9393">EDIFICIO GUADALUPE PROPIEDAD HORIZONTAL</option>          
                             <option value="8956">EDIFICIO NICOLA</option>          
                             <option value="5536">EMGESA SA ESP</option>            
                             <option value="9232">EMISORA PUNTO CINCO LTDA</option>         
                             <option value="6080">EMPRESA PUBLICA TAME LINEA AEREA DEL ECUADOR TAME EP SUCURSAL COLOMBIA</option>           
                             <option value="9012">EVENTOS ARMANDO RECORDS SAS</option>          
                             <option value="3938">EXXON MOBIL DE COLOMBIA S A</option>          
                             <option value="3966">EXXONMOBIL EXPLORATION COLOMBIA LIMITED</option>          
                             <option value="6885">FIDEICOMISO - FIDUCIARIA CENTRAL</option>         
                             <option value="8545">FIDEICOMISO OPAIN S A  AEROPUERTO EL DORADO</option>          
                             <option value="9223">FIDEICOMISOS BBVA ASSET MANAGEMENT S A SOCIEDAD FIDUCIARIA</option>           
                             <option value="6153">FIDUCIARIA  POPULAR S A</option>          
                             <option value="10332">FINAGRO</option>         
                             <option value="8429">FINCOMERCIO</option>          
                             <option value="10391">FISCALIA GENERAL DE LA NACION</option>           
                             <option value="4027">FISCALIA GENERAL DE LA NACION SECCIONAL SANTANDER</option>            
                             <option value="8149">FISERV COLOMBIA LIMITADA</option>         
                             <option value="9713">FUNDACION CERREJON GUAJIRA INDIGENA</option>          
                             <option value="8529">FUNDACIÓN COLEGIO CELIA DUQUE JARAMILLO</option>          
                             <option value="9531">FUNDACION PROTECCION DE LA JOVEN AMPARO DE NIÑAS</option>         
                             <option value="6426">FUNDACION SOLREIR SOLIDARIDAD, AMOR Y SERVICIO</option>           
                             <option value="6380">GASES DE OCCIDENTE S A  E S P </option>           
                             <option value="6854">GENERADORA UNION S A S</option>           
                             <option value="9443">GRUPO ALMA SOLUCIONES INTEGRALES</option>         
                             <option value="8210">GRUPO LATINO DE PUBLICIDAD COLOMBIA S A S</option>            
                             <option value="8142">HELICOPTEROS NACIONALES DE COLOMBIA S A S </option>           
                             <option value="9462">HITOS URBANOS S A</option>            
                             <option value="9366">HLF COLOMBIA LTDA</option>            
                             <option value="8120">HOBART ANDINA S A S </option>         
                             <option value="3943">HOLCIM COLOMBIA S A</option>          
                             <option value="6051">IMPRESORA DEL SUR-IMPRESUR</option>           
                             <option value="9000">IN THE HOOD S A S</option>            
                             <option value="9212">INDRA  PROYECTO ICBF</option>         
                             <option value="6376">INDUSTRIA GRAFICA LATINOAMERICANA S A</option>            
                             <option value="8038">INMACULADA GUADALUPE Y AMIGOS CIA S A</option>            
                             <option value="8976">INMONOVA S A S</option>           
                             <option value="8988">INVERSIONES ARMANDO FUENTES S A S</option>            
                             <option value="8425">INVERSIONES LA OPERA S A </option>            
                             <option value="10333">INVERSIONES URBANAS Y RURALES S A  "INURBALES"</option>          
                             <option value="5670">J E JAIMES INGENIEROS S A</option>            
                             <option value="4413">JARDIN INFANTIL CARITAS ALEGRES</option>          
                             <option value="8116">JORGE BARON TELEVISION LTDA</option>          
                             <option value="8436">LABORATORIOS PRONABELL</option>           
                             <option value="3925">LEWIS ENERGY COLOMBIA</option>            
                             <option value="6301">LINEAS AEREAS SURAMERICANAS SAS</option>          
                             <option value="9491">LOGICOM DE COLOMBIA S A S</option>            
                             <option value="4561">MALTERIA TROPICAL S A </option>           
                             <option value="5318">MASSY ENERGY COLOMBIA S A S</option>          
                             <option value="8249">MATERIALES ELECTRICOS Y MECANICOS SAS</option>            
                             <option value="9466">MINCIVIL S A</option>         
                             <option value="9244">MULTIPARQUE CREATIVO S A</option>         
                             <option value="3971">NUEVA EPS</option>            
                             <option value="3896">OLEODUCTO CENTRAL S A </option>           
                             <option value="6799">OLEODUCTO COLOMBIA S A  -  ODC</option>           
                             <option value="10378">ORGANIZACION TERPEL S.A</option>         
                             <option value="6422">ORION CONTACT CENTER S A S</option>           
                             <option value="9496">ORTIZO SOCIEDAD ANOMINA</option>          
                             <option value="8356">PATRIMONIO AUTONOMO DE REMANENTES - PAR</option>          
                             <option value="4012">PATRIMONIOS AUTONOMOS ADMINISTRATIVOS POR LA SOC FIDUCIARIA DAVIVIENDA</option>           
                             <option value="9362">PATRIMONIOS AUTONOMOS CREDICORP CAPITAL FIDUCIARIA SA</option>            
                             <option value="10384">PATRIMONIOS AUTONOMOS FIDUCIARIA BOGOTA S A</option>         
                             <option value="9348">PERENCO COLOMBIA LIMITED</option>         
                             <option value="9354">PEYCOMM SAS</option>          
                             <option value="5310">PRIMEVALUESSERVICE S A </option>          
                             <option value="4884">PROMIGAS S A E S P</option>           
                             <option value="3991">PROMIORIENTE S A E S P</option>           
                             <option value="4909">PROMISOL S A S </option>          
                             <option value="10390">PUERTO BUENAVISTA SA</option>            
                             <option value="9204">RENOVADORA DE LLANTAS S A RENOBOY S A</option>            
                             <option value="8984">RETAIL LATAM S A S</option>           
                             <option value="9410">RGS EXPANCION GROUP BTL COLOMBIA LTDA</option>            
                             <option value="5628">ROJAS HERMANOS S A S</option>         
                             <option value="8138">SCANDINAVIA PHARMA LTDA</option>          
                             <option value="9024">SCHNEIDER ELECTRIC DE COLOMBIA S  A</option>          
                             <option value="6795">SEDIAL</option>           
                             <option value="3884">SEGUROS BOLIVAR S A </option>         
                             <option value="3892">SEGUROS COMERCIALES BOLIVAR S A </option>         
                             <option value="8537">SERVICIO DE AVIANCION ALLIED BOGOTA S A S</option>            
                             <option value="8182">SERVIENTREGA S A </option>            
                             <option value="4557">SOCIEDAD PORTUARIA BAVARIA S A </option>          
                             <option value="10424">SOCIEDAD PORTUARIA EL CAYAO S A E S P</option>           
                             <option value="9240">SOLARTE NACIONAL DE CONSTRUCCIONES S A S</option>         
                             <option value="10422">SU TALLER BARRANQUILLA S A S</option>            
                             <option value="8239">SUPERINTENDENCIA DE LA ECONOMIA SOLIDARIA</option>            
                             <option value="4628">SURTIDORA DE GAS DEL CARIBE S A </option>         
                             <option value="4472">SUZUKI MOTOR DE COLOMBIA S A</option>         
                             <option value="6834">TACA INTERNATIONAL AIRLINES S A  SUCURSAL COLOMBIA</option>           
                             <option value="4427">TAMPA CARGO S A S</option>            
                             <option value="6041">TECNODIESEL S A S</option>            
                             <option value="10388">TODELAR</option>         
                             <option value="9458">TODO EN CONSTRUCCIONES CIVILES S A S</option>         
                             <option value="8227">TORRE COLFONDOS</option>          
                             <option value="5410">TOUR VACATION HOTELES AZUL SAS</option>           
                             <option value="6183">TRANS AMERICA AIR LINES S A SUCURSAL COLOMBIA</option>            
                             <option value="6892">TRANSPORTADORA DE METANO E S P S A</option>           
                             <option value="3934">TRANSPORTES TEV S A</option>          
                             <option value="5089">TROPITIENDAS S A S </option>          
                             <option value="9485">UNION TEMPORAL AVENIDA EL RINCON</option>         
                             <option value="6911">UNIVERSIDAD DE ANTIOQUIA</option>         
                             <option value="5815">UNIVERSIDAD DE LA SALLE</option>          
                             <option value="6590">UNIVERSIDAD NACIONAL DE COLOMBIA</option>         
                             <option value="6297">VALDERRAMA BUSTAMANTE MARIA DEL PILAR</option>            
                             <option value="10401">VETRA S A S </option>            
                             <option value="3833">VISE LTDA</option>            
                             <option value="4481">YARA COLOMBIA S A </option>           
                             <option value="5364">ZULUAGA & SOTO S A S</option>!-->         



                        </select>
                     </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Direccion Puesto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dir_pto" name="dir_pto" placeholder="Direccion Puesto" required>
                </div>
            </div>
            <div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Ciudad</label>

                    <div class="col-sm-10" >
                        <select class="form-control" id="ciudad" name="ciudad" placeholder="ciudad" >
                            <option value="0"></option>
                             <option value="6">MANIZALES</option>
                             <option value="19">ARMENIA</option>
                             <option value="20">PEREIRA</option>
                             <option value="23">IBAGUE</option>
                             <option value="24">CALI</option>
                             <option value="43">AGUADAS</option>
                             <option value="54">ALCALA</option>
                             <option value="59">ALPUJARRA</option>
                             <option value="63">ALVARADO</option>
                             <option value="68">AMBALEMA</option>
                             <option value="76">ANDALUCIA</option>
                             <option value="80">ANSERMANUEVO</option>
                             <option value="83">ANSERMA</option>
                             <option value="84">ANZOATEGUI</option>
                             <option value="88">APIA</option>
                             <option value="90">ARANZAZU</option>
                             <option value="101">ARGELIA</option>
                             <option value="103">ARMERO</option>
                             <option value="109">ATACO</option>
                             <option value="115">BALBOA</option>
                             <option value="131">BELALCAZAR</option>
                             <option value="132">BELEN DE UMBRIA</option>
                             <option value="148">BOLIVAR</option>
                             <option value="156">BUENAVENTURA</option>
                             <option value="162">BUENAVISTA</option>
                             <option value="163">GUADALAJARA DE BUGA</option>
                             <option value="165">BUGALAGRANDE</option>
                             <option value="170">CAICEDONIA</option>
                             <option value="174">CAJAMARCA</option>
                             <option value="179">CALIMA</option>
                             <option value="183">CALARCA</option>
                             <option value="184">CANDELARIA</option>
                             <option value="203">CARTAGO</option>
                             <option value="206">CARMEN DE APICALA</option>
                             <option value="213">CASABIANCA</option>
                             <option value="228">CHAPARRAL</option>
                             <option value="231">DOSQUEBRADAS</option>
                             <option value="235">CHINCHINA</option>
                             <option value="256">CIRCASIA</option>
                             <option value="260">COELLO</option>
                             <option value="281">CORDOBA</option>
                             <option value="287">COYAIMA</option>
                             <option value="302">CUNDAY</option>
                             <option value="311">DAGUA</option>
                             <option value="316">DOLORES</option>
                             <option value="323">EL AGUILA</option>
                             <option value="333">EL CAIRO</option>
                             <option value="337">EL CERRITO</option>
                             <option value="344">EL DOVIO</option>
                             <option value="367">ESPINAL</option>
                             <option value="370">FALAN</option>
                             <option value="373">FILADELFIA</option>
                             <option value="374">FILANDIA</option>
                             <option value="375">FLANDES</option>
                             <option value="376">FLORIDA</option>
                             <option value="384">FRESNO</option>
                             <option value="410">GENOVA</option>
                             <option value="413">GINEBRA</option>
                             <option value="432">GUATICA</option>
                             <option value="434">GUACARI</option>
                             <option value="436">GUAMO</option>
                             <option value="463">HERVEO</option>
                             <option value="465">HONDA</option>
                             <option value="469">ICONONZO</option>
                             <option value="482">JAMUNDI</option>
                             <option value="498">LA CUMBRE</option>
                             <option value="504">LA DORADA</option>
                             <option value="507">LA CELIA</option>
                             <option value="512">LA MERCED</option>
                             <option value="526">LA VIRGINIA</option>
                             <option value="528">LA UNION</option>
                             <option value="531">LA TEBAIDA</option>
                             <option value="534">LA VICTORIA</option>
                             <option value="542">LERIDA</option>
                             <option value="547">LIBANO</option>
                             <option value="574">MANZANARES</option>
                             <option value="581">MARSELLA</option>
                             <option value="585">MARMATO</option>
                             <option value="587">MARIQUITA</option>
                             <option value="588">MARQUETALIA</option>
                             <option value="590">MARULANDA</option>
                             <option value="591">MELGAR</option>
                             <option value="597">MISTRATO</option>
                             <option value="602">MURILLO</option>
                             <option value="612">MONTENEGRO</option>
                             <option value="628">NATAGAIMA</option>
                             <option value="629">NEIRA</option>
                             <option value="641">NORCASIA</option>
                             <option value="643">OBANDO</option>
                             <option value="652">ORTEGA</option>
                             <option value="659">PACORA</option>
                             <option value="673">PALOCABILDO</option>
                             <option value="674">PALMIRA</option>
                             <option value="678">PALESTINA</option>
                             <option value="697">PENSILVANIA</option>
                             <option value="703">PIEDRAS</option>
                             <option value="706">PIJAO</option>
                             <option value="717">PLANADAS</option>
                             <option value="722">PRADO</option>
                             <option value="723">PRADERA</option>
                             <option value="735">PUEBLO RICO</option>
                             <option value="756">PURIFICACION</option>
                             <option value="764">QUIMBAYA</option>
                             <option value="765">QUINCHIA</option>
                             <option value="777">RESTREPO</option>
                             <option value="782">RIOSUCIO</option>
                             <option value="788">RISARALDA</option>
                             <option value="789">RIOBLANCO</option>
                             <option value="790">RIOFRIO</option>
                             <option value="796">RONCESVALLES</option>
                             <option value="797">ROLDANILLO</option>
                             <option value="798">ROVIRA</option>
                             <option value="816">SALAMINA</option>
                             <option value="833">SAMANA</option>
                             <option value="839">SAN JOSE</option>
                             <option value="852">SAN PEDRO</option>
                             <option value="853">SALDAÑA</option>
                             <option value="863">SAN ANTONIO</option>
                             <option value="869">SAN LUIS</option>
                             <option value="875">SANTA ROSA DE CABAL</option>
                             <option value="888">SANTA ISABEL</option>
                             <option value="890">SANTUARIO</option>
                             <option value="896">SALENTO</option>
                             <option value="926">SEVILLA</option>
                             <option value="967">SUAREZ</option>
                             <option value="974">SUPIA</option>
                             <option value="1034">TORO</option>
                             <option value="1036">TRUJILLO</option>
                             <option value="1039">TULUA</option>
                             <option value="1055">ULLOA</option>
                             <option value="1061">VALLE DE SAN JUAN</option>
                             <option value="1071">VENADILLO</option>
                             <option value="1073">VERSALLES</option>
                             <option value="1075">VICTORIA</option>
                             <option value="1078">VIJES</option>
                             <option value="1079">VILLAHERMOSA</option>
                             <option value="1086">VILLAMARIA</option>
                             <option value="1088">VILLARRICA</option>
                             <option value="1092">VITERBO</option>
                             <option value="1109">YOTOCO</option>
                             <option value="1110">YUMBO</option>
                             <option value="1115">ZARZAL</option>

                            <option value="RIOFRIO">RIOFRIO</option>


                        </select>
                     </div>
            </div>
             <div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Modalidad</label>

                    <div class="col-sm-10" >
                        <select class="form-control" id="modalidad" name="modalidad" placeholder="Modalidad" >
                            <option value="0"></option>
                             <option value="10092">8HD 8.30A12 14.30A19 LAV - 08:30 A13:30S</option>
                             <option value="1006">24HP 6A18 18A6 (5X5) FLEXIBILIZADO</option>
                             <option value="10448">8HD 8A12-14A18LV- 5HD 9A14S</option>
                             <option value="1000">24HP 6A18 18A6 (6X1)</option>
                             <option value="3002">18HMP 05:00A13:00 - 13:00A23:00 (6X1)</option>
                             <option value="3000">18HMP 04:00A13:00 - 13:00A22:00</option>
                             <option value="3123">18HMP 06:00 A 15:00 - 15:00 A 24:00</option>
                             <option value="2022">20HM 05A15- 15A01LAS- 06A15-15A01D,F</option>
                             <option value="5144">12HNP 18:00A06:00 SIN RELEVO</option>
                             <option value="5052">12HDP 06:00A18:00 (6X1)</option>
                             <option value="4093">13HP 05:00A18:00 SIN RELEVO</option>
                             <option value="4058">13HP 05:00A18:00</option>
                             <option value="1058">24HP 6A18 18A6 4X1-4X2</option>
                             <option value="10049">8HDP 07:00A15:00</option>
                             <option value="4073">13HMP 17:00 A 06:00</option>
                             <option value="5064">12HD 06:00A18:00 LS - F</option>
                             <option value="3005">17HDP 05:00A14:00 - 14:00A22:00 (6X1)</option>
                             <option value="1061">24HP 6A18 18A6 3X3X1</option>
                             <option value="2007">19HMP 6A14 14A01 (6X1)</option>
                             <option value="3100">18HMP 05:00A14:00 - 14:00A23:00 AVA</option>
                             <option value="3102">16HDP 06:00A14:00 - 14:00A22:00 AVA</option>
                             <option value="10127">8HDP 09:00A15:00 - 18:00A20:00 ESPECIAL</option>
                             <option value="10160">7.30HDP 10A14 14.30A18 SINREL</option>
                             <option value="6026">11HDP 10:30A21:30</option>
                             <option value="10039">8HNP 22A6</option>
                             <option value="5099">12HDP 07:30A19:30</option>
                             <option value="5054">12HDP 07:00A19:00</option>
                             <option value="5296">12HD 8A20LAV - 7A11:30 - 15A20:30 SDF</option>
                             <option value="5194">12HD 08:00A20:00 LV - 08:00A16:00 S</option>
                             <option value="6038">11HD 8 A19 LV - 5HD 8 A13 S</option>
                             <option value="3126">18HM 6:00A15:00-15:00 A 24:00LASF</option>
                             <option value="1068">24HP 06:00 A 18:00 - 18:00 A 06:00</option>
                             <option value="1062">24HP 6A14 - 14A22 -22A6(TRIPLETA 2)</option>
                             <option value="3006">17HDP 5A13.30 13:30A22 (6X1)</option>
                             <option value="2010">19HMP 5A14.30 14.30A24 (6X1)</option>
                             <option value="3122">17.30HD 04:30A12:30-12:30A22:00</option>
                             <option value="4066">13HD 5.30A15.30 18A21 LAV 10H SDF</option>
                             <option value="6024">11.15HDP 05:30 A10:45 -13:00A19:00</option>
                             <option value="3013">16HDP 05:00A13:00 - 13:00A21:00</option>
                             <option value="10021">5HDP 14:00A19:00</option>
                             <option value="9049">9MP 21:00 A 06:00</option>
                             <option value="9020">9HDP 08:00 A 17:00</option>
                             <option value="10045">8HDP 06:00A14:00</option>
                             <option value="10048">8HDP 08:00A16:00</option>
                             <option value="4026">14HMP 16:00A22:00 - 22:00A06:00</option>
                             <option value="10143">6HDP 17.30A23.30</option>
                             <option value="2008">13HMP 21A6- 6A10 (6X1)</option>
                             <option value="4004">15HMP 15:00A22:00 - 22:00A06:00</option>
                             <option value="10020">5HMP 18:00A23:00</option>
                             <option value="9039">9:30HD 6:30A8:30-12A19:30LV 12A19S,D,F</option>
                             <option value="3007">17HDP 5A13 13A22 (6X1)</option>
                             <option value="10103">8.30HMP 05:30A09:30 - 14:30A18:00</option>
                             <option value="10053">8HDP 14A22</option>
                             <option value="10093">8HNP 22A6</option>
                             <option value="5090">12HD 10:00A22:00 LS</option>
                             <option value="6022">11:30HDP 06:00 A17.30</option>
                             <option value="3147">18HDP 04:30 A 22:30</option>
                             <option value="3004">17HDP 5A13 13A22 (1RD 1RN)</option>
                             <option value="1144">24HP 6A18 18A6 (5X1-5X2)</option>
                             <option value="1012">24HP 6A18 18A6 (5X2)</option>
                             <option value="3001">18HMP 05:00A14:00 - 14:00A23:00 (6X1)</option>
                             <option value="3128">16HMP 21:00 A 5:00 -5:00 A 13:00</option>
                             <option value="10040">9HD 7:30A12 - 14A17:30 LV ADMINISTRATIVO</option>
                             <option value="1009">24HP 6A18 18A6 (5X5X2)</option>
                             <option value="1018">24HP 6A14 14A22 22A06</option>
                             <option value="10058">8HD 06:00A14:00 LS,F</option>
                             <option value="10985">8HMP 20:00 A 04:00</option>
                             <option value="10007">7HNP 22:00A05:00</option>
                             <option value="1004">24HP 6A18 18A6 (2X2)(FISCALIA-COCA COLA)</option>
                             <option value="7004">10HDP 7:30A17:30</option>
                             <option value="3107">17HMP 06:00 A 14:00 - 14:00 A 23:00</option>
                             <option value="3063">17HM 5:30 A 13:30 - 13:30 A 22:00 LS</option>
                             <option value="3026">16HDP 13:00A21:00 - 21:00A05:00 (5X5X2)</option>
                             <option value="2011">19HMP 4A13 13 A23 (6X1)</option>
                             <option value="3028">16HDP 06:00A22:00 LV (ESC)</option>
                             <option value="1074">24HP 6A18 18A6 (7X6x1)</option>
                             <option value="2006">19 HP 4A14 14A23 (6X1)</option>
                             <option value="3092">17HDP 05:00A14:00 - 14:00A22:00 (6X1)</option>
                             <option value="3093">17HDP 05:00A14:00 - 14:00A22:00 (6X1)</option>
                             <option value="5203">12HD 07:00A19:00LAV</option>
                             <option value="3108">18HMP 05:00 A 14:00 - 14:00 A 23:00</option>
                             <option value="2025">19HMP 5A14 - 14A24</option>
                             <option value="3083">16HDP 06:00A14:00-14:00A22:00 OPAIN PL T</option>
                             <option value="2009">19HMP 4A13.30 13.30A23 (6X1)</option>
                             <option value="6050">11HMP 12A23</option>
                             <option value="7002">10HDP 6:00A16:00</option>
                             <option value="3082">16HDP 06:00A14:00-14:00A22:00 OPAIN PL D</option>
                             <option value="2020">22HMP 03:00 A 15:00 - 15:00 A 01:00</option>
                             <option value="2021">21HMP 04:00 A 14:30 - 14:30 A 01:00</option>
                             <option value="3086">16HDP 05:00A13:00 - 13:00A21:00 TAMPA BG</option>
                             <option value="3074">18HMP 05:00A14:00 - 14:00A23:00 (6X1)</option>
                             <option value="2024">19HMP 4.00 A 13:30 - 13:30 A 23.00</option>
                             <option value="4143">14HDP 05A19</option>
                             <option value="1005">24H 06:00A18:00  - 18:00A06:00 LAV</option>
                             <option value="4021">14HDP 07:00 A 21:00</option>
                             <option value="9012">9HD 8:00 A 17:00 LAV</option>
                             <option value="5089">12HD 10:00A22:00 LS - F</option>
                             <option value="3014">16HDP 06:00A14:00 - 14:00A22:00</option>
                             <option value="5055">12HDP 08:00A20:00</option>
                             <option value="5043">12HD 5:00A17:00 LASF</option>
                             <option value="4032">14HDP 06:00A20:00 LV</option>
                             <option value="10177">6,5HD 07:30 A 14:00 L,M,V</option>
                             <option value="3025">16HDP 12:00A04:00 (6X1)</option>
                             <option value="10146">4HMP 19A23</option>
                             <option value="2027">20HMP 05:00 A15:00 - 19:00 A 05:00</option>
                             <option value="10134">6HDP 6A12</option>
                             <option value="1081">24HP 6A14  14A22  22A06 (ECOPETROL)</option>
                             <option value="2031">22HMP 8:00 A 18:00 -18:00 A 6:00</option>
                             <option value="5308">22HM 05A16-16A24LAV - 13HM 05A18S</option>
                             <option value="5309">22HMP 06:00 A 17:00 -19:00 A 06:00</option>
                             <option value="4168">13HD 06A13-15A21LAV-08A13-15A21 S,D</option>
                             <option value="2037">20HP 02:00 A 12:00-12 A 22:00</option>
                             <option value="6066">11HD 5:3A11:3-15A 20LAV-9A11:3-15A18:3SD</option>
                             <option value="4169">13HD 6A13-14:3A20:3LAV-08A13-14:3A20:3SD</option>
                             <option value="10204">4HDP 11:00 A 15:00</option>
                             <option value="1015">24HP 6A14 14A22 22A06</option>
                             <option value="1014">24HP 6A14 14A22 22A06(TRIPLETA)</option>
                             <option value="1055">24HP 6A18 18A6 5X5X2</option>
                             <option value="10071">8HD 8A12 14A18 LV 4HD 8A12S</option>
                             <option value="5050">12HNP 18:00 A 06:00</option>
                             <option value="1001">24HP 6A18 18A6 (5X5)</option>
                             <option value="10066">8HD 07:00A15:00 LV</option>
                             <option value="5026">12HNP 19:00A07:00</option>
                             <option value="5132">12HNP 18:00A06:00(5X2)</option>
                             <option value="1056">24HP 6A14 - 14A22 -22A6(TRIPLETA)</option>
                             <option value="1065">24HP 6A14 14A22 22A06(TRIPLETA3G)</option>
                             <option value="3015">16HD 06:00A14:00 - 14:00A22:00 LS,F</option>
                             <option value="5095">12HD 09:00A21:00 LS,F</option>
                             <option value="5060">12HDP 10:00A22:00</option>
                             <option value="10043">8HD 08:00A16:00 LV</option>
                             <option value="5051">12HD 07:00A19:00 LAS</option>
                             <option value="10042">8HD 06:00A14:00 LS</option>
                             <option value="5058">12HD 06:00A18:00 S,D,F</option>
                             <option value="10078">8HMP 15A23</option>
                             <option value="5159">12HDP 06:00A18:00 OPAIN PLANA</option>
                             <option value="1090">24HP 6A18 18A6 (6X1)SUPER M GARANTIZADOS</option>
                             <option value="10009">7HD 09:00A16:00 LS, F(ESPECIAL)</option>
                             <option value="5165">12HDP 06:00A18:00 SUPER M GARANTIZADO</option>
                             <option value="5179">12HD 06:00A18:00 LS GARANTIZADO</option>
                             <option value="10065">8HD 8:00A12:00 - 14:00A18:00 LV</option>
                             <option value="1102">24HP 6A18 18A6 4X4X2 SUPERVISORES MOTO</option>
                             <option value="10174">9HD 7:30A12 - 14A17:30 LV ADMINISTRATIVO</option>
                             <option value="1103">24HP 6A18 18A6 3X3X1 GARANTIZADO MOTO</option>
                             <option value="10050">8HD 08:00A16:00 LS</option>
                             <option value="5169">12HDP 06:00A18:00 MOTORIZADO</option>
                             <option value="1104">24HP 6A18 18A6 (7X6) SUPERVISORES MOTO</option>
                             <option value="1017">24HP 6A18 18A6 (3X3X3)(ANTIGUA CONTRATA)</option>
                             <option value="10998">8HD 8A12-14A18LAV - 09:00 A 13:00 S</option>
                             <option value="10069">8HD 8A16 LASF</option>
                             <option value="10003"> 7HD 7:00 A 14:00LAJ-4HD 07:00A11:00V</option>
                             <option value="5015">12HD 06:00A18:00 LS</option>
                             <option value="1066">24HP 6A18 18A6 (5X1X7X1) PLANA</option>
                             <option value="1073">24HP 6A18 18A06(7X5X2)</option>
                             <option value="7061">1OHDP 08:00 A 16:00</option>
                             <option value="3095">16HDP 6A14 - 14A22</option>
                             <option value="10081">8HDP 12A20</option>
                             <option value="5232">12HD 7:00A19:00LAS (NOMINA PLANA)</option>
                             <option value="10052">8HDP 10:00A18:00</option>
                             <option value="10095">8HDP 09:00A17:00</option>
                             <option value="10041">8HD 09:00A17:00 LS</option>
                             <option value="10197">8HD 6:00 A14:00 SABADOS</option>
                             <option value="10046">8HDP 06:00A14:00 LV</option>
                             <option value="10083">8HD 8A12 14A18 LV  S(ESPECIAL)</option>
                             <option value="5193">12HNP 18:00 A 06:00</option>
                             <option value="1152">24HP 6A14 14A22 22A06 (6X1)</option>
                             <option value="1050">24HP 6A18 18A6 (6X6X3)</option>
                             <option value="5206">12HD 06:00A18:00 LV -06:00A14:00 S(UDEA)</option>
                             <option value="3016">16HDP  06:00A22:00</option>
                             <option value="1036">24HM 6A18-18A6 SDYF-12H18A 6 V BANCO POP</option>
                             <option value="5034">12HD 06:00A18:00 DV,F</option>
                             <option value="5171">12HMP 12 A 24</option>
                             <option value="5174">12HDP 06:00A18:00 PLANA SPV</option>
                             <option value="10141">3HD 11:00A14:00 LS - F</option>
                             <option value="1154">24HP 6A18 18A6 (7X6x1) (SUP. CHÍA)</option>
                             <option value="5173">12HD 06:00A18:00 LS PLANA UNSALLE</option>
                             <option value="1135">24HP 6A18 18A6  (6X1)BANCO POPULAR</option>
                             <option value="7069">10HDP 06:00 A 16:00</option>
                             <option value="4002">15HDP 06:00A21:00</option>
                             <option value="5056">12HD 08:00 A 20:00 LS</option>
                             <option value="10215">8HD 12:00 A 20:00 LASF</option>
                             <option value="10097">8HD 11A19 LASF</option>
                             <option value="10075">8HD 10:00A18:00 LS,F</option>
                             <option value="10032">3HDP 11A14</option>
                             <option value="3023">16HD  06:00A14:00 - 14:00A22:00LS</option>
                             <option value="10108">8HD 12A20 LSF</option>
                             <option value="10209">8HD 10A18LASF</option>
                             <option value="1076">24HP 6A18-18A6 5x2 OPAIN PLAN</option>
                             <option value="10165">8HD 7.30A12-14A17.30 ADMIN OPAIN</option>
                             <option value="10162">8HD 7.30A12 14A17.30 LAV ADMIN OPAIN</option>
                             <option value="1078">24HP 6A18 18A6 (2X2) OPAIN PLANA</option>
                             <option value="10008">7HD 08:00A15:00 LS</option>
                             <option value="7003">10HD 7:00A17:00 LS ESCOLTA</option>
                             <option value="3036">14HMP 8A14 14A22 PLANA LIDER SPV TAM</option>
                             <option value="5014">12HD 06:30A18:30 LV 6A14S</option>
                             <option value="3012">16HDP 06:00A14:00 - 14:00A22:00(6X1)</option>
                             <option value="10027">4HDP 10A14</option>
                             <option value="10064">8HD 07:00A15:00 LS</option>
                             <option value="3011">16HD 06:00A14:00 - 14:00A22:00 LV</option>
                             <option value="5184">12HD 06:00 A 18:00 LAS</option>
                             <option value="5087">12HD 08:00A20:00 S,D,F</option>
                             <option value="7010">10HDP 10:00A20:00</option>
                             <option value="9034">9HD 07:30A16:30 LV</option>
                             <option value="5255">16HD 6A14-14A 22 LV 12HD 6 A 18S</option>
                             <option value="10047">8HDP 09:00A17:00</option>
                             <option value="9010">9HD 08:00A17:00 LS</option>
                             <option value="1178">24HP 06:00A18:00 - 18:00A06:00 (4*2)</option>
                             <option value="7022">9HD 08:00A17:00 LV</option>
                             <option value="5294">12HD 08:00 A 20:00 LSF</option>
                             <option value="5098">12HD 07:00A19:00 LV - 07:00A18:00 F</option>
                             <option value="5075">12HD 07:00A19:00 LS, F</option>
                             <option value="5271">12HD 09A21 LS 9.30 HD 08:30A18 D</option>
                             <option value="5100">12HD 05:00A17:00 LS</option>
                             <option value="1033">24HM 7A19 19A7DV - 22HM 7A17 19A7S</option>
                             <option value="5077">12HD 07:00A19:00 LV - 07:00A17:00 S,F</option>
                             <option value="1022">24HP 6A18 18A6 (7X3 CERREJON)</option>
                             <option value="13251">4HD 06 A 09 - 14 A 15 LS</option>
                             <option value="5195">12HD 06:00A18:00 LS (NOMINA PLANA)</option>
                             <option value="10138">3HD 17:00A20:00 LAV 5HD 8:00A13:00 S</option>
                             <option value="10195">8.5HDLAV 07:30 A 12:00 - 14:00 A 18:00</option>
                             <option value="7082">10HD 08 A 12 - 14 A 20LAV 4HD 09 A 13 S</option>
                             <option value="10025">4HD 8A12 S (ESPECIAL)</option>
                             <option value="7081">10HD 08:00 A 18:00 LAV</option>
                             <option value="5283">12HD 07:00A12:30 13:30A20 LAV</option>
                             <option value="10067">8:30HD 7:30A12:00 - 14:00 A 18:00 LV</option>
                             <option value="10997">8HD 08:00A16:00LAV 4HD 08:00 A 12:00 S</option>
                             <option value="6048">11HD 07:30 A 18:30LAV</option>
                             <option value="9013">9HD 07:30A12:00 - 13:30A18:00 LV</option>
                             <option value="10063">8HD 7.30A12 13.30A17 LAV (ESPECIAL)</option>
                             <option value="1043">24H V-S-D-F</option>
                             <option value="10159">8HD 8A12 14A18VIERNES</option>
                             <option value="10157">5.30HD 8.30A14S</option>
                             <option value="10026">4HD 9A13 S (ESPECIAL)</option>
                             <option value="10057">8HD 08:30A16:30 LV</option>
                             <option value="3077">16HP 06:00A16:00-16:00A22:00</option>
                             <option value="9094">9.30HD 08A12-14A19:30 LV 4HD 9A13 S</option>
                             <option value="10059">8HD 8A12-14A18LAV - 09:00 A 13:00 S</option>
                             <option value="10192">4HD 17A21 LAV - 5.30HD 08:30A14S</option>
                             <option value="9108">9HD 07:30A12-14A:16:30 LAV-4HD 09A13 S</option>
                             <option value="7103">10HD 07A12-14A19LAV- 08:30A13:30 S</option>
                             <option value="10035">3HD 17A20 LAV S(ESPECIAL)</option>
                             <option value="10115">8HD 7A12 14A17 LAV (ESPECIAL)</option>
                             <option value="10005">7:30HD 08:00A12:30 - 14:00A17:00 LV</option>
                             <option value="10144">6HD 08:30A14:30 S</option>
                             <option value="10004">7HD 10A17 S (ESPECIAL)</option>
                             <option value="7100">10.5HD 8A18:30 LAV - 6HD 8A14S</option>
                             <option value="10038">2HD 17:30A19:30 LV - 6HD 10:00 A 16:00 S</option>
                             <option value="10150">2HD 17.30A19.30 LAV 7HD 10A17 S</option>
                             <option value="7104">10HD 07A12-14A19LAV- 09:00A13:00 S</option>
                             <option value="10212">2HD 17:30A19:30 LV - 6HD 09 A 13 S</option>
                             <option value="10073">8HDP 08:00A12:00 - 14:00A18:00</option>
                             <option value="10200">8HD 7:45 A 12:15 - 13:45 A 17:15 L AV</option>
                             <option value="10201">8HD 8A12-14A18LV - 13HD 7A20SDF</option>
                             <option value="9097"> 9.30HD 8A12-14:00A19:30LV - 6HD 9A15S</option>
                             <option value="7001">10HD 7:30A17:30 LV</option>
                             <option value="10139">2HD 18A20 LAV</option>
                             <option value="10019">5HD 09:00A14:00 S</option>
                             <option value="4000">15HD 06:00A21:00 LV</option>
                             <option value="10037">2.30HD 17A19.30 LAV S(ESPECIAL)</option>
                             <option value="10015">6:30HD 08:30A15:00 S-2:30HD 17:30A20 LV</option>
                             <option value="5079">12HD 08:00A20:00 LV - 08:30A15:00 S</option>
                             <option value="10990">2:30HD 17:30A20 LAV 08:30A15:00 S</option>
                             <option value="9105">9HD 8:30A17:30 LAV</option>
                             <option value="5293">12HD 08:30A20:30 LAV</option>
                             <option value="10101">8.5HD 7.30A12.30 13.30A17 LAV</option>
                             <option value="6063">11HD 8:00 A 19:00LAV - 4HD 09A13:00S</option>
                             <option value="7021">10HD 08:00A18:00 LV - 4HD 09:00A13:00 S</option>
                             <option value="1086">24HP 6A14 14A22 22A06 (2X2X2X1) OCENSA</option>
                             <option value="1148">24HP 22A06 14A22 6A14(LEWIS)</option>
                             <option value="3115">16HDP 06:00A14:00-14:00A22:00(2x2)OCENSA</option>
                             <option value="5204">12HD 06:00A14:00-14:00A18:00 LAS(OCENSA)</option>
                             <option value="1045">24HP 06A14 - 14A22 -22A6 LS (ROTA)</option>
                             <option value="1087">24HP 14A22 6A14 22A6 (2X2X2X1) OCENSA</option>
                             <option value="3132">16HD 6A14-14A22 LV 07HD 07 A 14 DOS FINE</option>
                             <option value="3041">16HP 14A22 22A6</option>
                             <option value="9009">9HD 7:30A16:30LV - 5HD 8:00A13:00S</option>
                             <option value="9008">9HD 8A17LV- 5HD 8A13S</option>
                             <option value="9014">9HD 8A17 LV 5HD 8A13 S(ULTIMO DEL M)</option>
                             <option value="9038">9:30HD 08:00A17:30 LV - 08:00A13:00 S</option>
                             <option value="1038">24HM 6A18 - 18A6 LAV  8HD 6:00 A 14:00 S</option>
                             <option value="9028">9HD 07:30A16:30 LV - 07:30 A 12:00 S</option>
                             <option value="9017">9HD 8A17LV - 4HD 9A13S</option>
                             <option value="1164">24HP 6A14-14A22-22A06(LEWIS)</option>
                             <option value="5167">12HDP 06 A18 (15X15)GARANTIZADO LEWIS</option>
                             <option value="1153">24HP 06A14-14A22-22A06 (ROTADA LEWIS)</option>
                             <option value="1083">24HP 6A18 18A6 (3X3X3) CERREJON</option>
                             <option value="1150">24HP 6A14  14A22  22A06 (2X2X2X1) LEWIS</option>
                             <option value="1035">24HM 6A18 18A6 LS</option>
                             <option value="1122">24HP 6A18 18A6 (5X2) EXXON</option>
                             <option value="10060">8HD 09:00A17:00 LV</option>
                             <option value="7000">10HD 7:00A17:00 LV</option>
                             <option value="1113">24HP 6A14 14A22 22A06</option>
                             <option value="5298">12HMP 03:00 A 15:00</option>
                             <option value="1120">24 HP 6A18  18A6 (5x5x5) EXXONMOBIL</option>
                             <option value="5237">12HN 18:00A06:00LS- 24H 6A18-18A6DF</option>
                             <option value="1137">24HP 6A18 18A6 (3X3X3)(EXXON EXPLRATI)</option>
                             <option value="1168">24HP 06A18-18A06 (GARANTIZADO ESCOLTA)</option>
                             <option value="1044">24H 06A14 - 14A22 -22A6 LS</option>
                             <option value="1117">24HP 06A14-14A22-22A06 (EXXONMOBIL)</option>
                             <option value="5256">12HD 07:00 A 17:00 LM J V - 13HD 06</option>
                             <option value="3020">16HDP  6A14 14A22 LV - 8HD 6A14 S</option>
                             <option value="1140">24HP 6A18-18A6 (2X2)</option>
                             <option value="5063">12HMP 05:00A17:00</option>
                             <option value="13634">18HM 6:00A18:00- 18:00A24:00 LAS</option>
                             <option value="5046">12:30HD 07:00A19:30 LV - 09:00A15:30 S</option>
                             <option value="6062">11HD 8A19LV - 6.5HD 8A14:30S</option>
                             <option value="6054">11.5HD 7:30A19 LV - 5HD 8:30A13:30S</option>
                             <option value="7102">10.75HD 7:45A18:30LAV-7:45A13:30 S</option>
                             <option value="7099">10.5HD 7:30A18LV- 7:30A14:30S-09A13:30D</option>
                             <option value="13397">12HD 7A19LV - 6.5HD 7:30A14 - 7HD 8:30A1</option>
                             <option value="6055">11.5HD 7:30A19 LV - 6HD 7:30A13:30 S</option>
                             <option value="6057">11.5HD 7:30A19LV  -  6.5HD 8A14:30S</option>
                             <option value="6056">11.5HD 7:30A19 LV - 6HD 8A14S</option>
                             <option value="6061"> 11HD 7:30A18:30LV  -  6HD 7:30A13:30S</option>
                             <option value="7101">10.5HD 8A18:30 LAV - 6.5HD 07:30A14S</option>
                             <option value="5166">12HD 07:00A19:00 LV (PLANA NUEVA EPS)</option>
                             <option value="5114">12HD 7A19LV -  8A13:30S (NÓMINA PLANA)</option>
                             <option value="5176">12HD 07A19 L AV-08 A13 S NUEVA EPS PLANA</option>
                             <option value="7065">10HD 7:00A17:00 LV PLANA BLUET Y NUEVA E</option>
                             <option value="1084">24HP 6A18 -18A6 (2X2) PROMIGAS - NUEVA E</option>
                             <option value="1139">24HP 6A18-18A6 (2X2) (NÓMINA PLANA)</option>
                             <option value="5231">12HDP 06:00 A 18:00 (GARANTIZADO ESCOLTA</option>
                             <option value="5252">12HD 7A19 LAV- 8HD 8A16 S</option>
                             <option value="5020">12HD 06:00A18:00 LV - 06:00A14:00 S</option>
                             <option value="5076">12HD 06:00A18:00 LV - 07:00A17:00 S</option>
                             <option value="10989">8HD 8:00 A16:00 D</option>
                             <option value="7072">10HD 7:00A17:00 LV - 6HD 07:00A13:00 S</option>
                             <option value="5284">12HD 09A21 S 12HD 08A20 DF</option>
                             <option value="3094">16HDP 06:00A14:00 - 14:00A22:00</option>
                             <option value="4121">13HM 18A07LAV-12:30A18-18A06S-24H06A18-1</option>
                             <option value="5053">12HD 06:00A18:00 LAV</option>
                             <option value="5062">12HD 06:00A18:00 D,F</option>
                             <option value="7009">10:30HD 7:30A18:00 LV</option>
                             <option value="10084">8HD 8A16 SDF</option>
                             <option value="1114">24HP 6A14-14A22-22A6 BANCO POPULAR PLANA</option>
                             <option value="5010">12HD 07:00A19:00 LV(FISCALIA-COCA COLA)</option>
                             <option value="6021">11HD 7A18 LV - 5HD 7A12 S</option>
                             <option value="10011">13HD 6:30 A 19:30 LAV (ESPECIAL)</option>
                             <option value="10988">7HD 07:00 A 10:00 - 16:00 A 20:00 LAV</option>
                             <option value="5247">12HN 19A7LV</option>
                             <option value="5245">12HD 6A18LV</option>
                             <option value="7007">10HD 8:00A18:00 LAS</option>
                             <option value="6044">11HD 07:00A18:00 LAS(UDEA)</option>
                             <option value="7018">10HD 09:00A19:00 LS</option>
                             <option value="10133">6HD 6A12 D</option>
                             <option value="5123">12HD 06:00A18:00 D</option>
                             <option value="5183">12HD 06:00 A 18:00LAS(SUPER GARAN TAMPA)</option>
                             <option value="1134">24HP 6A18 18A6 (5X5X2) SPV TAMPA GARANT</option>
                             <option value="10202">8HD 10:00 A 18:00 LAS</option>
                             <option value="10203">8HD 7:00 A 15:00 D</option>
                             <option value="10120">8HD 14A22 LAS</option>
                             <option value="7048">10HD 7:00A17:00 LS</option>
                             <option value="5074">12HN 08:00A20:00 LS - F</option>
                             <option value="7106">10HD 9A19 LAS,F</option>
                             <option value="10116">8HD 14A22 LASF</option>
                             <option value="2033">20HM 6:00 A 02:00 LAS</option>
                             <option value="3104">16HD 06:00A14:00 - 14:00A22:00 LS,F PLAN</option>
                             <option value="10098">8HD 07:00A15:00 LS,F</option>
                             <option value="5134">12HDP 10:00A22:00(5X2)</option>
                             <option value="10999">8HN 18:00 A 02:00 LASF</option>
                             <option value="4123">14HMP 16:00 A 06:00</option>
                             <option value="1041">24HM 06:00A18:00 - 18:00A06:00 LAS,F</option>
                             <option value="3076">16HDP 06:00A14:00-14:00A22:00 TAMPA 6*1</option>
                             <option value="3145">16HDP 08:00A16:00 - 16:00A00:00</option>
                             <option value="7045">10:30HD 07:00A17:30 LV PLANA</option>
                             <option value="5265">12HM 16:00 A 05:00 L,S F</option>
                             <option value="13119">8HMP 16 A 00</option>
                             <option value="5066">12HN 18:00A06:00 LS - F</option>
                             <option value="5088">12HN 08:00A20:00 LS PLANA LIDER TAMPA</option>
                             <option value="5035">12HD 07:00A19:00 DV,F</option>
                             <option value="3078">16HD 10:00A18:00-12:00A20:00 TAMPA</option>
                             <option value="3051">16HM 10:00A18:00 - 21:00A05:00 TAMPA</option>
                             <option value="9035">9:30HD 08:00A17:30 LV</option>
                             <option value="3138">16HDP 06A14 16A00</option>
                             <option value="6060">11HD 7:30A18:30 LAV- 7HD 7:30A14:30S</option>
                             <option value="3148">16HD 6A14 14A22 LAV  12HD 6A18 SD</option>
                             <option value="5109">12HN 18:00A06:00 LV - 6A18-18A6 SDF</option>
                             <option value="9106">9.5HD 7:30A17LV  - 4HD 8A12S</option>
                             <option value="5029">12HD 06:00A18:00 LV - 07:00A13:00 S</option>
                             <option value="5094">12H 06:30A18:30 LV</option>
                             <option value="3155">16HD 06:00A22:00LAV -24H06A18-18A06SDF</option>
                             <option value="5147">12HDP 06:00A18:00(5X2)</option>
                             <option value="4165">15HM 17A08LAV -24H 6A18-18A6 SDF</option>
                             <option value="1133">24HP 6A14  14A22  22A06 (2X2X2)</option>
                             <option value="5130">12HNP 18:00A06:00(2X2)</option>
                             <option value="6039">11.30HD  6:30A18 LV - 6.30HD  8:30A</option>
                             <option value="5009">12H 06:30A18:30 LV  08:00A14:00S</option>
                             <option value="4160">14.30HD 7A14-14A21.30LAV- 07A14-14A22S</option>
                             <option value="5022">12HD 10A22 V - 09A21 S - 7A19 D,F</option>
                             <option value="4156">15.5HDP 06:00A14:00-14:00A21:30(PLANA)</option>
                             <option value="10188">8HDP 13:00 A 21:00 (PLANA CENCOSUD)</option>
                             <option value="4158">13HD 7:00A20:00 LAS</option>
                             <option value="10130">6HD 10:00A16:00 D,F</option>
                             <option value="9021">9HD 09:00A18:00 SDF</option>
                             <option value="5057">12HN 18:00A06:00 S,D,F</option>
                             <option value="5239">12HD 6:00A18:00LAV - 9HD 7:00A16:00S</option>
                             <option value="1059">24HP 6A18 18A6 (6X2-6X2)</option>
                             <option value="7011">10HDP 8:00A18:00</option>
                             <option value="1105">24HP 6A18 18A6 6X2X6X2</option>
                             <option value="3156">17HDP 05:00A14:00 - 14:00A22:00 (5X1)</option>
                             <option value="4024">14HDP 08:00A22:00</option>
                             <option value="4062">13HDP 7A20</option>
                             <option value="4041">14HD 6A20 LAS 08A18DF (ESPECIAL)</option>
                             <option value="4162"> 14HM 8A22 LV - 13HD 7A20 S</option>
                             <option value="4014">15HMP 06:00A21:00 LV - 13HD 7A20 S</option>
                             <option value="4086">13HD 08:00A21:00 LV - 6:00A20:00 S</option>
                             <option value="5270">12HD 06A18 LS 12HD 07:30A19:30 DF</option>
                             <option value="3136">16.5HD 5:30A22LAV - 5:30A20S 8A16 D</option>
                             <option value="4138">13HD 6A19LS</option>
                             <option value="9102">9HDP 06A15</option>
                             <option value="4147">13HD 06A12 14A21 LV, 13HD 06A12 13A20 S</option>
                             <option value="5282">12HD 08A20 LV 7.5HD 07:30A15 S</option>
                             <option value="4148">15HD 06A21 LV 14HD 06A20 S</option>
                             <option value="4150">13HD 06A19 L,V 8HD 07A15 S</option>
                             <option value="7026">10HDP 12:00A22:00</option>
                             <option value="4167">13HM LAS 08A21 - 12HD 08A20 D</option>
                             <option value="10054">8HD 8:00 A16:00 S,D</option>
                             <option value="4166">15HM 05:30 A 13:30 - 13:00 A 21:00</option>
                             <option value="5091">12HD 07:00A19:00 LV - 08:00A15:00 S</option>
                             <option value="4033">14HDP 06A20 LV - 06A13 S</option>
                             <option value="3149">16HDP  06:30A14:30 - 14:30A22:30(PLANA)</option>
                             <option value="4008">15HDP 07:00A14:30 - 14:30A22:00</option>
                             <option value="5097">12HDP 06:30A18:30</option>
                             <option value="5124">12HD 9A21V,F- 11:30A23:30S,D</option>
                             <option value="5093">12HMP 11:00A23:00</option>
                             <option value="5073">12HD 10:00A22:00 V,S,D,F</option>
                             <option value="4003">15HMP 08:00A15:30 - 15:30A23:00</option>
                             <option value="10126">8HDP 14A22</option>
                             <option value="10077">8HD 10:00A18:00 LS (PLANA CENCOSUD)</option>
                             <option value="3097">16HDP 06:00A14:00-14:00A22:00 (PLANA)</option>
                             <option value="1166">24HP 6A18 - 18A06 PLANA CENCOSUD</option>
                             <option value="5219">12HD 7A19LV- 6HD 16A22 S (PLANA CENCOSU)</option>
                             <option value="10079">8HD 13:00A21:00 LV</option>
                             <option value="5220">12HDP 10:00A22:00 (PLANA CENCOSUD)</option>
                             <option value="5225">12HDP 09:00 A 21:00 (PLANA CENCOSUD)</option>
                             <option value="5223">12HDP 08:00A20:00 (PLANA CENCOSUD)</option>
                             <option value="3131">17.5HDP 06 A 15 23.30</option>
                             <option value="3062">17HMP 5:30 A 13:30 - 13:30 A 22:30</option>
                             <option value="4136">15HDP 7A22</option>
                             <option value="2015">19:30HDP 06:00A16:00 - 14:00A23:30</option>
                             <option value="5224">12HDP 09:30 A 21:30 (PLANA CENCOSUD)</option>
                             <option value="3144">16HD 06 A 22 D A J 16HM 07A23 VS</option>
                             <option value="4116">14HDP 08A22 (PLANA CENCOSUD)</option>
                             <option value="7083">10HDP 06:30 A 16:30 (PLANA CENCOSUD)</option>
                             <option value="5229">12HNP 18A06 (PLANA CENCOSUD)</option>
                             <option value="4012">15HMP 07:30A22:30</option>
                             <option value="10211">8HN 22:00 A 06:00 DV</option>
                             <option value="12855">9HDP 09.00 A 18.00 (CARREFOUR)</option>
                             <option value="3019">16HDP 7:00A15:00 - 15:00A23:00</option>
                             <option value="4001">15HDP 07A13 - 14A22 (PLANA CENCOSUD)</option>
                             <option value="5061">12HD 07:00A19:00 LV - 07:00A13:00 S</option>
                             <option value="10196"> 8HDP 8A12-13A17 (ESCOL GARANTIZADO)</option>
                             <option value="5305">12HN 18:00 A 06:00 MI A S</option>
                             <option value="5003">12HD 07:00A19:00 LV - 08:00A13:00 S</option>
                             <option value="4124"> 13HD 6A19 LV - 8HD 6A14 S</option>
                             <option value="1130">24HP 6A18 18A6 (12x24)PLANA LA SALLE</option>
                             <option value="3113">16HD  06:00A14:00 - 14:00A22:00LS</option>
                             <option value="3045">16HM 6.30A14.30 14.30A22.30 LAS</option>
                             <option value="7040">10HD 06:30A16:30 LS</option>
                             <option value="7015">10HD 07:00A17:00 LS</option>
                             <option value="3087">16HD 06:00A14:00 - 14:00A22:00 LV UNISAL</option>
                             <option value="5116">12HM 10:30 A 22:30 LAS</option>
                             <option value="5175">12HNP 18:00 A 06:00 SOCHAGOTA</option>
                             <option value="5310">12HN 18A06LAV- 12A22-22A6 S -6A18-18A6DF</option>
                             <option value="10082">8HM 15A23 LASF</option>
                             <option value="10036">2.30HD 11.30A14 LMIVF (ESPECIAL)</option>
                             <option value="3157">3HD 10:30 A 13:30 LMIV</option>
                             <option value="6058">11HD 08A19 LV 8HD 08A12 -13A17 S</option>
                             <option value="7095">10HD 08A18 LV 3HD 09A12 S</option>
                             <option value="1088">24HP 6A14 14A22 22A06 (TRIPLETA ASOBANC)</option>
                             <option value="10085">8HD 8A16 LAV</option>
                             <option value="4054">13HMP 18:00A07:00</option>
                             <option value="4020">14HD 06:00A20:00 LV</option>
                             <option value="5289">12HN 18A06 12HD 06A18 S,D</option>
                             <option value="5243">12HD 06A18 LV 5HD 07:30A12:30 S</option>
                             <option value="6059">11HD 07 A 18:00LV - 5.30HD 8:30 A 14:00S</option>
                             <option value="1027">24HP 7A19 19A7 (7X5X2)</option>
                             <option value="7037">10HD 07:00A17:00 LV - 5HD 07:00A12:00 S</option>
                             <option value="1007">24HP 6A18 18A6 (5X5) EPM (FLEXIB.)</option>
                             <option value="1163">24HP 6A18 18A6 (7X5X2)UDEA</option>
                             <option value="3127">16HD 6A22LV - 11HD 7A18S - 10HD 7A17D</option>
                             <option value="4159">13HN 18A7LAV- 13A07S - 07A19-19A07D,F</option>
                             <option value="6052">11HD06A17 LV, 6HD 07A13 S</option>
                             <option value="5285">12HD 06A18 LV 8HD S 6HD D</option>
                             <option value="13621">12HN 18A06 LAV 24H S,D</option>
                             <option value="4028">14HM 17A7 LV - 24H 6A18 18A6 SDF</option>
                             <option value="4126">13HN 18A7LV-17HM 14A7S-24H 7A19-19A7DF</option>
                             <option value="4145">13HN 18A07 LV 14A06 06A18 S</option>
                             <option value="1052">24HP 6A18 18A6 (6X1X6X1)</option>
                             <option value="10207">8 HM L-V</option>
                             <option value="1155">24HP 6A18 18A6 (7X6x1) (SUP. D.C.)</option>
                             <option value="3022">16HD  6A14 14A22 L,M,MI,F -12HD 6A18 J,V</option>
                             <option value="5007">12HD 11A23D,L,M,MI  24H 11A23 23A11J,V,S</option>
                             <option value="1138">24HP 6A18 18A6 (5X5X3)CLARO</option>
                             <option value="10223">12HD 6A18LV</option>
                             <option value="9101">9HD 11A20 DAJ 12HD 11A23 V.S</option>
                             <option value="9104">9HDP 11A20</option>
                             <option value="11853">12HD 6A18 LVF - 4HD 8A12 S</option>
                             <option value="5117">12HD 08:30A20:30 LS,F - 09:00A18:00 D</option>
                             <option value="5263">12HD 09 A 21 LSF 9HD 09 A 18 D</option>
                             <option value="13011">12HD 08.30 A 20.30 LSF 9HD 09 A 18 D</option>
                             <option value="3039">16HMP 6A18 18A22 LS,F - 9HD 9A18 D</option>
                             <option value="5108">12HDP 08:30 A 20:30</option>
                             <option value="10221">3H 04A07 MARTES</option>
                             <option value="7059">14.5HD 17:30A8LV  12HN 18A06 SDF</option>
                             <option value="5084">12HD 06:00A18:00 LV - 07:00A15:00 S</option>
                             <option value="1176">24H 06A18 - 18A06  LAV - 06A18 S</option>
                             <option value="5004">12HD  06:00A13:00 - 17:00A22:00 LS</option>
                             <option value="10210">8HD 7.30A12 - 13.30A17LV</option>
                             <option value="5041">12HD 07:00A19:00 LV - 07:00A15:00 S</option>
                             <option value="5266">12HD 07.30 A 19.30 LV 7.5HD 07.30 A 15 S</option>
                             <option value="1179">24HP 07:00A18:00 - 18:00A07:00</option>
                             <option value="3141">16HM 06A22 LV 12HD 06A18 SDF</option>
                             <option value="10986">8.5HD 10:00 A 12:00 - 13:00 A  19.30 S</option>
                             <option value="5069">12HD 08:00A20:00 D,F</option>
                             <option value="5287">12HD 07:30 A 19:30 LAS</option>
                             <option value="4094">14HD 6A14 14A20 LV</option>
                             <option value="1077">24HP 5A13-13A21-21A5 OPAIN PLANA DIA</option>
                             <option value="1031">24HP 5A13 13A21 21A5 (3R)</option>
                             <option value="1080">24HP 5A13-13A21-21A5 OPAIN PLANA NOCHE</option>
                             <option value="3080">16HDP 05:00A13:00-13:00A21:00 OPAIN PL D</option>
                             <option value="9103">9HDP 04A13</option>
                             <option value="10117">8HMP 16A24 OPAIN PLANA</option>
                             <option value="3084">16HMP 04:00A12:00-12:00A20:00 OPAIN PL D</option>
                             <option value="10061">8HDMP 5A13</option>
                             <option value="10118">8HMP 4A12 OPAIN PLANA</option>
                             <option value="3133">16HMP 04 A 12 - 12 A 20</option>
                             <option value="6051">11.5HD 06:30A18:00 LV</option>
                             <option value="3134">18HMP 04:00A22:00</option>
                             <option value="12944">19HMP 04:00A13:30-13.30A13:30A23:00OPAIN</option>
                             <option value="4149">14HD 06A20 LV 10HD 06A16 S</option>
                             <option value="10109">8:30HM 18:30A03:00 JVS</option>
                             <option value="10995">8.5HD 18.30 A 03.00 JVS</option>
                             <option value="4140">13HN 18 A 07 S 24 HORAS DF</option>
                             <option value="1042">24HM 6A18-18A06 S,D,F CDA AUTOMAS</option>
                             <option value="7094">10.5HD 7A17:30 LS</option>
                             <option value="10216">8.5HD 18.30 A 03.00 JVS</option>
                             <option value="10993">4.30HD 8:30A13S</option>
                             <option value="5033">12HD 07:00A19:00 S,D,F</option>
                             <option value="10056">8HDP 11A19</option>
                             <option value="10992">8HD 11:00A19:00 SDF</option>
                             <option value="10124">8HD 13:00A21:00 SDF</option>
                             <option value="10987">4HD 12:00 A 16:00 VSD</option>
                             <option value="4154">14HM 17A7 LV  -  24H 6A18-18A6 SDF</option>
                             <option value="5275">12HD 06A18 LV 9HD 06A15 S</option>
                             <option value="10222">8HD 13A21 LAV 09A17 S</option>
                             <option value="4144">13HN 18A07 LV 19HM 12A07SDF</option>
                             <option value="10152">7HDP 11:00A14:00 - 18:00A22:00</option>
                             <option value="7098">10.5HD 08 A 18:30 LASF</option>
                             <option value="10186">4HDP 05:00 A 09:00</option>
                             <option value="10136">6HD 6.30A12.30 LAS</option>
                             <option value="4151">13HNM LAV 24H S,D,F</option>
                             <option value="4135">14HMP 17A7</option>
                             <option value="4091">13HMP 18:00A07:00(5X2)</option>
                             <option value="5288">12HD 8A20 LV 6HD 08A14 S</option>
                             <option value="7097">10HD 09A19 LV 8HD 11A19 S</option>
                             <option value="5142">12HNP 18:00A06:00 (7X3) CERREJON</option>
                             <option value="1172">24HP 06 A 18 - 18 A 06 4*2 CERREJON</option>
                             <option value="3146">18HD 5A14-14A23 L,M,M,V,F</option>
                             <option value="10119">RONDAS</option>
                             <option value="5072">12HMP 20:00A08:00</option>
                             <option value="5303">12HD 06:00A18:00LAS-18:00A06:00 D,F</option>
                             <option value="10018">1HD 10:00A10:30 - 18:30A19:00 LV</option>
                             <option value="3008">17HDP 06:00A14:00 - 14:00A23:00 (6X1)</option>
                             <option value="5248">12HD 10A22VSDF</option>
                             <option value="5307">12HD 06:30A18:30 LV - 4:30 HD 7:30 A12 S</option>
                             <option value="10179">CANINO ANTINARCOTICO</option>
                             <option value="1185">24HP 06A18-18A06 7X7X7 SUPER ECOPETROL</option>
                             <option value="1184">24HP 06A14-14A22-22A06 SUPER ECOPETROL</option>
                             <option value="1092">24HP 6A18 18A6 (6X1) (NÓMINA PLANA)</option>
                             <option value="1151">24HP 6A18 18A6 5X5X2(GARANTIZADA)</option>
                             <option value="1115">24HP 6A18-18A6 PLANA COOMEVA</option>
                             <option value="1141">24HP 6A14 14A22 22A06(PLANA PACIFIC)</option>
                             <option value="1079">24HP 5A13-13A21-21A5 OPAIN PLANA TARDE</option>
                             <option value="1111">24HP 6A18 18A6 (2X2) PLANA BLUETOWER</option>
                             <option value="3110">16HD 06:00 A 14:00 - 14:00 A 22:00 LAV</option>
                             <option value="6025">11HD 7:00A18:00LV - 6HD 7:00 A 13:00S</option>

                            <option value="RIOFRIO">RIOFRIO</option>


                        </select>
                     </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Ingreso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="f_in" name="f_in" placeholder="Fecha Ingreso" required>
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Salida</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="f_sale" name="f_sale" placeholder="Fecha Salida" required>
                </div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="menu_ingresos.php" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>
<head>
        