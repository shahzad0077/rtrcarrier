<style>
html, body, #map { 
  width:100%; 
  height:100%; 
  margin:0; 
  padding:0; 
  z-index: 5;
}
#filterdiv{
  margin-top: 25%;
  margin-left: 10px;
  z-index: 20000;
  position: relative;
  width: 200px;
}
.chk{
  width: 15px; 
  height: 15px; 
}
</style>
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
  <div style="width: 100%;" id="map">
    <div id="filterdiv">
      
    </div>
  </div>
</div>
<script src="https://unpkg.com/file-saver@2.0.5/dist/FileSaver.js"></script>
<script src="{{ asset('public/carrier/assets/plugins/global/plugins.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('public/carrier/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
  <script src="{{ asset('public/carrier/assets/js/scripts.bundle.js?v=7.0.6') }}" type="text/javascript"></script>
   <script>
        setTimeout(function(){
          $("#states_chkbx_div").css({"max-height": "300px", "padding": "5%", "overflow": "auto"});
        }, 500);
        var map
        map = L.map('map', {
        center: [47.291, -107.78],
        zoom: 4,
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

      L.control.browserPrint({position:'topright'}).addTo(map);
      map.zoomControl.setPosition('topright');
     

    var baseLayers = {
    "Google Street Map": googlestreet,
    "Google Sattellite Map": googleSat,
    "Dark Map": dark,
    };
    var overLays = {
    // "Land_Plots": Land_Plots,
    // "Trees & Graphics": trees_layer,
    // "Clouds": clouds_layer
    };

    var mylayercontrol= L.control.layers(baseLayers,overLays).addTo(map);


      var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
      
          var drawControl = new L.Control.Draw({
            position: 'topright',
            draw:{
              polygon : {
                          allowIntersection: false,
                          showLength: true,
                          metric:['km', 'm']
                      },
              polyline:false,
              marker: true,
              squire: false,
              circlemarker: false,
              rectangle: false,
              circle: false,
               
              },
            edit: {
              featureGroup: drawnItems,
              remove: true,
              edit: true,
      
            }
          });
        
        map.addControl(drawControl);
          
        map.on(L.Draw.Event.CREATED, function (e) {
          console.clear();
          var type = e.layerType
          var layer = e.layer;
            drawnItems.addLayer(layer);
        });
      
      
        map.on('draw:editvertex', function (e) { 

        });   

        var eachlyr_arr =  Array();

        setTimeout(function(){
          var str='';
          str=str+'<h5>--Select State--</h5>';
          @foreach($data as $r)
          state_drwa('{{ $r->state }}')
          @endforeach
          for(var i=0;i<us_states.length;i++){

            str=str+'<label for="'+us_states[i].name+'" ><input type="checkbox" class="stchk" name="statechk" value="'+us_states[i].value+'" id="'+us_states[i].value+'" > '+us_states[i].name+' </label>&nbsp<br>'
            $('#states_chkbx_div').html(str);

            
          }

          $('.stchk').change(function(event) {
            var valname =$(event.target).val();
            
            var checked = $(this).is(':checked')
            if(checked==true){

              savelocation(valname);
              // console.log("chkd")
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
                });
                eachlyr_arr.push(valname)
                eachlyr_arr[valname]=lyrname
                eachlyr_arr[valname].addTo(map)
              });
            }else{
              savelocation(valname);
              // console.log("un chkd")
              if(map.hasLayer(eachlyr_arr[valname])){
                map.removeLayer(eachlyr_arr[valname])
              }   
            }  
          });
        }, 400); 
        
        


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



         
          // var lgeocoder=L.Control.geocoder({collapsed:false,position:"topleft", placeholder:"Enter Zip Code Here..."}).addTo(map);
         
       





          var geocoder=L.Control.geocoder({
          // defaultMarkGeocode: false,
            collapsed:false,
            position:"topleft", 
            placeholder:"Enter Zip Code Here...",
            queryParams: {"countrycodes": "US"},
            geocoder: new L.Control.Geocoder.Nominatim({
            geocodingQueryParams: {
                "countrycodes": "US"
                }
            })
          }).on('markgeocode', function(e) {
              var searchTxt = $('div.leaflet-control-geocoder-form input').val();
              console.log(searchTxt);
              var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&city='+searchTxt+'&polygon_geojson=1&format=geojson'
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
                }).addTo(map);
              });
          })
          geocoder.addTo(map);
    </script>

