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
        <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_persona.php">
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

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ciudad Expedicion</label>
                <div class="col-sm-10">
                    <select class="form-control" id="c_exp" name="c_exp">
                        <option value="SOLTERO">PEREIRA</option>
                        <option value="CASADO">CARTAGO</option>
                        <option value="OTRO">DOSQUEBRADAS</option>
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
                            <option value="PEREIRA">PEREIRA</option>
                            <option value="DOSQUEBRADAS">DOSQUEBRADAS</option>
                            <option value="CARTAGO">CARTAGO</option>
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
                        <option value="MASCULINO">Masculino</option>
                        <option value="FEMENINO">Femenino</option>
                        <option value="OTRO">OTRO</option>
                    </select>
                </div>
            </div>
            <!--<div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-2">
                    <select class="form-control" id="estado" name="estado">
                        <option value="1">ACTIVO</option>
                        <option value="2">INACTIVO</option>
                        
                    </select>
                                           
                </div>-->
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
        
        


    
   
