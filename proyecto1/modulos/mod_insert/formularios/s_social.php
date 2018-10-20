<?php
session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../index.php'; </script>";
    }
?> 

<!DOCTYPE html>
<html>
    <head>
        <title>S. Social | 2.0</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
        <link rel="icon" type="image/x-icon" href="../imagenes/logos/favicon.ico" />
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
              <a class="nav-link" href="#"><img class="menu" src="../imagenes/iconos/empleado.png" title="Empleado"></img></a>
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
              <a class="nav-link" href="puesto.php"><img class="menu2" src="../imagenes/iconos/puesto.png" title="Puesto"></img></a>
            </li>
                      
             <li class="nav-item">
              <a class="nav-link" href="../menu.php"><img  class="menu" src="../imagenes/iconos/atras.png" title="Retorno Menu"></a>
            </li>
          </ul>
        </nav><br>
<table width="600" border="1"> 
  <tr> 
    <td colspan="2">a</td>     
  </tr> 
  <tr> 
    <td  style="left:inherit"><button name="btn">Boton1</button></td> 
    <td style="right:inherit"><button name="btn2">Boton2</button></td> 
  </tr> 
</table> 
</body> 
</html>  