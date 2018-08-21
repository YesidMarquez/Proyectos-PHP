<?php
/************************************************** INICIO AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO *****************/
require 'config/conexion.php';
$user=$_POST['User'];
$pass=$_POST['Password'];
    
$sql = "SELECT usuario, password FROM usuarios WHERE usuario = 'ymarquez' and password= 123; ";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
if ($row['usuario']==$user) {
    if ($row['password']==$pass) {
        header('Location: menu_ppal.php');
    }else{

    echo "Contraseña Invalida";}
   
}else{
    echo "Usuario Invalido";
}

/*------------------------------------------------*/

/************************************************** FIN AREA CONEXION Y CONSULTA CON BD  (BACKEND)PROYECTO ****************************/ 
?>

<!--******************************************************* INICIO AREA DE DISEÑO (FRONTEND)PROYECTO ********************************-->
