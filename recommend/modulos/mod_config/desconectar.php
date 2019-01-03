<?php 
error_reporting(0);
session_start();
if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "../../index.html"
    </script>';
}    
if ($_SESSION['id_usuario'])
{	
	$cedula=$_SESSION['cedula'];
	$conexion=$_SESSION['conexion'];
	require 'conexion.php';
	require '../funciones/funciones.php';

      

    $dteStart = new DateTime($registro); 
    $dteEnd   = new DateTime($conexion); 
    $dteDiff  = $dteStart->diff($dteEnd); 
    $dteDiff1=$dteDiff->format("%H:%I:%S"); 
    //echo $dteDiff1;
    
	$sqla = "UPDATE estado E SET E.id_estado='2', E.ultimo_fin_conexion='$registro', E.duracion_conexion='$dteDiff1' 
	WHERE E.cedula='$cedula';";
	$resulta = $mysqli->query($sqla);
	
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion ha terminado correctamente")
	self.location = "../../index.html"
	</script>';
}

?>
