 /*indicamos sobre el objeto que se va a trabajar*/
    $(document).ready(function(){
      /* Ponemos nestro codigo javaScript que utiliza jQuery
      Evento: Operacion que se encuentra a la esper de una accion por parte del usuario.
      */
      configurarInicio()
      $('.myicono').click(function(e){
        $('#navbar ul').toggleClass('lista-sm');
      })
      function configurarInicio(){
        var urlPath= window.location.pathname;
        console.log(urlPath)
        $('nav a').each(function(){
          
          var href= $(this).attr('href')
          console.log(href)
          /*Se resta toda la url con el hrf para validar que esten en la misma ubicacion
          urlPath.length=/C:/xampp/htdocs/Proyectos_PHP_Puro/Curso_Udemy_diseno_web/index.html
          href.length=/index.html
          */
          var indice=urlPath.length- href.length;
          console.log(urlPath.substring(indice));
          if (urlPath.substring(indice)===href) {
            /*Comparo el valor de la resta con el href y si es igual 
            ejecuta la clase programada en el archivo de css*/
            console.log('match');
            /* Ingresa a la etiqueta li y activa la clase del estilo css*/
            $(this).closest('li').addClass('active');
          }

        })

      }
    })
