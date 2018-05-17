<!--12 -->
<!--13 -->
<!--21 correccion -->
<?php include '../extend/header.php';
#paginacion
if (isset($_GET['ope'])) {
   $operacion_paginacion = $con->real_escape_string(htmlentities($_GET['ope']));
   $sel_paginacion = $con->prepare("SELECT propiedad FROM inventario WHERE estatus = 'ACTIVO' AND operacion = ?");
   $sel_paginacion->bind_param('s', $operacion_paginacion);
   $ope = "&ope=".$operacion_paginacion;
 }else {
  $sel_paginacion = $con->prepare("SELECT propiedad FROM inventario WHERE estatus = 'ACTIVO' "); 
  $ope = "";        
 }
 $sel_paginacion->execute();
 $res_paginacion=$sel_paginacion->get_result();
 $row = mysqli_num_rows($res_paginacion);
 $numero_registros=3;
#para redondear el numero de paginas
 $total_paginas = ceil($row/$numero_registros);
 #isset es si existe
 if (isset($_GET['pag'])) {
   $pagina = $_GET['pag'];
 }else {
  $pagina = 1;
 }

 if ($pagina == 1) {
   $inicio = 0;
 }else {
  $res = $pagina-1;
  $inicio = ($numero_registros * $res);
 }




if (isset($_GET['ope'])) {
   $operacion = $con->real_escape_string(htmlentities($_GET['ope']));
   $sel = $con->prepare("SELECT propiedad, consecutivo,nombre_cliente,calle_num,fraccionamiento,estado,municipio,precio,forma_pago,asesor,tipo_inmueble,operacion,mapa,marcado FROM inventario WHERE estatus = 'ACTIVO' AND operacion = ? LIMIT $inicio,$numero_registros");
   $sel->bind_param('s', $operacion);
 }else {
  $sel = $con->prepare("SELECT propiedad, consecutivo,nombre_cliente,calle_num,fraccionamiento,estado,municipio,precio,forma_pago,asesor,tipo_inmueble,operacion, mapa, marcado FROM inventario WHERE estatus = 'ACTIVO' LIMIT $inicio,$numero_registros ");
         
 } 

?>
<br>
<!--buscador -->
<div class="row">
	<div class="col s12">
		 <nav class="brown lighten-3">
		 	<div class="nav-wrapper">
		 		<div class="input-field">
		 			
		 			<input type="search" id="buscar" onautocomplete="off">
		 			<label for="buscar"><i class="material-icons">search</i></label>
		 			<i class="material-icons">close</i>
		 		</div>
		 	</div>
		 </nav>
	</div>
