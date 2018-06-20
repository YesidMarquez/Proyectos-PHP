
'''<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo DatePicker en Español</title>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

    <script>
         
         $.datepicker.regional['es'] = {
         closeText: 'Cerrar',
         prevText: '< Ant',
         nextText: 'Sig >',
         currentText: 'Hoy',
         monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
         dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
         dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
         dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
         weekHeader: 'Sm',
         dateFormat: 'dd/mm/yy',
         firstDay: 1,
         isRTL: false,
         showMonthAfterYear: false,
         yearSuffix: ''
         };

         $.datepicker.setDefaults($.datepicker.regional['es']);
        
         $(function () {
            $("#fecha").datepicker();
         });

    </script>


</head>
<body>

    <label for="fecha">Fecha:
        <input type="text" id="fecha" value="" />
    </label>
    
</body>
</html>'''

import hashlib
import base64

encoded = base64 . b64encode ( b'data to be encoded' )

m = hashlib .  sha1 (encoded)

print ("Valor ingesado a funcion has sha1: ",m," /n")
print ("Esto es el sha1 con m . block_size: ",m.block_size )
print ("Esto es el sha1 con digest: ",m.digest ())

print ("Esto es el tamaño sha1 de m: ",m.digest_size)
print ("Esto es el sha1 con hex: ", m.hexdigest())
print ("mensaje decodificado: ", base64 . b64decode ( m ))
