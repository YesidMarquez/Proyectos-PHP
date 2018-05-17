/*10 departamentos y municipios */
$('#estado').change(function(){ 
			$.post('ajax_muni.php',{
				estado:$('#estado').val(),

				beforeSend: function(){
					$('.res_estado').html("Espere un momento por favor");
				}

			}, function(respuesta){
				$('.res_estado').html(respuesta);
			});
	});