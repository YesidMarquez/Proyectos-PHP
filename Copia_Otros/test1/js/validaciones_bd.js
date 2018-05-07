function validarFormulario(formulario_bd){
	var usuario = document.getElementById("usuario").value;

	if (usuario == ""){

		alert ('Debe ingresar un Id de Usuario'); 
	}else{

		document.getElementById(formulario_bd).submit();
		

	}
	
}
