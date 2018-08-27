<?php 
session_start();
//session_start();
//$USUARIO= $_POST['user'];
//$CONTRASEÑA=$_POST['Password'];
$USUARIO=$_SESSION['usuario'] ;
$NIVEL=$_SESSION['nivel'] ;

require 'config/conexion.php';
//$USUARIO= htmlentities($_GET['usuario']);

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Copasst</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <style>
@import url('https://fonts.googleapis.com/css?family=Roboto|Skranji');
</style>
</head>
<body style="font-family: 'Roboto', sans-serif;">
  <!--Etiqueta "nav" Zona de navegacion, formada por enlaces a las zonas principales.-->
  <nav id="navbar">
    <div class="myicono"><i class="fas fa-bars" aria-hidden="true"></i></div>
    <!--La etiqueta "ul" definir las listas desordenadas con viñetas.-->
    <ul class="lista-sm"> 
      <!--La etiqueta "li" va a contener cada uno de los elementos de las listas ordenadas (<ol>), listas desordenadas (<ul>) y listas de menú (<menu>).-->
      <!--La etiqueta "a" representan los hiperenlaces y nos permite enlazar una página web con otra página web u otros documentos. El atributo más importante de un enlace es el atributo href que nos dice la dirección de la página o documento con el que queremos enlazar. Este enlace puede ser un enlace interno o externo.-->
         <li><a href="index.php">Inicio</a></li> 
         <li><a href="actas.php">Actas de Reunion</a></li> 
         <li><a href="actividades.html">Actividades</a></li> 
         <li><a href="../index.html"><i class="fas fa-power-off" name="Salir"></i></a></li>
         <li class="navbar-left"><a ><?php echo $USUARIO ?></a></li>
      </ul>
  
  </nav>
  <div id="content">
    <!--La etiqueta "header" representa cabecera de un documento o sección (ya que puede estar dentro de un article).-->
    <header>
      <div class="media border p-1">
        <img src="image/coopast_pereira.jpg" alt="John Doe" class="align-self-center mr-3" style="width:70px;">
        <div class="media-body">
          <h2>Coopasst </h2>
          <small>Sucursal Pereira </small>
                          
        </div>
      </div>
    </header>
    <!--La etiqueta "section" representa la zona de un elemento.-->
    <section id="principal">
      <h2>Que es Copasst ?</h2>
      <img src="image/coopasst.jpg" width="300" height="300">
      <ul >
        <li >Es un organismo de promocion y vigilancia de las normas y reglamentos de Seguridad y Salud en el Trabajo dentro de la empresa.</li>
        <li>Tiene la característica de estar conformado por igual número de representantes designados por parte de la administración e igual número de representantes por parte de los trabajadores, estos últimos elegidos mediante proceso de votación. De allí su denominación de paritario.</li>
        <li>Todas las empresas e instituciones públicas o privadas con más de 10 trabajadores están obligadas a conformar un Comité Paritario de Seguridad y Salud.</li>
        <li>El periodo de trabajo del comité paritario es de dos (2) años.</li>
        <li>Las reuniones del comité se realizan por lo menos una vez al mes, o extraordinariamente si es necesario.</li>
      </ul>
    </section>
    <section id="secundario">
      <h2>Funciones del Copasst</h2>
      <img src="image/funcion.png" width="300" height="300">
      <ul >
        <li ><kbd>Investigación:</kbd> De incidentes, accidentes de trabajo, enfermedad profesional e información estadística.</li>
        <li ><kbd>Capacitación:</kbd> Participar y promover la participación en las actividades de capacitación.</li>
        <li ><kbd>Coordinación:</kbd> Entre empleadores y trabajadores en temas inherentes a Seguridad y salud en el Trabajo.</li>
        <li ><kbd>Inspecciones:</kbd> A las instalaciones locativas, máquinas, equipos, herramientas, elementos para emergencias, brigada de emergencias, procesos industriales y operaciones. Esta actividad adquiere especial dimensión ya que su función es esencialmente preventiva y por lo tanto debe hacer especial hincapié en detectar las causas no solo de las accidentes sino de los incidentes, para eliminar los agentes de riesgo.</li>
        <li ><kbd>Vigilancia:</kbd> Sobre el cumplimiento por parte de los empleadores y trabajadores del Sistema de Gestión en Seguridad y Salud en el Trabajo.</li>       
      </ul>


    </section>
    <!--La etiqueta "aside" representa la barra lateral donde hay contenido relacionado con la página..-->
    <aside class="shadow-lg p-3 mb-5 bg-white rounded">
      <h2><img src="image/axa.jpg" width="100" height="100"></h2>
      <iframe width="200" height="200" src="https://www.youtube.com/embed/a08lwq7dJXU?autoplay=1">
      </iframe>
      
    </aside>
    <!--La etiqueta "footer" representa el pie de página de un documento.-->
    <footer>
      <p align="center">copyright (c) 2018 Mat-sw, Inc.</p> 
    </footer>
  </div>
  <!--La libreria de jQuery la estoy extrayendo len host de ligrerias de google "https://developers.google.com/speed/libraries/".-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
