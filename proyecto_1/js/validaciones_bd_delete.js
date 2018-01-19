function validarFormulario(formulario){
	var nombre = document.getElementById("nombre").value;

	if (nombre == ""){

		alert ('Debe ingresar un nombre'); 
	}else{

		document.getElementById(formulario).submit();
		

	}
	
}
