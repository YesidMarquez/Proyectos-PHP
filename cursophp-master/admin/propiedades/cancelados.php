
<!--26 cancelar y recuperar propiedad -->
<?php include '../extend/header.php';
   
   $sel = $con->prepare("SELECT propiedad, consecutivo,nombre_cliente,calle_num,fraccionamiento,estado,municipio,precio,forma_pago,asesor,tipo_inmueble,operacion,mapa,foto_principal FROM inventario WHERE estatus = 'CANCELADO' "); 

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
        <span class="card-title">Propiedades</span>
        <table>
          <thead>
            
              <th>Vista</th>
              <th>Num</th>
              <th>Cliente</th>
              <th>Propiedad</th>
              <th>Precio</th>
              <th>Credito</th>
              <th>Asesor</th>
              <th>Tipo</th>
              <th>Operacion</th>
              <th colspan="2">Opciones</th>
           
          </thead>
          <?php
          
          $sel->execute();
          $res = $sel->get_result();
          while ($f =$res->fetch_assoc()) {?>
            <tr>
                <!--14 vista modal-->
              <td class="borrar"> <button  data-target="modal1" onclick="enviar(this.value)"  value="<?php echo $f['propiedad'] ?>"  class="btn modal-trigger"><i class="material-icons">visibility</i></button></td>
              <td><?php echo $f['consecutivo'] ?></td>
              <td><?php echo $f['nombre_cliente'] ?></td>
              <td><?php echo $f['calle_num'].' '.$f['fraccionamiento'].' '.$f['estado'].' ,'.$f['municipio'] ?></td>
              <td><?php echo "$".number_format($f['precio'], 2); ?></td>
              <td><?php echo $f['forma_pago'] ?></td>
              <td><?php echo $f['asesor'] ?></td>
              <td><?php echo $f['tipo_inmueble'] ?></td>
              <td><?php echo $f['operacion'] ?></td>
              
              <!--26 recuperar propiedad -->
              <td><a href="cancelar_propiedad.php?id=<?php echo $f['propiedad'] ?>&accion=ACTIVO" class="btn-floating blue" ><i class="material-icons">loop</i> </a> </td>
              <td>
                <a href="#" class="btn-floating red" onclick="swal({title: 'Esta seguro que desea eliminar la propiedad?', text:'Al eliminarla no podra recuperarla', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, eliminarla!' }).then(function () {
                    location.href='eliminar_propiedad.php?id=<?php echo $f['propiedad'] ?>&foto=<?php echo $f['foto_principal']?>'; })"><i class="material-icons">delete_forever</i></a>
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

</body>
</html>