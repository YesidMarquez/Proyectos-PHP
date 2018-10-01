<?php
$archivo_origen = $_FILES['archivo_usuario']['tmp_name']; 
$archivo_final = "./archivos/1088256244.jpg"; 


if(move_uploaded_file($archivo_origen, $archivo_final)){ 
   print "El archivo fue subido con éxito."; 
}else{ 
   print "Error al intentar subir el archivo."; 
}  