<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$ipvisitante =$_POST['ip'];

//echo "--| ".$nombre."--| ".$telefono."--| ".$ipvisitante;
/*
if (empty($nombre)||empty($telefono)) {
   echo"<script> alert('Por favro ingrese datos para Login.'); window.location.href='pr.php'; </script>";
}else{
    ini_set('soap.wsdl_cache_ttl', 900);
    ini_set('default_socket_timeout', 15);
    $params = array('pnombre'=>$nombre, 'ptelefono'=>$telefono, 'ip'=>$ipvisitante );
    $wsdl = 'http://190.14.226.148:8091/WebServiceMovil.asmx?';
    //190.14.226.148
    //192.168.2.25
    $options = array(
            'uri'=>'http://schemas.xmlsoap.org/soap/envelope/',
            'style'=>SOAP_RPC,
            'use'=>SOAP_ENCODED,
            'soap_version'=>SOAP_1_1,
            'cache_wsdl'=>WSDL_CACHE_NONE,
            'connection_timeout'=>15,
            'trace'=>true,
            'encoding'=>'UTF-8',
            'exceptions'=>true,
        );
    try {
        $soap = new SoapClient($wsdl, $options);
        $data = $soap->lead($params);
    }
    catch(Exception $e) {
        die($e->getMessage());
    }
    //var_dump($data);*/
    
    $nombres = explode(" ", $nombre);
    for ($i=4; $i <1 ; $i--) { 
        # code...
    }
    $var= count($nombres, COUNT_RECURSIVE);
    if ($var == 2) {
         echo " | Numero de nombres"." ".$var;
        echo " | Nombre 1 ".$nombres[0]; 
        echo " | Nombre 2 ".$nombres[1];
    }elseif ($var == 3) {
        echo " | Numero de nombres"." ".$var;
        echo " | Nombre 1 ".$nombres[0];
        echo " | Nombre 2 ".$nombres[1]." ".$nombres[2];
       
    
    }elseif ($var > 3) {
        echo " Revise el nombre ingresado tiene $var palabras";

        
       
    }
    
   
    /*
     
    echo " 4 ".$nombres[3];*/
    echo "  |  Fecha ".$telefono; 
    //echo"<script> alert('Datos Guardados corectamente.'); window.location.href='pr.php'; </script>";
    die;

    /* CONSULTA PARA VALIDACION DE DATOS*/
    /*$sql1 = "SELECT telefono FROM `datos_landing_movil` WHERE telefono='$telefono'";
    $resultado1 = $mysqli->query($sql1);
    $row = $resultado1->fetch_array(MYSQLI_ASSOC);
    /* FIN CONSULTA PARA VALIDACION DE DATOS*/
    /*if ($row['telefono ']==$telefono) {

    
    }else{
    /* INSERCION DE DATOS*/
    /*date_default_timezone_set('America/Bogota');
    $fecha1=date('Y-m-d g:i:s');
    $sql = "INSERT INTO `datos_landing_movil` (`created`, `nombre`, `telefono`, `terminos_condiciones`, `ip_usuario`, `numero_radicado`) VALUES ('$id', '$acreditacion', '$f_acredi', '$radicado', '$f_radicado', '$numero_r');";
    $resultado = $mysqli->query($sql);
    $sql2 = "INSERT INTO `imagenes_credencial` (`id_imagen`, `ruta`) VALUES ('$id', '$rura_acre');";
    $resultado2 = $mysqli->query($sql2);
    
    /* FIN INSERCION DE DATOS*/

?>

