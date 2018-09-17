<?php
/* Si se intenta acceder sin haber seleccionado una cita, se regresa al index. */
  if (!isset($_POST["citaSeleccionada"])) header("Location: index.php");
// Se incluye el miniscript de tratamiento de fechas
  include ("inc/fechas.php");
// Se incluye el miniscript que abre la BBDD.
  include ("inc/usarBD.php");
// Se muestra la fecha en curso.
  echo ("CITA PARA EL DÍA: ".$diaActual." del ".$mesActual." de ".$annioActual.salto);
// Se leen los datos de la cita, en la tabla "citas".
  $consulta="SELECT horaCita, asuntoCita FROM citas WHERE idCita='".$_POST["citaSeleccionada"]."';";
  $hacerConsulta=mysql_query($consulta, $conexion);
/* La lectura anterior devuelve un cursor con un registro y solo uno, dada la cualidad de
clave primaria del campo empleado en la selección. */
  $datosDeLaCita=mysql_fetch_array($hacerConsulta, MYSQL_ASSOC);
/* Se asignan los datos actuales de la cita a variables de memoria, se libera el cursor y se cierrqa la BBDD. */
  $horaActual=substr($datosDeLaCita["horaCita"],0,2);
  $minutoActual=substr($datosDeLaCita["horaCita"],3,2);
  $asuntoActual=$datosDeLaCita["asuntoCita"];
  @mysql_free_result ($hacerConsulta);
  mysql_close($conexion);
?>
<html>
  <head>
    <title>Cambiar una cita existente</title>
    <script language="javascript" type="text/javascript">
/* La siguiente función coloca los datos de la cita actual en los campos del formulario.*/
      function mostrarDatos (){
        document.getElementById("dia").value="<?php echo ($diaActual); ?>";
        document.getElementById("mes").value="<?php echo ($mesActual); ?>";
        document.getElementById("annio").value="<?php echo ($annioActual); ?>";
        document.getElementById("hora").value="<?php echo ($horaActual); ?>";
        document.getElementById("minutos").value="<?php echo ($minutoActual); ?>";
        document.getElementById("asunto").value="<?php echo ($asuntoActual); ?>";
      }
/* La siguiente función envía el formulario a donde proceda.*/
      function mandar (resultado){
        if (resultado){
          document.formularioNuevaCita.action="grabarCambios.php";
        } else {
          document.formularioNuevaCita.action="index.php";
        }
        document.formularioNuevaCita.submit();
      }
    </script>
  </head>

  <body onLoad="javascript:mostrarDatos();">
    <form action="" method="post" name="formularioNuevaCita" id="formularioNuevaCita">
      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      <input type="hidden" name="citaSeleccionada" id="citaSeleccionada" value="<?php echo ($_POST["citaSeleccionada"]); ?>">
	  <table width="500" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td width="44">Fecha:</td>
          <td width="240"><select name="dia" id="dia">
          <?php
            for ($i=1;$i<=31;$i++){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
		  </select>
          /
          <select name="mes" id="mes">
            <option value="01">Enero</option>
            <option value="02">Febrero</option>
            <option value="03">Marzo</option>
            <option value="04">Abril</option>
            <option value="05">Mayo</option>
            <option value="06">Junio</option>
            <option value="07">Julio</option>
            <option value="08">Agosto</option>
            <option value="09">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
          </select>
          /
          <select name="annio" id="annio">
          <?php
            for ($i=2006;$i<=2020;$i++) echo ("<OPTION VALUE='".$i."'>".$i."</OPTION>".salto);
          ?>
          </select></td>
          <td width="40">Hora:</td>
          <td width="144"><select name="hora" id="hora">
          <?php
            for ($i=0;$i<24;$i++){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
          </select>
          :
          <select name="minutos" id="minutos">
          <?php
            for ($i=0;$i<51;$i+=10){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
          </select></td>
        </tr>
        <tr>
          <td colspan="4">Asunto de la cita: </td>
        </tr>
        <tr>
          <td colspan="4"><textarea name="asunto" cols="70" rows="5" wrap="VIRTUAL" id="asunto">
          </textarea></td>
        </tr>
      </table>
      <table width="500" height="44" border="0" cellpadding="0" cellspacing="0">
        <tr align="center">
          <td width="248"><input name="grabarCita" type="button" id="grabarCita" value="Grabar cambios" onClick="javascript:mandar(true);"></td>
          <td width="252"><input name="anularCita" type="button" id="anularCita" value="Descartar los cambios" onClick="javascript:mandar(false);"></td>
        </tr>
      </table>
  </form>
  </body>
</html>
