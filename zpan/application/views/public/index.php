<!DOCTYPE html>
<html>
  <head>
    <title>ZPPI</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href='https://api.tiles.mapbox.com/mapbox.js/v2.0.1/mapbox.css' rel='stylesheet' />
  <script type="text/javascript" src="https://api.tiles.mapbox.com/mapbox.js/v2.0.1/mapbox.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- keen-analysis@1.2.2 -->
  <script src="https://d26b395fwzu5fz.cloudfront.net/keen-analysis-1.2.2.js" type="text/javascript"></script>

  <!-- keen-dataviz@1.1.3 -->
  <link href="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.css" rel="stylesheet" />
  <script src="https://d26b395fwzu5fz.cloudfront.net/keen-dataviz-1.1.3.js" type="text/javascript"></script>

  <!-- Dashboard -->
  <style type="text/css">
    @media screen and (max-width: 720px) {
    .ilang {
      display: none;
      }
    }

  </style>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/geo') ?>/geo-explorer.css" />
  <script type="text/javascript" src="<?php echo base_url('assets/geo') ?>/geo-explorer.js"></script>
  <script type="text/javascript" src="http://cordc.ucsd.edu/js/RTV/RTVMapType.js"></script>
    <script src="https://www.google.com/jsapi"></script>

  </head>
 <body class="keen-dashboard" style="background-color: #0f597f">
  <div class="row">
  <div id="app-wrapper">
    <div id="app-toolbar" style="background-color: #ffffff">
      <form action="" onsubmit="return false;" method="post">
        <div class="row tools" >

          <div class="col-sm-12" >
            <div class="tool radius" >
              <img src="<?php echo base_url('assets/img/zpan.png') ?>" style="height: 70px;">&nbsp;
              <img src="<?php echo base_url('assets/img/logo_manado.png') ?>" style="height: 50px;float:right;margin: 10px">&nbsp; 
              <img class="ilang" src="<?php echo base_url('assets/img/logo_lapan.png') ?>" style="height: 50px;float:right;margin: 10px">&nbsp;
            </div>
          </div>
          <!--
          <div class="col-sm-2">
            <div class="tool radius">
              <h5>Query Radius</h5>
              <input type="number" id="radius-value" class="form-control" value="">
              <select class="form-control" id="radius-suffix">
                <option></option>
                <option value="mi">mi</option>
                <option value="km">km</option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="tool coordinates">
              <h5>Latitude</h5>
              <input type="number" step="any" id="coordinates-lat" class="form-control" placeholder="Latitude">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="tool coordinates">
              <h5>Longitude</h5>
              <input type="number" step="any" id="coordinates-lng" class="form-control" placeholder="Longitude">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="tool timeframe">
              <h5>Start time</h5>
              <input type="date" id="timeframe-start" class="form-control" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="tool timeframe">
              <h5>End time</h5>
              <input type="date" id="timeframe-end" class="form-control" placeholder="mm/dd/yyyy">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="tool">
              <button id="refresh" class="btn btn-primary btn-block">Refresh</button>
            </div>
          </div>
          -->
        </div>
      </form>
    </div>

    <div class="col-sm-7" style="padding: 0;margin:0; ">
      <div id="map" style="height:91vh;width:100%;margin-top: 8vh;padding:0; border: 1px solid black; border-radius: 15px;" ></div>
    </div>
    <div class="col-sm-5">
      <div style="background-color: white;width:100%; margin-top: 8vh;padding:20px;border: 1px solid black;border-radius: 15px;">

        <h3>Data Cuaca Area Manado</h3><hr>
        <?php
              $homepage = file_get_contents('http://samratulangi.sulut.bmkg.go.id/inc/GetCuacaGoogleMaps.php');
              $h=json_decode($homepage);
              $count=sizeof($h);
              $index=0;
              foreach($h as $c):
              $latitude[$index] = $c->lat;
              $longitude[$index]= $c->lng;
              $kota[$index]= $c->Kota;
              $cuaca[$index]= $c->Cuaca;
              $suhu[$index]= $c->Suhu;
              $kelembaban[$index]= $c->RH;
              $angin[$index]= $c->Angin;
              $simbol[$index]= $c->Simbol;
              $tanggal[$index]= $c->Tanggal;
              $kondisi[$index]= $c->Kondisi;
              $valid[$index]= $c->Valid;
              $index++;
              endforeach;

              $manado= $kota[9];
              $lat_mnd = $latitude[9];
              $lng_mnd = $longitude[9];
              $cuaca_mnd = $cuaca[9];
              $suhu_mnd = $suhu[9];
              $kelembaban_mnd = $kelembaban[9];
              $angin_mnd = $angin[9];
              $simbol_mnd = $simbol[9];
              $tanggal_mnd = $tanggal[9];
              $kondisi_mnd = $kondisi[9];
              $valid_mnd = $valid[9];
        ?>
        <div class="row">
          <div class="col-sm-2">
            <img src="<?php echo base_url('assets/weather/'.$cuaca_mnd.'.png')?>">
          </div>

          <div class="col-sm-3">
            <h4>Cuaca</h4>
            <h4>Suhu</h4>
            <h4>Arah Angin</h4>
            <h4>Kelembaban</h4>
          </div>

          <div class="col-sm-6">
        <?php
            
              echo '<h4> : '.$cuaca_mnd.'</h4>';
              echo '<h4> : '.$suhu_mnd.'</h4>';
              echo '<h4> : '.$angin_mnd.'</h4>';
              echo '<h4> : '.$kelembaban_mnd.'</h4>';
        ?>
        </div>
       <!--  <div class="col-sm-2">
         
        </div> -->
      </div>
  
    </div>

    <div style="background-color: white;width:100%; margin-top: 3px;padding:20px;border: 1px solid black; border-radius: 15px;">

        <h3>Data Elevasi</h3><hr>
        Klik polyline untuk menampilkan elevasi dan jarak<br><br>
          <div id="length"></div><br>
          <div id="elevation_chart"></div>
        <br>
    </div>
    </div>

