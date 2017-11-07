function validarFormulario(formulario_ud){
	var id_usuario = document.getElementById("id_usuario").value;

	if (id_usuario == ""){

		alert ('Debe ingresar un id_usuario'); 
	}else{

		document.getElementById(formulario_ud).submit();
	}

	var Nombre = document.getElementById("Nombre").value;

	if (Nombre == ""){

		alert ('Debe ingresar un Nombre'); 
	}else{

		document.getElementById(formulario_ud).submit();
	}
	
	var Apellido = document.getElementById("Apellido").value;

	if (Apellido == ""){

		alert ('Debe ingresar un Apellido'); 
	}else{

		document.getElementById(formulario_ud).submit();
	}
	var Nickname = document.getElementById("Nickname").value;

	if (Nickname == ""){

		alert ('Debe ingresar un Nickname'); 
	}else{

		document.getElementById(formulario_ud).submit();
	}
	var Estado = document.getElementById("Estado").value;

	if (Estado == ""){

		alert ('Debe ingresar un Estado'); 
	}else{

		document.getElementById(formulario_ud).submit();
	}
}
