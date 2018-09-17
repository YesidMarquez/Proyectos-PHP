<?php
require("../mod_config/conexion.php");
//Iniciar Sesión
session_start();
   
//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "../../index.html"
    </script>';
    }       
 
$usuario=$_SESSION['cedula'];
$nivel=$_SESSION['id_cargo'];
?>