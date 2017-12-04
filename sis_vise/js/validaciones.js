function validarFormulario(formulario){
	var Nombre = document.getElementById("Nombre").value;

	if (Nombre == ""){

		alert ('Debe ingresar un Nombre'); 
	}else{

		document.getElementById(formulario).submit();
	}
	
	var Apellido = document.getElementById("Apellido").value;

	if (Apellido == ""){

		alert ('Debe ingresar un Apellido'); 
	}else{

		document.getElementById(formulario).submit();
	}
	var Nickname = document.getElementById("Nickname").value;

	if (Nickname == ""){

		alert ('Debe ingresar un Nickname'); 
	}else{

		document.getElementById(formulario).submit();
	}
	var Estado = document.getElementById("Estado").value;

	if (Estado == ""){

		alert ('Debe ingresar un Estado'); 
	}else{

		document.getElementById(formulario).submit();
	}
}
