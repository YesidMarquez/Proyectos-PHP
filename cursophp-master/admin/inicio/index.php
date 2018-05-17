
<?php include '../extend/header.php'; 
#10.11 pagina de inicio
$sel = $con->prepare("SELECT propiedad FROM inventario WHERE operacion = ?");
$sel->bind_param('s', $operacion);

?>

<div class="row">
	<div class="col s12 m6 l6">
		<div class="card blue-grey darken-1">
			<div class="card-content">
				<span class="card-title white-text"><b>Venta</b> </span>
				<h2 align="center" class="white-text">
					<?php
						$operacion = 'VENTA';
						$sel->execute();
						$res_venta = $sel->get_result();
						echo mysqli_num_rows($res_venta);
					?>
				</h2>
			</div>
			<div class="card-action">
				<a href="../propiedades/index.php?ope=VENTA">ver mas...</a>
			</div>
		</div>
	</div>

	<div class="col s12 m6 l6">
		<div class="card blue-grey darken-1">
			<div class="card-content">
				<span class="card-title white-text"><b>Renta</b> </span>
				<h2 align="center" class="white-text">
					<?php
						$operacion = 'RENTA';
						$sel->execute();
						$res_renta = $sel->get_result();
						echo mysqli_num_rows($res_renta);
					?>
				</h2>
			</div>
			<div class="card-action">
				<a href="../propiedades/index.php?ope=RENTA">ver mas...</a>
			</div>
		</div>
	</div>

	<div class="col s12 m6 l6">
		<div class="card blue-grey darken-1">
			<div class="card-content">
				<span class="card-title white-text"><b>Traspaso</b> </span>
				<h2 align="center" class="white-text">
					<?php
						$operacion = 'TRASPASO';
						$sel->execute();
						$res_traspaso = $sel->get_result();
						echo mysqli_num_rows($res_traspaso);
					?>
				</h2>
			</div>
			<div class="card-action">
				<a href="../propiedades/index.php?ope=TRASPASO">ver mas...</a>
			</div>
		</div>
	</div>

	<div class="col s12 m6 l6">
		<div class="card blue-grey darken-1">
			<div class="card-content">
				<span class="card-title white-text"><b>Ocupado</b> </span>
				<h2 align="center" class="white-text">
					<?php
						$operacion = 'OCUPADO';
						$sel->execute();
						$res_ocupado = $sel->get_result();
						echo mysqli_num_rows($res_ocupado);
					?>
				</h2>
			</div>
			<div class="card-action">
				<a href="../propiedades/index.php?ope=OCUPADO">ver mas...</a>
			</div>
		</div>
	</div>
</div>

        <!--10.11 materialize components cards  -->
<div class="row">
	<div  class="col s12">
		<div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <h4 align="center"><b>COMENTARIOS</b></h4>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width tabs-transparent">
        <li class="tab"><a class="active" href="#nuevos">Nuevos</a></li>
        <li class="tab"><a  href="#resueltos">Resueltos</a></li>
        </ul>
    </div>
    <div class="card-content white">
      <div id="nuevos">
      	<table>
           <th>Vista</th>
           <th>Solicitante</th>
           <th>Telefono</th>
           <th>Correo</th>
           <th>Mensaje</th>
           <?php
           $sel_com = $con->prepare("SELECT * FROM comentario WHERE estatus = ? ");
           $sel_com->bind_param('s', $estatus);
           $estatus = 'NUEVO';
           $sel_com->execute();
           $res_nuevo = $sel_com->get_result();
           while ($fn =$res_nuevo->fetch_assoc()) { ?>
           <tr>
             <td class="borrar"> <button data-target="modal1" onclick="enviar(this.value)"  value="<?php echo $fn['id_propiedad'] ?>"  class="btn modal-trigger"><i class="material-icons">visibility</i></button></td>
             <td><?php echo $fn['nombre'] ?></td>
             <td><?php echo $fn['tel'] ?></td>
             <td><a href="correo.php?correo=<?php echo $fn['correo'] ?>&nombre=<?php echo $fn['nombre'] ?>&id_mensaje=<?php echo $fn['id'] ?>"><?php echo $fn['correo'] ?></a></td>
             <td><?php echo $fn['mensaje'] ?></td>
           </tr>
           <?php } ?>
         </table>
      </div>
      <div id="resueltos">
      	<table>
           <th>Vista</th>
           <th>Solicitante</th>
           <th>Telefono</th>
           <th>Correo</th>
           <th>Mensaje</th>
           <?php          
           $estatus = 'RESUELTO';
           $sel_com->execute();
           $res_resuelto = $sel_com->get_result();
           while ($fr =$res_resuelto->fetch_assoc()) { ?>
           <tr>
             <td class="borrar"> <button data-target="modal1" onclick="enviar(this.value)"  value="<?php echo $fr['id_propiedad'] ?>"  class="btn modal-trigger"><i class="material-icons">visibility</i></button></td>
             <td><?php echo $fr['nombre'] ?></td>
             <td><?php echo $fr['tel'] ?></td>
             <td><?php echo $fr['correo'] ?></td>
             <td><?php echo $fr['mensaje'] ?></td>
           </tr>
           <?php } ?>
         </table>
      </div>
      </div>
  </div>
	</div>
</div>
<!--10.11 ventana modal para el boton con el ojo -->
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

	 /*10.11 */
	 function enviar(valor){ 
			$.get('../propiedades/modal.php',{
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
