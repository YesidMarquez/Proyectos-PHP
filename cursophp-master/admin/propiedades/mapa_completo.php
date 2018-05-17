<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <style type="text/css">
    #mapa { height: 900px; }
    </style>
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRnt8x2YgoXPE0vd5E2fTfypaMkp4OQwk&callback=initMap"
        ></script>
    <script type="text/javascript">
    function initialize() {
      var marcadores = [

        <?php 
        include '../conexion/conexion.php';
        $sel = $con->prepare("SELECT mapa FROM inventario WHERE estatus ='ACTIVO' ");
        $sel->execute();
        $res = $sel->get_result();
        while ($f = $res->fetch_assoc()){
          $mapa = $f['mapa'];
          $address = urlencode($mapa);
          $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=".$address;
          $response = file_get_contents($url);
          $json = json_decode($response,true);
          $lat = $json['results'][0]['geometry']['location']['lat'];
          $lng = $json['results'][0]['geometry']['location']['lng'];
          ?>
        
        ['<?php echo $f['mapa'] ?>', <?php echo $lat ?>, <?php echo $lng ?> ],
        
        <?php } ?>
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 14,
        center: new google.maps.LatLng(24.025756, -104.655793 ),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="mapa"></div>
  </body>
</html>