<?php
require("../mod_config/conexion.php");
/************************Recibidos por metodo POST********************************************/
$id = $_POST['id_empleado'];
$campaña = $_POST['campaña'];
$id_llamada= $_POST['id_llamada'];
$id_cliente= $_POST['id_cliente'];
$token= $_POST['token'];
date_default_timezone_set('America/Bogota');
date('Y-m-d');
$f= date('Y-m-d');;
    if (date('m')==01) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==2) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==3) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==4) {
       $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==5) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==6) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==7) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==8) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==9) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==10) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==11) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
  }elseif (date('m')==12) {
    $dato=Date('m-d');
    $fecha= "2018-".$dato;
  }
$validar="../soportes/$fecha/$id";
if (!file_exists($validar)) {
    mkdir("../soportes/$fecha/$id",  0777, true);
  
}
$imagen= $_FILES['imagen']['tmp_name'];
$ruta="../soportes/$fecha/$id/$token.jpg";//ruta carpeta donde queremos copiar las imágenes y en nuevo nombre.
if (is_uploaded_file($imagen)) 
{ 
    move_uploaded_file($imagen,$ruta); 
} 
else 
{ 
echo "Error al cargar el Archivo"; 
}



/************************Fin Recibidos por metodo POST********************************************/
/************************Generar hora para insercion********************************************/
date_default_timezone_set('America/Bogota');
$fecha1=date('Y-m-d g:i:s');
/************************Fin Generar hora para insercion********************************************/

/************************Validacion de datos sin valor********************************************/
if (empty($id_llamada)||empty($id_cliente)) {
   echo"<script> alert('Por favro ingrese datos .'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
}else{

/********************************Consultas Base de Datos************************************/
    $sql = "SELECT * FROM `confronta` where cedula_cliente= $id_cliente" ;
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    

    $sql1 = "SELECT * FROM `confronta` where token_confronta=$token" ;
    $resultado1 = $mysqli->query($sql1);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
    

/********************************Fin Consultas Base de Datos************************************/
    if ($id_cliente <> $row['cedula_cliente']   ){
        if ($token <> $row1['token_confronta']) {
            $sql = 
           "INSERT INTO `confronta` (`id_llamada`, `cedula_cliente`, `usuario_cedula`, `registro`,`campana`, `token_confronta`) VALUES ('$id_llamada', '$id_cliente', '$id', '$fecha1', '$campaña', '$token');";
           $resultado = $mysqli->query($sql);

           $sql1 = 
           "INSERT INTO `imagephp` (`ruta_imagen`, `confronta_token`) VALUES ('$ruta', '$token'); ";
            $resultado1 = $mysqli->query($sql1);

           if ($resultado && $resultado1){
                echo"<script> alert('Operacion exitosa token = $token $fecha'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
            }
            else{
                echo"<script> alert('No se pudo insertar comuniquese con el administrador del sistema'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
            } 
        }else{
        echo"<script> alert('Ya se encuentra un registro con el token $token.'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
                      
        }
        
    }else{
        echo"<script> alert('Ya se encuentra un registro asociado a la Cedula $id_cliente.'); window.location.href='ventas.php?cedula_usuario=$id'; </script>";
                      
        }
    
}

/************************Fin Validacion de datos sin valor********************************************/


       

?>

