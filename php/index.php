<html>
  <head>
    <script language="javascript" type="text/javascript">
/* Las siguiente función de JavaScript envía el formulario a la página que corresponda al botón pulsado. */
      function saltar(pagina){
        document.formularioCitasPrincipal.action=pagina;
		document.formularioCitasPrincipal.submit();
      }
/* Aquí termina la función de envío del formulario. */
    </script>
	<title>Mini-agenda</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>

  <body>
    <?php
// Se incluye el miniscript que abre la base de datos.
      include ("inc/fechas.php");
// Se incluye el miniscript de tratamiento de fechas
      include ("inc/usarBD.php");
/* Se crea una consulta para recuperar todos los datos de las citas con fecha del día en curso.
La consulta de selección se crea de tal modo que ordene las citas por la hora. */
      $consulta="SELECT * FROM citas WHERE diacita='".$fechaEnCurso."' ORDER BY horacita;";
/* Se ejecuta la consulta de selección.*/
      $hacerConsulta=mysql_query($consulta, $conexion);
/* Se determina el número de registros recuperados por el cursor, porque si es 0 el
diseño de la página (parte HTML) es diferente que si hay registros. */
      $numeroDeCitasDelDia=mysql_num_rows($hacerConsulta);
      echo ("Citas del día: ".$numeroDeCitasDelDia.salto);
    ?>
    AGENDA DEL D&Iacute;A:
    <?php
/* Se muestra la fecha del día. */
    echo ($diaActual." del ".$mesActual." de ".$annioActual);
	?>
<!-- El formulario no tiene valor en el parámetro action porque se le
asigna por una función javascript antes de enviarlo. La función que se ejecute
y, por tanto, el valor de este parámetro, depende del botón pulsado por el usuario.-->
    <form action="" method="post" name="formularioCitasPrincipal" id="formularioCitasPrincipal">
<!-- El siguiente campo oculto almacena la fecha en curso, obtenida desde PHP.
Este dato se enviará a otros formularios y, a su vez, se rcuperará desde la 
página de cambio de fecha actual. -->
      <input type="hidden" name="fechaEnCurso" id="fechaEnCurso" value="<?php echo($fechaEnCurso); ?>">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr><th>CITAS</th></tr>
      </table>
      <hr>
      <?php
/* Se comprueba si hay citas en el cursor. Si es así, se dibujará una
tabla en la que se mostrarán las citas y unos botones de selección. */
        if ($numeroDeCitasDelDia>0){
          echo ("<table width='500' border='0' cellspacing='0' cellpadding='0'>");
          while ($cita = mysql_fetch_array($hacerConsulta, MYSQL_ASSOC)) {
            echo ("<tr><td>".$cita["horacita"]."</td>");
            echo ("<td>".$cita["asuntocita"]."</td>");
/* Cada cita tiene asociado un botón de selección para si el usuario quiere
modificarla o borrarla. El valor del botón es el identificativo de la cita,
de modo que se usará en las correspondientes consultas de actualización o
eliminación en las páginas que proceda.*/
            echo ("<td><input type='radio' id='citaSeleccionada' name='citaSeleccionada' value='".$cita["idcita"]."'>");
            echo ("</td></tr>");
          }
          echo ("</table>");
/* Si existen citas se mostrarán los botones de borrar y modificar. */
          echo ("<input name='borrarCita' type='button' id='borrarCita' value='Eliminar Cita' onClick='javascript:saltar(\"eliminarCita.php\");'>".salto);
          echo ("<input name='cambiarCita' type='button' id='cambiarCita' value='Modificar cita' onClick='javascript:saltar(\"cambiarCita.php\");'>".salto);
        }
/* En todo caso se mostrarán los botones de agregar cita y cambiar la fecha en curso. */
        echo ("<input name='nuevaCita' type='button' id='nuevaCita' value='Agregar cita' onClick='javascript:saltar(\"agregarCita.php\");'>".salto);
        echo ("<input name='cambiarFecha' type='button' id='cambiarFecha' value='Otro d&iacute;a' onClick='javascript:saltar(\"cambiarFecha.php\");'>".salto);
      ?>
    </form>
  </body>
</html>
