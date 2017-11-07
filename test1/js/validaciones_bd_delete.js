function validarFormulario(formulario_DL){
	var id_usuario = document.getElementById("id_usuario").value;

	if (id_usuario == ""){

		alert ('Debe ingresar un Id de Usuario'); 
	}else{

		document.getElementById(formulario_DL).submit();
		

	}
	
}
