
<?php

require '../../mod_config/conexion.php';
session_start();
    if (!$_SESSION){
    echo"<script> alert('Usuario no autenticado.'); window.location.href='../../../index.php'; </script>";
    }

$id = $_POST['cedula'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$fech_nac = $_POST['nac'];
$ciu_nas = $_POST['c_na'];
$ciu_ex = $_POST['c_ex'];
$sangre= $_POST['t_san'];
$direcc = $_POST['direccion'];
$resi = $_POST['c_res'];
$tel = $_POST['tel'];
$genero= $_POST['sexo'];
$imagenc= $_FILES['cedula']['tmp_name'];
$rutac="../../soportes/imagenes/cedula/$id.jpg";//ruta carpeta donde queremos copiar las imágenes y en nuevo nombre.
if (is_uploaded_file($imagenc)) 
{ 
    move_uploaded_file($imagenc,$rutac); 
} 
else 
{ 
echo "Error al cargar el Archivo"; 
}
$imagenf= $_FILES['fotos']['tmp_name'];
$rutaf="../../soportes/imagenes/fotos/$id.jpg";//ruta carpeta donde queremos copiar las imágenes y en nuevo nombre.
if (is_uploaded_file($imagenf)) 
{ 
    move_uploaded_file($imagenf,$rutaf); 
} 
else                                                                                                                                
{ 
echo "Error al cargar el Archivo"; 
}
$nombres = explode(" ", $nombre);
$var= count($nombres, COUNT_RECURSIVE);
if ($var == 2) {
    echo " | Numero de nombres"." ".$var;
    $nombre_1=$nombres[0]; 
    $nombre_2=$nombres[1];
}elseif ($var == 3) {
    echo " | Numero de nombres"." ".$var;
    $nombre_1 =$nombres[0];
    $nombre_2 =$nombres[1]." ".$nombres[2];
}elseif ($var > 3) {
    echo " Revise el nombre ingresado tiene $var palabras";
}
$apellidos = explode(" ", $apellido);
$varA= count($apellidos, COUNT_RECURSIVE);
if ($varA == 2) {
    echo " | Numero de apellidos"." ".$varA;
    $apellido_1=$apellidos[0]; 
    $apellido_2=$apellidos[1];
}elseif ($varA == 3) {
    echo " | Numero de ApellidoS"." ".$varA;
    $apellido_1=$apellidos[0];
    $apellido_2=$apellidos[1]." ".$apellidos[2];
}elseif ($varA > 3) {
    echo " Revise el Apellido ingresado tiene $varA palabras";
}
   
$estado1= "1";
$rura_foto = "imagenes/fotos/".$id.".jpg";
$rura_cc = "imagenes/cedula/".$id.".jpg";

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


$sql = "INSERT INTO `empleado` (`id_empleado`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `fecha_nacimiento`, `ciudad_nacimiento`, `ciudad_expedicion`, `tipo_sangre`, `direccion`,`ciudad_residencia`,`telefono`, `genero`, `estado_id`) VALUES ('$id', '$nombre_1', '$nombre_2', '$apellido_1', '$apellido_2', '$fech_nac', '$ciu_nas', '$ciu_ex', '$sangre', '$direcc','$resi','$tel','$genero','$estado1');";
$resultado = $mysqli->query($sql);

$sql1 = "INSERT INTO `imagenes_fotos` (`id_foto`, `ruta`) VALUES ('$id', '$rura_foto');";
$res = $mysqli->query($sql1);
$sql2 = "INSERT INTO `imagenes_cedula` (`id_imagenc`, `ruta`) VALUES ('$id', '$rura_cc');";
    $resultado2 = $mysqli->query($sql2);


if ($res){
    echo 'inserción con exito';
}else{
    echo 'no se puedo insertar';

}      

?>