</div>
        
      <?php
      $d=0;
            foreach($zppi as $z)
            {
              $long[$d]=$z["longitude"];
              $lat[$d]=$z["latitude"];
              $zona[$d]=$z["zona"];
              $tanggal[$d]=$z["tanggal"];
              $d++;
            }

                            // $url1 = file_get_contents(base_url()."assets/zppi1.json");
                            // $url2 = file_get_contents(base_url()."assets/zppi2.json");
                            // $json1 = json_decode($url1,true);
                            // $json2 = json_decode($url2,true);
                           

                            // $c=0;
                            // foreach($json1["features"] as $j1):
                            //     $geometry1[$c] = $j1["geometry"];
                            //     $c++;
                            // endforeach;

                            

                            // $f=0;
                            // foreach($json2["features"] as $j2):
                            //     $geometry2[$f] = $j2["geometry"];
                            //     $f++;
                            // endforeach;

                            // $geometry = array_merge($geometry1,$geometry2);

                            // $d=0;
                            // foreach($geometry as $g1):
                            //     $long[$d]=$g1["x"];
                            //     $lat[$d]=$g1["y"];
                            //     $d++;
                            // endforeach;
                        ?>
 
      <script>
        // Load the Visualization API and the columnchart package.
      google.load('visualization', '1', {packages: ['columnchart']});

      function initMap() {
         var elevator = new google.maps.ElevationService;
         var manado = {lat: 1.4848744, lng: 124.8468313};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 6,
                styles:[{"featureType": "road","elementType": "geometry.fill","stylers": [{"color": "#011066"}]},{"featureType": "road","elementType": "geometry.stroke","stylers": [{"visibility": "off"}]},{"featureType": "poi","elementType": "geometry.fill","stylers": [{"color": "#5580aa"}]},{"featureType": "landscape","elementType": "geometry.fill","stylers": [{"color": "#405783"}]},{"elementType": "labels.text","stylers": [{"color": "#ffffff"},{"weight": 0.5}]},{"elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "geometry","stylers": [{"color": "#27abda"}]},{"featureType": "transit","elementType": "geometry","stylers": [{"color": "#272664"}]}],
                mapTypeId: 'terrain',
                center: manado
            });

       
            <?php 
$e=0;
foreach($zppi as $z): ?>

           
var geoLatlng<?php echo $e;?> = new google.maps.LatLng(<?php echo $lat[$e];?>,<?php echo $long[$e];?>);
var geo_marker<?php echo $e;?> = new google.maps.Marker({
    position: geoLatlng<?php echo $e;?>,
    icon:"<?php echo base_url('assets/img/marker/fish2.png');?>",
    title:"Zona Ikan"
});

var contentString<?php echo $e;?> =
      '<b>Koordinat Area Ikan :</b><br>'+
      ' '+"Latitude : <?php echo $lat[$e]?>"+'<br>'+
      ' '+"Longitude: <?php echo $long[$e]?>"+'<br>';

var infowindow<?php echo $e;?> = new google.maps.InfoWindow({
    content: contentString<?php echo $e;?>
  });

geo_marker<?php echo $e;?>.setMap(map);

geo_marker<?php echo $e;?>.addListener('click', function() {
    infowindow<?php echo $e;?>.open(map, geo_marker<?php echo $e;?>);
});

var flightPath<?php echo $e;?> = new google.maps.Polyline({
          path: [manado, geoLatlng<?php echo $e;?>],
          geodesic: true,
          strokeColor: '#FFFFFF',
          strokeOpacity: 0.5,
          strokeWeight: 2
        });
        var distanceM<?php echo $e;?> = google.maps.geometry.spherical.computeLength(flightPath<?php echo $e;?>.getPath());
        var distanceKm<?php echo $e;?> = distanceM<?php echo $e;?>/1000;
        
        flightPath<?php echo $e;?>.setMap(map);

flightPath<?php echo $e;?>.addListener('click', function(event) {
document.getElementById('length').innerHTML = 'Jarak dari Manado : '+Math.round(distanceKm<?php echo $e;?>).toFixed(2)+' Km';
var path<?php echo $e;?> = [{lat: 1.4848744, lng: 124.8468313}, 
        {lat: <?php echo $lat[$e];?>, lng: <?php echo $long[$e];?>}]; 
         displayPathElevation(path<?php echo $e;?>, elevator, map);
});

        
<?php 
$e++;
endforeach; 

?>
        // Create an ElevationService.
        
       
        // Draw the path, using the Visualization API and the Elevation service.
 var rtv = new RTVMapType(map);
 map.overlayMapTypes.push(rtv)      
      }

      function displayPathElevation(path, elevator, map) {
        // Display a polyline of the elevation path.
        

        // Create a PathElevationRequest object using this array.
        // Ask for 256 samples along that path.
        // Initiate the path request.
        elevator.getElevationAlongPath({
          'path': path,
          'samples': 256
        }, plotElevation);
      }

      // Takes an array of ElevationResult objects, draws the path on the map
      // and plots the elevation profile on a Visualization API ColumnChart.
      function plotElevation(elevations, status) {
        var chartDiv = document.getElementById('elevation_chart');
        if (status !== 'OK') {
          // Show the error code inside the chartDiv.
          chartDiv.innerHTML = 'Cannot show elevation: request failed because ' +
              status;
          return;
        }
        // Create a new chart in the elevation_chart DIV.
        var chart = new google.visualization.ColumnChart(chartDiv);

        // Extract the data from which to populate the chart.
        // Because the samples are equidistant, the 'Sample'
        // column here does double duty as distance along the
        // X axis.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sample');
        data.addColumn('number', 'Elevation');
        for (var i = 0; i < elevations.length; i++) {
          data.addRow(['', elevations[i].elevation]);
        }

        // Draw the chart using the data within its DIV.
        chart.draw(data, {
          height: 150,
          legend: 'none',
          titleY: 'Elevation (m)'
        });
      }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN2bsTapDESXaE3C2hL-Y8T3h0wTkD6yA&callback=initMap&libraries=geometry&sensor=false">
      </script>

  </body>
</html>