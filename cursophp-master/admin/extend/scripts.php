</main> 
<script
  	
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="../materialize/js/materialize.min.js"></script> <!--../materialize/js/materialize.min.js -->
<script src="../cdn/sweetalert2.js"></script>

<!-- para inicializar todo con materialize -->
<!-- para que funcione el boton de menu en pantalla pequeña e inicializar todo-->
<script> 

	/*script para llamar al input buscar y filtrar cuando se valla escribiendo */
	$('#buscar').keyup(function(event) {
		var contenido = new RegExp($(this).val(), 'i'); /* este codigo es para que sea sencible a mayusculas y minusculas*/
		$('tr').hide(); /* para ocultar las tr*/
		$('tr').filter(function() {  /* para hacer el filtro dentro de las tr que ya ha oculatado*/
			return contenido.test($(this).text());
		}).show(); /* para que muestre lo que filtra*/ 
		$('.cabecera').attr('style',''); /* para que no me filtre las cabeceras y me las muestre*/
		
	});


	$('.button-collpase').sideNav();
	$('select').material_select();  /* inicializa el select para que se vea */
		/*8 calendario */
	
	$('.datepicker').pickadate({
		format: 'yyyy-m-d',
		selectMonths: true,
		selectYears: 15
	});

	 
	

/* funcion para transformar todo en letras mayusculas */
function may(obj, id){
	obj = obj.toUpperCase();
	document.getElementById(id).value = obj;
	}



</script>

 