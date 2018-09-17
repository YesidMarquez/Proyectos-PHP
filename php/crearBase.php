<?php
// Se establece la conexión con el motor de BBDD.
  $conectado=mysql_connect ("localhost", "root", "");
// Se crea una consulta para crear la base de datos, si esta no existe aún.
  $consulta="CREATE DATABASE IF NOT EXISTS agenda;";
  $hacerConsulta=mysql_query ($consulta, $conectado);
// Se selecciona la base de datos recién creada.
  mysql_select_db ("agenda", $conectado);
// Se elimina la tabla, si esta existiera, para poder crearla nueva.
  $consulta="DROP TABLE IF EXISTS citas;";
  $hacerConsulta=mysql_query ($consulta, $conectado);
// Se crea la estructura de la tabla.
  $consulta="CREATE TABLE citas (idcita INT PRIMARY KEY AUTO_INCREMENT,	horacita TIME, diacita DATE, asuntocita VARCHAR(255));";
  $hacerConsulta=mysql_query ($consulta, $conectado);
/* Se comprueba si se ha podido completar correctamente la última operación,
lo que, en este caso, implicará que también se han llevado a cabo, sin problemas,
las operaciones anteriores. El resultado se muestra en la página. */
  if ($hacerConsulta){
	  echo ("La Base de datos y la tabla han sido creadas.");
  } else {
	  echo ("Ha surgido algún problema durante la creación de la BBDD y/o la tabla.<br>");
	  echo ("El problema es el siguiente:<br>");
	  echo ("Código: <b>".mysql_errno ()."</b><br>");
	  echo ("Descripción:: <b>".mysql_error ()."</b><br>");
  }
// Se liberan recursos y se cierra la base de datos.
  @mysql_free_result ($hacerConsulta);
  mysql_close ($conectado);
?>
