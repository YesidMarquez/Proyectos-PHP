<!--11 foreach para formularios con muchos campos -->
<?php 
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach ($_POST as $campo => $valor) {
		$variable = "$" . $campo. "='".htmlentities($valor)."';";
		eval($variable);
	}
	$sel = $con->prepare("SELECT estado FROM estados WHERE idestados = ?");
	$sel->bind_param('i', $estado);
	$sel->execute();
	$res = $sel->get_result();
	if ($f=$res->fetch_assoc()) {
		$nombre_estado = $f['estado'];
	}

	$id = sha1(rand(00000, 99999));
	$consecutivo = '';
	$foto_principal = "casas/carro.jpg";
	$mapa = $calle_num." ". $fraccionamiento." ".$nombre_estado.", ". $municipio;
	$marcado = '';
	$estatus = 'ACTIVO';

	$ins = $con->prepare("INSERT INTO inventario VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$ins->bind_param("siisssdssiiiisiiisssssssssss", $id,$consecutivo,$id_cliente,$nombre_estado,$municipio,$nombre_cliente,$precio,$fraccionamiento,$calle_num,$numero_int,$m2t,$banos,$plantas,$caracteristicas,$m2c,$recamaras,$cocheras,$observaciones,$forma_pago,$asesor,$tipo_inmueble,$fecha_registro,$comentario_web,$operacion,$foto_principal,$mapa,$marcado,$estatus);

if ($ins->execute()) {
	header('location:../extend/alerta.php?msj=Guardo propiedad&c=prop&p=in&t=success');
}else {
	header('location:../extend/alerta.php?msj=no guardo la propiedad&c=cli&p=in&t=error');
	
}
$con->close();
}else {
	header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
}

?>