/* metodo ajax para verificar que el nick exista en la bd */
		$('#nick').change(function(){ 
			$.post('ajax_validacion_nick.php',{
				nick:$('#nick').val(),

				beforeSend: function(){
					$('.validacion').html("Espere un momento por favor");
				}

			}, function(respuesta){
				$('.validacion').html(respuesta);
			});
	});

		/* para que el boton guardar desaparesca cuando se escriben las contraseñas*/
		$('#btn_guardar').hide();
		/* para comparar las contraseñas con jquery */
		$('#pass2').change(function(event) {
			if ($('#pass1').val() == $('#pass2').val()) {
				swal('Bien hecho...','Las contraseñas coinciden','success');
				/* para aparecer el boton guardar*/
				$('#btn_guardar').show();
			}else{
				swal('Oppss...','Las contraseñas no coinciden','error');
				/* para que el boton guardar vuelva a desaparecer si las contraseñas no coinciden*/
				$('#btn_guardar').hide();
			}
			
		});

		/* llamamos la clase form para deshabilitar la tecla enter*/
		$('.form').keypress(function(e) {
			if (e.which == 13)/* el 13 es el codigo de la tecla enter*/ {
				return false;
			}
		});