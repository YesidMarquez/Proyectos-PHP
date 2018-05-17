<!--25 actualizar la propiedad -->
<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

foreach ($_POST as $campo => $valor) {
  $variable = "$" . $campo. "='" . htmlentities($valor). "';";
  eval($variable);
}

$sel = $con->prepare("SELECT estado FROM estados WHERE idestados = ? ");
$sel->bind_param('i', $estado);
$sel->execute();
$res = $sel->get_result();
if ($f=$res->fetch_assoc()) {
  $nombre_estado = $f['estado'];
}
$mapa = $calle_num ." ". $fraccionamiento. " ". $nombre_estado . ", ". $municipio;

$up = $con->prepare("UPDATE inventario SET estado=?, municipio=?, precio=?, fraccionamiento=?, calle_num=?, numero_int=?, m2t=?, banos=?, plantas=?, caracteristicas=?, m2c=?, recamaras=?, cocheras=?, observaciones=?, forma_pago=?, asesor=?, tipo_inmueble=?, fecha_registro=?, comentario_web=?, operacion=?, mapa=? WHERE propiedad=? ");
$up->bind_param("ssdssiiiisiiisssssssss", $nombre_estado,$municipio,$precio,$fraccionamiento,$calle_num,$numero_int,$m2t,$banos,$plantas,$caracteristicas,$m2c,$recamaras,$cocheras,$observaciones,$forma_pago,$asesor,$tipo_inmueble,$fecha_registro,$comentario_web,$operacion,$mapa,$id);

if ($up->execute()) {
  header('location:../extend/alerta.php?msj=Edito propiedad&c=prop&p=in&t=success');
}else{
  header('location:../extend/alerta.php?msj=No edito la propiedad&c=prop&p=in&t=error');
}

  $up->close();
  $con->close();
  }else {
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }

 ?>