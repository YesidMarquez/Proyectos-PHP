<?php
error_reporting(E_ALL ^ E_NOTICE);
/* Con esta funcion estoy omitiendo este error: Notice: Undefined variable: valor in C:\xampp\htdocs\Proyectos-PHP XAMPP\proyecto_1\tip_cons\planta.php on line 15*/
    require 'config/conexion.php';
    $id = $_GET['id_acta'];


    $sql = " SELECT * FROM `acta` where id_acta= '$id '";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $date = date_create($row['fecha_acta']);
    echo date_format($date, 'Y-m-d ');
        
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
  <title>Coopasst</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
  <!--Etiqueta "nav" Zona de navegacion, formada por enlaces a las zonas principales.-->
  <nav id="navbar">
    <div class="myicono"><i class="fas fa-bars" aria-hidden="true"></i></div>
    <!--La etiqueta "ul" definir las listas desordenadas con viñetas.-->
    <ul class="lista-sm"> 
      <!--La etiqueta "li" va a contener cada uno de los elementos de las listas ordenadas (<ol>), listas desordenadas (<ul>) y listas de menú (<menu>).-->
      <!--La etiqueta "a" representan los hiperenlaces y nos permite enlazar una página web con otra página web u otros documentos. El atributo más importante de un enlace es el atributo href que nos dice la dirección de la página o documento con el que queremos enlazar. Este enlace puede ser un enlace interno o externo.-->
     <li><a href="index.html">Inicio</a></li> 
     <li><a href="actas.php">Actas de Reunion</a></li> 
     <li><a href="actividades.html">Actividades</a></li> 
    </ul>
      
      
  </nav>
  <div id="content">
  
    <header>
      <div class="media border p-1">
        <img src="image/coopast_pereira.jpg" alt="John Doe" class="align-self-center mr-3" style="width:70px;">
        <div class="media-body">
          <h2>Actas de Reunion de Copasst </h2>
        </div>
      </div>
         
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="col" style="background-color:lavender;">
          <iframe src="<?php echo $row['ruta']; ?>"style="width:600px; height:500px;" frameborder="0"></iframe>
          ​          
         </div>
        <div class="col" >
          <form method="POST" action="update/update.php" >
            <div class="form-group">
              <label for="email">Descripcion:</label>
              <input type="email" class="form-control" id="email"  placeholder="<?php echo $row['descripcion']; ?>" name="descripcion">
            </div>
            <div class="form-group">
              <label for="pwd">Oservaciones:</label>
              <input class="form-control" id="pwd"  placeholder="<?php echo $row['observaciones']; ?>" name="observaciones">
            </div>
             <div class="form-group">
              <label for="pwd">Fecha de Elaboracion:</label>
              <input type="password" class="form-control" id="pwd" disabled placeholder="<?php  echo date_format($date, 'd-m-Y '); ?>">
            </div>
            <button type="submit" onclick="alert('Deseas Guardar Cambios!')" class="btn btn-primary">Guardar</button>
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
  <script src="script.js"></script>

</body>
</html>

