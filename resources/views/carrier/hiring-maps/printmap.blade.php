 <script src="{{ asset('public/carrier/assets/plugins/global/plugins.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
<link rel="stylesheet" href="{{ url('public/carrier/map/geocoder.css') }}" />
<script src="https://unpkg.com/leaflet-control-geocoder@2.4.0/dist/Control.Geocoder.js"></script>

<script src="{{ url('public/carrier/map/states.js') }}"></script>
<script src="{{ url('public/carrier/map/print_bundle.js') }}"></script>

<script src="https://unpkg.com/file-saver@2.0.5/dist/FileSaver.js"></script>
<script src="https://igor-vladyka.github.io/leaflet.browser.print/dist/leaflet.browser.print.js"></script>
<div class="col-md-12 mt-5">
    <div style="width: 100%;  height: 100%;" id="map">
      <div id="filterdiv">
        
      </div>
    </div>
</div>
<script src="https://unpkg.com/file-saver@2.0.5/dist/FileSaver.js"></script>

<script>
        var map
        map = L.map('map', {
        center: [40.291, -95.78],
        zoom: 5,
        attributionControl: false
        });
        var googlestreet   = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
          maxZoom: 20,
          subdomains:['mt0','mt1','mt2','mt3']
          }).addTo(map);
        var dark  = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png');
        var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                    maxZoom: 20,
                    subdomains:['mt0','mt1','mt2','mt3']
                })  
      L.simpleMapScreenshoter({position:'topright'}).addTo(map)

        var eachlyr_arr =  Array();

        @foreach($data as $r)
        state_drwa('{{ $r->state }}')
        @endforeach    
        function state_drwa(valname){
              var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&state='+valname+'&polygon_geojson=1&format=geojson'
              $.getJSON(nurl, function(data) {
                console.log(data);
                var lyrname=L.geoJSON(data, {
                  style: (feature) => {
                    return {
                      stroke: true,
                      color: "#9933ff",
                      weight: 2,
                      opacity: 0.7,
                      fill: true,
                      fillColor: "#7300e6",
                      fillOpacity: 0.15,
                      smoothFactor: 0.5,
                      interactive: false,
                    };
                  },
                })
                eachlyr_arr.push(valname)
                eachlyr_arr[valname]=lyrname
                eachlyr_arr[valname].addTo(map)
              });
          
        }

        var simpleMapScreenshoter = L.simpleMapScreenshoter({
            hidden: true,
        }).addTo(map)

         function manualPrint () {
          console.log('ok');
          simpleMapScreenshoter.takeScreen('blob', {
            caption: function () {
                return '{{ $tittle }}'
            }
          }).then(blob => {
              saveAs(blob, 'Map_Print.png')
          }).catch(e => {
              alert(e.toString())
          })       
        }

        $( document ).ready(function() {
          setTimeout(function(){
             manualPrint();
          }, 3000);
           
        });
    </script>