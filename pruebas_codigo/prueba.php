<!DOCTYPE html>

<html><head><title>Ejemplo aprenderaprogramar.com</title><meta charset="utf-8">


<script type="text/javascript">
	window.onload = function () {
		document.forms['formularioContacto'].addEventListener('submit', avisarUsuario);
	}
	function avisarUsuario(evObject) {
		evObject.preventDefault();
		var botones = document.querySelectorAll('.botonFormulario');
		for (var i=0; i<botones.length; i++) {botones[i].disabled = true; 
		}
	}
</script>

</head>

<body>

<h2>Cursos aprenderaprogramar.com</h2>

<h3>Ejemplos JavaScript</h3>

    <div class="estiloForm">

       <form name ="formularioContacto" method="get" action="#">

        <label>Nombre</label><input id="nombre" name="nombre" type="text"/><br/>

        <label>Apellidos</label><input id="apellidos" name="apellidos" type="text"/><br/>

        <label>Dirección</label><input id="direccion1" name="direccion1" type="text"/>

        <input class="botonFormulario" type="submit" value="Enviar"/>

        <input class="botonFormulario" type="reset" value="Cancelar"/>

    </form>

    </div>

</body></html>