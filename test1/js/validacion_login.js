function validarFormulario(formulario_login){
	var Nombre = document.getElementById("Nombre").value;

	if (Nombre == ""){

		alert ('Debe ingresar un nombre'); 
	}else{

		document.getElementById(formulario_login).submit();
		

	}
	
	var Password = document.getElementById("Password").value;
	if (Password == ""){

		alert ('Debe ingresar un Password'); 
	}else{

		document.getElementById(formulario_login).submit();
		

	}

	
}
