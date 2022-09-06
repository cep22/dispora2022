<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>KML Click Capture Sample</title>
    <style>
      html, body {
        height: 370px;
        padding: 0;
        margin: 0;
        }
      #map {
      height:100vh;width:100%;margin:0;padding:0;
       }
     
    </style>
  </head>
  <body>
    <div id="map"></div>

    <script>
      var map;
      var src = 'http://modis-catalog.lapan.go.id/SPBN/SULUT/ZPPI/kmz.kml';

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(1.4848744,124.8468313),
          zoom: 2,
          mapTypeId: 'terrain'
        });

        var kmlLayer = new google.maps.KmlLayer(src, {
          suppressInfoWindows: true,
          preserveViewport: false,
          map: map
        });
        kmlLayer.addListener('click', function(event) {
          var content = event.featureData.infoWindowHtml;
          var testimonial = document.getElementById('capture');
          testimonial.innerHTML = content;
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN2bsTapDESXaE3C2hL-Y8T3h0wTkD6yA&callback=initMap&libraries=geometry&sensor=false">
      </script>
  </body>
</html>