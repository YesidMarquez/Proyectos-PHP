<!--24 reporte en pdf -->
<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel = $con->prepare("SELECT * FROM inventario WHERE propiedad = ? ");
$sel->bind_param('s', $id);
$sel->execute();
$res = $sel->get_result();
if ($f =$res->fetch_assoc()) {
}
#para cargar el html que se quiere imprimir
ob_start();
 ?>

 

<h3 align="right"><b><?php echo "$". number_format($f['precio'], 2); ?></b></h3>
 <table  width="100%" cellpadding="3" border="1" >
   <tr>
     <td colspan="4" ><b>Datos generales</b></td>
   </tr>
   <tr>
     <td>Cliente</td>
     <td><?php echo $f['nombre_cliente'] ?></td>
     <td>Num.</td>
     <td><?php echo $f['consecutivo'] ?></td>
   </tr>
   <tr>
     <td>Calle y numero</td>
     <td><?php echo $f['calle_num']?></td>
     <td>Fraccionamiento</td>
     <td><?php echo $f['fraccionamiento'] ?></td>
   </tr>
   <tr>
     <td>Numero int.</td>
     <td><?php echo $f['numero_int']?></td>
     <td>Estado</td>
     <td><?php echo $f['estado'] ?></td>
   </tr>
   <tr>
     <td>Municipio</td>
     <td><?php echo $f['municipio']?></td>
     <td colspan="2"></td>
   </tr>
   <tr>
     <td colspan="4" class="center" ><b>Caracteristicas</b></td>
   </tr>
   <tr>
     <td>M2 Terreno.</td>
     <td><?php echo $f['m2t']?></td>
     <td>M2 Construccion</td>
     <td><?php echo $f['m2c'] ?></td>
   </tr>
   <tr>
     <td>Baños</td>
     <td><?php echo $f['banos']?></td>
     <td>Plantas</td>
     <td><?php echo $f['plantas'] ?></td>
   </tr>
   <tr>
     <td>Recamaras</td>
     <td><?php echo $f['recamaras']?></td>
     <td>Cocheras</td>
     <td><?php echo $f['cocheras'] ?></td>
   </tr>
   <tr>
     <td>Caracteristicas</td>
     <td><?php echo $f['caracteristicas']?></td>
     <td>Observaciones</td>
     <td><?php echo $f['observaciones'] ?></td>
   </tr>
   <tr>
     <td colspan="4" class="center" ><b>Datos de venta</b></td>
   </tr>
   <tr>
     <td>Forma de pago</td>
     <td><?php echo $f['forma_pago']?></td>
     <td>Asesor</td>
     <td><?php echo $f['asesor'] ?></td>
   </tr>
   <tr>
     <td>Tipo de inmueble</td>
     <td><?php echo $f['tipo_inmueble']?></td>
     <td>Fecha de registro</td>
     <td><?php echo date('d-m-y', strtotime($f['fecha_registro'])); ?></td><!--cambiar el formato de la fecha -->
   </tr>
   <tr>
     <td>Comentario web</td>
     <td><?php echo $f['comentario_web']?></td>
     <td>Operacion</td>
     <td><?php echo $f['operacion'] ?></td>
   </tr>

 </table>

 <!--traer la libreria de pdf -->
 <?php
 require_once 'dompdf/autoload.inc.php';
 use Dompdf\Dompdf;

 $dompdf = new Dompdf();
 #aqui va lo que se va a imprimir. se imprime todo lo que esta despues del ob_start #que se declaro al inicio
 $dompdf->loadHtml(ob_get_clean()); 
 $dompdf->setPaper('A4','portrait');#aqui va el tipo de papel 
 $dompdf->render(); #Landascape es horizontal y portrait es vertical
 $dompdf->stream('reporte'); #nombre del pdf
 ?>
 