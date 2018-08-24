<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$ipvisitante =$_POST['ip'];

//echo "--| ".$nombre."--| ".$telefono."--| ".$ipvisitante;

if (empty($nombre)||empty($telefono)) {
   echo"<script> alert('Por favro ingrese datos para Login.'); window.location.href='pr.php'; </script>";
}else{
    ini_set('soap.wsdl_cache_ttl', 900);
    ini_set('default_socket_timeout', 15);
    $params = array('pnombre'=>$nombre, 'ptelefono'=>$telefono, 'ip'=>$ipvisitante );
    $wsdl = 'http://192.168.2.25:8090/WebService1.asmx?WSDL';
    //190.14.226.148
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
    //var_dump($data);
    echo"<script> alert('Datos Guardados corectamente.'); window.location.href='pr.php'; </script>";
    die;
}
?>

