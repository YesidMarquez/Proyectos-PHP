<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <script src="../js//jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    <!--<link href="../css/style.css" rel="stylesheet">-->
    
</head>
<body><font face="Comic Sans MS,verdana">
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">INGRESO DE PERSONAL</h3>
        </div>
        <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_persona.php" enctype="multipart/form-data">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre_1" name="nombre_1" placeholder="Nombre 1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre_2" name="nombre 2" placeholder="Nombre 2" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellido 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido_1" name="apellido 1" placeholder="Apellido 1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellido 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido_2" name="apellido 2" placeholder="Apellido 2" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Nacimiento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nac" name="nac" placeholder="Fecha Nacimiento" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ciudad Nacimiento</label>
                <div class="col-sm-10">
                    <select class="form-control" id="c_na" name="c_na">
                        <option value="0"></option>
                         <option value="MANIZALES">MANIZALES</option>
                         <option value="ARMENIA">ARMENIA</option>
                         <option value="PEREIRA">PEREIRA</option>
                         <option value="IBAGUE">IBAGUE</option>
                         <option value="CALI">CALI</option>
                         <option value="AGUADAS">AGUADAS</option>
                         <option value="ALCALA">ALCALA</option>
                         <option value="ALPUJARRA">ALPUJARRA</option>
                         <option value="ALVARADO">ALVARADO</option>
                         <option value="AMBALEMA">AMBALEMA</option>
                         <option value="ANDALUCIA">ANDALUCIA</option>
                         <option value="ANSERMANUEVO">ANSERMANUEVO</option>
                         <option value="ANSERMA">ANSERMA</option>
                         <option value="ANZOATEGUI">ANZOATEGUI</option>
                         <option value="APIA">APIA</option>
                         <option value="ARANZAZU">ARANZAZU</option>
                         <option value="ARGELIA">ARGELIA</option>
                         <option value="ARMERO">ARMERO</option>
                         <option value="ATACO">ATACO</option>
                         <option value="BALBOA">BALBOA</option>
                         <option value="BELALCAZAR">BELALCAZAR</option>
                         <option value="BELEN DE UMBRIA">BELEN DE UMBRIA</option>
                         <option value="BOLIVAR">BOLIVAR</option>
                         <option value="BUENAVENTURA">BUENAVENTURA</option>
                         <option value="BUENAVISTA">BUENAVISTA</option>
                         <option value="GUADALAJARA DE BUGA">GUADALAJARA DE BUGA</option>
                         <option value="BUGALAGRANDE">BUGALAGRANDE</option>
                         <option value="CAICEDONIA">CAICEDONIA</option>
                         <option value="CAJAMARCA">CAJAMARCA</option>
                         <option value="CALIMA">CALIMA</option>
                         <option value="CALARCA">CALARCA</option>
                         <option value="CANDELARIA">CANDELARIA</option>
                         <option value="CARTAGO">CARTAGO</option>
                         <option value="CARMEN DE APICALA">CARMEN DE APICALA</option>
                         <option value="CASABIANCA">CASABIANCA</option>
                         <option value="CHAPARRAL">CHAPARRAL</option>
                         <option value="DOSQUEBRADAS">DOSQUEBRADAS</option>
                         <option value="CHINCHINA">CHINCHINA</option>
                         <option value="CIRCASIA">CIRCASIA</option>
                         <option value="COELLO">COELLO</option>
                         <option value="CORDOBA">CORDOBA</option>
                         <option value="COYAIMA">COYAIMA</option>
                         <option value="CUNDAY">CUNDAY</option>
                         <option value="DAGUA">DAGUA</option>
                         <option value="DOLORES">DOLORES</option>
                         <option value="EL AGUILA">EL AGUILA</option>
                         <option value="EL CAIRO">EL CAIRO</option>
                         <option value="EL CERRITO">EL CERRITO</option>
                         <option value="EL DOVIO">EL DOVIO</option>
                         <option value="ESPINAL">ESPINAL</option>
                         <option value="FALAN">FALAN</option>
                         <option value="FILADELFIA">FILADELFIA</option>
                         <option value="FILANDIA">FILANDIA</option>
                         <option value="FLANDES">FLANDES</option>
                         <option value="FLORIDA">FLORIDA</option>
                         <option value="FRESNO">FRESNO</option>
                         <option value="GENOVA">GENOVA</option>
                         <option value="GINEBRA">GINEBRA</option>
                         <option value="GUATICA">GUATICA</option>
                         <option value="GUACARI">GUACARI</option>
                         <option value="GUAMO">GUAMO</option>
                         <option value="HERVEO">HERVEO</option>
                         <option value="HONDA">HONDA</option>
                         <option value="ICONONZO">ICONONZO</option>
                         <option value="JAMUNDI">JAMUNDI</option>
                         <option value="LA CUMBRE">LA CUMBRE</option>
                         <option value="LA DORADA">LA DORADA</option>
                         <option value="LA CELIA">LA CELIA</option>
                         <option value="LA MERCED">LA MERCED</option>
                         <option value="LA VIRGINIA">LA VIRGINIA</option>
                         <option value="LA UNION">LA UNION</option>
                         <option value="LA TEBAIDA">LA TEBAIDA</option>
                         <option value="LA VICTORIA">LA VICTORIA</option>
                         <option value="LERIDA">LERIDA</option>
                         <option value="LIBANO">LIBANO</option>
                         <option value="MANZANARES">MANZANARES</option>
                         <option value="MARSELLA">MARSELLA</option>
                         <option value="MARMATO">MARMATO</option>
                         <option value="MARIQUITA">MARIQUITA</option>
                         <option value="MARQUETALIA">MARQUETALIA</option>
                         <option value="MARULANDA">MARULANDA</option>
                         <option value="MELGAR">MELGAR</option>
                         <option value="MISTRATO">MISTRATO</option>
                         <option value="MURILLO">MURILLO</option>
                         <option value="MONTENEGRO">MONTENEGRO</option>
                         <option value="NATAGAIMA">NATAGAIMA</option>
                         <option value="NEIRA">NEIRA</option>
                         <option value="NORCASIA">NORCASIA</option>
                         <option value="OBANDO">OBANDO</option>
                         <option value="ORTEGA">ORTEGA</option>
                         <option value="PACORA">PACORA</option>
                         <option value="PALOCABILDO">PALOCABILDO</option>
                         <option value="PALMIRA">PALMIRA</option>
                         <option value="PALESTINA">PALESTINA</option>
                         <option value="PENSILVANIA">PENSILVANIA</option>
                         <option value="PIEDRAS">PIEDRAS</option>
                         <option value="PIJAO">PIJAO</option>
                         <option value="PLANADAS">PLANADAS</option>
                         <option value="PRADO">PRADO</option>
                         <option value="PRADERA">PRADERA</option>
                         <option value="PUEBLO RICO">PUEBLO RICO</option>
                         <option value="PURIFICACION">PURIFICACION</option>
                         <option value="QUIMBAYA">QUIMBAYA</option>
                         <option value="QUINCHIA">QUINCHIA</option>
                         <option value="RESTREPO">RESTREPO</option>
                         <option value="RIOSUCIO">RIOSUCIO</option>
                         <option value="RISARALDA">RISARALDA</option>
                         <option value="RIOBLANCO">RIOBLANCO</option>
                         <option value="RIOFRIO">RIOFRIO</option>
                         <option value="RONCESVALLES">RONCESVALLES</option>
                         <option value="ROLDANILLO">ROLDANILLO</option>
                         <option value="ROVIRA">ROVIRA</option>
                         <option value="SALAMINA">SALAMINA</option>
                         <option value="SAMANA">SAMANA</option>
                         <option value="SAN JOSE">SAN JOSE</option>
                         <option value="SAN PEDRO">SAN PEDRO</option>
                         <option value="SALDAÑA">SALDAÑA</option>
                         <option value="SAN ANTONIO">SAN ANTONIO</option>
                         <option value="SAN LUIS">SAN LUIS</option>
                         <option value="SANTA ROSA DE CABAL">SANTA ROSA DE CABAL</option>
                         <option value="SANTA ISABEL">SANTA ISABEL</option>
                         <option value="SANTUARIO">SANTUARIO</option>
                         <option value="SALENTO">SALENTO</option>
                         <option value="SEVILLA">SEVILLA</option>
                         <option value="SUAREZ">SUAREZ</option>
                         <option value="SUPIA">SUPIA</option>
                         <option value="TORO">TORO</option>
                         <option value="TRUJILLO">TRUJILLO</option>
                         <option value="TULUA">TULUA</option>
                         <option value="ULLOA">ULLOA</option>
                         <option value="VALLE DE SAN JUAN">VALLE DE SAN JUAN</option>
                         <option value="VENADILLO">VENADILLO</option>
                         <option value="VERSALLES">VERSALLES</option>
                         <option value="VICTORIA">VICTORIA</option>
                         <option value="VIJES">VIJES</option>
                         <option value="VILLAHERMOSA">VILLAHERMOSA</option>
                         <option value="VILLAMARIA">VILLAMARIA</option>
                         <option value="VILLARRICA">VILLARRICA</option>
                         <option value="VITERBO">VITERBO</option>
                         <option value="YOTOCO">YOTOCO</option>
                         <option value="YUMBO">YUMBO</option>
                         <option value="ZARZAL">ZARZAL</option>
                         
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ciudad Expedicion</label>
                <div class="col-sm-10">
                    <select class="form-control" id="c_exp" name="c_exp">
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
                <label class="col-sm-2 control-label">Tipo sangre</label>
                <div class="col-sm-10">
                    <select class="form-control" id="t_san" name="t_san">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Ciudad/Residencia</label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control" id="c_res" name="c_res" placeholder="Ciudad/Residencia" >
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
                <label for="nombre" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="tel" >
                </div>
            </div>
            
            <div class="form-group">
                <label for="SEXO" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMENINO">FEMENINO</option>
                        <option value="OTRO">OTRO</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="imagen" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-2">
                   
                    <p>Seleccione la Imagen:
                        <input type="file" name="imagen"/>
                    </p>

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
        
        


    
   
