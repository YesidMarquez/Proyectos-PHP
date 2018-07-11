<?php

require 'config/conexion.php';
$USUARIO= $_GET['usuario'];
echo $USUARIO;


error_reporting(E_ALL ^ E_NOTICE);
/* Con esta funcion estoy omitiendo este error: Notice: Undefined variable: valor in C:\xampp\htdocs\Proyectos-PHP XAMPP\proyecto_1\tip_cons\planta.php on line 15*/
    require 'config/conexion.php';


    $sql = " SELECT * FROM `acta`";
    $result = $mysqli->query($sql);
    
        
?>
<!DOCTYPE html>
<html>
<head>
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
      
      <li><a href="nuevo.html">Nuevo</a></li> 
      <li><a href="../index.html"><i class="fas fa-power-off" name="Salir"></i></a></li>
    </ul>
      
      
  </nav>
  <div id="content">
  
    <header>
      <div class="media border p-0">
        <img src="image/coopast_pereira.jpg" alt="John Doe" class="align-self-center mr-3" style="width:70px;">
        <div class="media-body">
          <h2>Actas de Reunion de Copasst </h2>
        </div>
      </div>
         
    </header>
    <div class="container-fluid shadow-lg p-3 mb-5 bg-white rounded">
      <div class="row">
        <div class="col" >
            <ol style="font-family: 'Roboto', sans-serif;">
              <h1>Instrucciones</h1>  
                <li ><p>La fecha de elaboracion se debe digiar con este formato "AAAAMMDD" <br><kbd> Ejemplo:</kbd> 20180711</p></li>
                <li ><p>El archivo debe llevar la misma fecha de elaboracion con el mismo formato descrito en el punto 1  <br><kbd>Ejemplo:</kbd> 20180711.pdf</p></li>
                <li ><p>El archivo debe llevar la miama fecha de elaboracion con el mismo formato descrito en el punto 1  <br><kbd>Ejemplo:</kbd> 20180711.pdf</p></li>
              <ol>
        
        </div>
        <?php echo $USUARIO;?>
        <div class="col-sm-5 shadow-lg p-3 mb-5 bg-white rounded " >
          <form method="POST" action="uploader.php" enctype="multipart/form-data" >
            <div class="form-group ">
              <label for="email">Descripcion:</label>
              <input class="form-control"   name="descripcion">
              <label for="pwd">Obervaciones:</label>
              <input class="form-control"   name="observaciones">
              <label for="pwd">Fecha de Elaboracion:</label>
              <input class="form-control"  name="fecha_acta"><br>
              <input name="uploadedfile" type="file" /><br>
            <button type="submit" onclick="alert('Deseas Guardar Cambios!')" "" class="btn btn-primary">Guardar</button>
          </form>
        </div>
        
      </div>
    </div>

      
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

