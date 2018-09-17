<html>
  <head>
    <title>Grabar una nueva cita</title>
    <script language="javascript" type="text/javascript">
      function mandar (resultado){
        if (resultado){
          document.formularioNuevaCita.action="grabarNuevaCita.php";
        } else {
           document.formularioNuevaCita.action="index.php";
        }
        document.formularioNuevaCita.submit();
      }
    </script>
  </head>

  <body>
    <?php
// Se incluye el miniscript de tratamiento de fechas
      include ("inc/fechas.php");
// Se muestra la fecha en curso.
      echo ("CITA PARA EL DÍA: ".$diaActual." del ".$mesActual." de ".$annioActual.salto);
	?>
    <form action="" method="post" name="formularioNuevaCita" id="formularioNuevaCita">
	  <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      <table width="500" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td width="73">Hora:</td>
          <td width="427">Cita:</td>
        </tr>
        <tr>
          <td><select name="hora" id="hora">
          <?php
            for ($i=0;$i<24;$i++){
              echo ("<OPTION VALUE='");
              printf ("%02s",$i);
              echo ("'>");
              printf("%02s",$i);
              echo ("</OPTION>".salto);
            }
          ?>
          </select></td>
          <td rowspan="3"><textarea name="asunto" cols="50" rows="5" id="asunto"></textarea></td>
        </tr>
        <tr>
          <td>Minutos:</td>
        </tr>
        <tr>
          <td><select name="minutos" id="minutos">
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
      </table>
      <table width="500" height="44" border="0" cellpadding="0" cellspacing="0">
        <tr align="center">
          <td width="248"><input name="grabarCita" type="button" id="grabarCita" value="Grabar la cita" onClick="javascript:mandar(true);"></td>
          <td width="252"><input name="anularCita" type="button" id="anularCita" value="Cancelar" onClick="javascript:mandar(false);"></td>
        </tr>
      </table>
  </form>
  </body>
</html>