</div>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <!--28 exportar a excel -->
        <form action="excel.php" method="post" target="_blank" id="exportar">
        <span class="card-title">Propiedades
          <button class="btn-floating green botonExcel"><i class="material-icons">grid_on</i></button>
          <input type="hidden" name="datos" id="datos"> 
          <a href="mapa_completo.php" class="btn btn-floating red" target="_blank"><i class="material-icons">map</i></a>
        </span>          
        </form>        
        <table class="excel" border="1">
          <thead>
            
              <th class="borrar">Vista</th>
              <th></th>
              <th>Num</th>
              <th>Cliente</th>
              <th>Propiedad</th>
              <th>Precio</th>
              <th>Credito</th>
              <th>Asesor</th>
              <th>Tipo</th>
              <th>Operacion</th>
              <th colspan="5" class="borrar">Opciones</th>
           
          </thead>
          <?php
          
          $sel->execute();
          $res = $sel->get_result();
          while ($f =$res->fetch_assoc()) {?>
            <tr>
                <!--14 vista modal-->
              <td class="borrar"> <button id="mod" data-target="modal1" onclick="enviar(this.value)"  value="<?php echo $f['propiedad'] ?>"  class="btn modal-trigger"><i class="material-icons">visibility</i></button></td>
              <!--10.5 modulo para marcar los inmuebles -->
              <td>
                <?php if ($f['marcado'] == ''): ?>
                  <a href="marcado.php?id=<?php echo $f['propiedad'] ?>&marcado=SI"><i class="small grey-text material-icons">grade</i></a>
                <?php else: ?>
                  <a href="marcado.php?id=<?php echo $f['propiedad'] ?>&marcado="><i class="small green-text material-icons">grade</i></a>
                <?php endif; ?>

              </td>
              <td><?php echo $f['consecutivo'] ?></td>
              <td><?php echo $f['nombre_cliente'] ?></td>
              <td><?php echo $f['calle_num'].' '.$f['fraccionamiento'].' '.$f['estado'].' ,'.$f['municipio'] ?></td>
              <td><?php echo "$".number_format($f['precio'], 2); ?></td>
              <td><?php echo $f['forma_pago'] ?></td>
              <td><?php echo $f['asesor'] ?></td>
              <td><?php echo $f['tipo_inmueble'] ?></td>
              <td><?php echo $f['operacion'] ?></td>
              <!--15 boton para ver y cargar imagenes-->
              <td class="borrar"><a href="imagenes.php?id=<?php echo $f['propiedad'] ?>" class="btn-floating pink" ><i class="material-icons">image</i> </a> </td>
              <!--22 boton para mapa  targe="_blank" es para abrir en una ventana nueva--> 
              <td class="borrar"><a href="mapa.php?mapa=<?php echo $f['mapa'] ?>" target="_blank" class="btn-floating orange" ><i class="material-icons">room</i> </a> </td>

              <td class="borrar"><a href="pdf.php?id=<?php echo $f['propiedad'] ?>"  class="btn-floating green" ><i class="material-icons">picture_as_pdf</i> </a> </td>
              <!--25 editar propiedad -->
              <td class="borrar"><a href="editar_propiedad.php?id=<?php echo $f['propiedad'] ?>" class="btn-floating blue" ><i class="material-icons">loop</i> </a> </td>
              <td class="borrar">
                <a href="#" class="btn-floating red" onclick="swal({title: 'Esta seguro que desea cancelar la propiedad?', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, cancelarla!' }).then(function () {
                    location.href='cancelar_propiedad.php?id=<?php echo $f['propiedad'] ?>&accion=CANCELADO'; })"><i class="material-icons">delete</i></a>
              </td>
            </tr>
          <?php }
          $sel->close();
          $con->close();
           ?>
        </table>
      </div>
    </div>
  </div>
</div>
<!--paginacion -->
<?php 
  $atras = $pagina -1;
  $adelante = $pagina +1;
?>
<center><p>TOTAL PAGINAS: <?php echo $total_paginas ?></p></center>
<div class="row">
  <div class="col s4" align="right">
    <?php if ($pagina > 1): ?>
      <a href="index.php?pag=<?php echo $atras; echo $ope; ?>" class="btn btn-floating"><i class="material-icons">chevron_left</i></a>
    <?php endif; ?>
  </div>
  <div class="col s4">
    <form action="index.php" method="get">
      <input type="number" name="pag" size="1" placeholder="PAGINA ACTUAL: <?php echo $pagina ?>">
      <?php if (isset($_GET['ope'])): ?>
        <input type="hidden" name="ope" value="<?php echo $operacion_paginacion ?>">
        <?php endif; ?>
    </form>
  </div>
  <div class="col s4" >
    <?php if ($pagina < $total_paginas): ?>
      <a href="index.php?pag=<?php echo $adelante; echo $ope; ?>" class="btn btn-floating"><i class="material-icons">chevron_right</i></a>
    <?php endif; ?>
  </div>
</div>

  <!--14 vidta modal -->
  <!--<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Informacion</h4>
      <div class="res_modal">
      	
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>

<?php include '../extend/scripts.php'; ?>
<script>
	 $('.modal').modal();

	 /*14 */
	 function enviar(valor){ 
			$.get('modal.php',{
				id:valor,

				beforeSend: function(){
					$('.res_modal').html("Espere un momento por favor");
				}

			}, function(respuesta){
				$('.res_modal').html(respuesta);
			});
	}
</script>
<!--28 para quitar los botones al exportar a excel -->
<script>
  $('.botonExcel').click(function(){
    $('.borrar').remove();
    $('#datos').val($("<div>").append($('.excel').eq(0).clone()).html());
    $('#exportar').submit();
    //para volver a aparecer los botones
    setInterval(function(){ location.reload();}, 3000);
  });
</script>

</body>
</html>