@extends('layouts.main-layout')
@section('title','Edit Map')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Edit Hiring Map</a>
</li>
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card card-custom card-stretch map-card">
                            <!--begin::Header-->
                            <div class="card-header py-3">
                                <div class="card-title align-items-start flex-column">
                                    <h3 class="card-label font-weight-bolder text-dark">Add Maps</h3>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->

                            <form enctype="multipart/form-data" method="POST" action="{{ url('updatehiringmap') }}" class="form">
                                @csrf
                                <input type="hidden" name="map_id" value="{{ $map->id }}">
                                <!--begin::Body-->
                                <div class="card-body">
                                    @include('alerts.index')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map title</label>
                                                <input type="text" value="{{ $map->tittle }}" class="form-control form-control-lg form-control-solid" name="map_tittle" placeholder="RTR-WFX-hiringmap-5.16.22">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map Type</label>
                                                <select class="form-control selectpicker" name="map_type">
                                                    <option value="">Map Type</option>
                                                    <option @if($map->type == 'Hiring Map') selected @endif value="Hiring Map">Hiring Map</option>
                                                    <option @if($map->type == 'Operating Map') selected @endif value="Operating Map">Operating Map</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <button type="button" class="btn btn-secondary map-model-btn state-btns" data-toggle="modal" data-target="#addState">+ Add State</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-secondary map-model-btn city-btns" data-toggle="modal" data-target="#addCity">+ Add City</button>
                                                    </div>
                                                    <div>
                                                        <button onclick="drawmap()" type="button" class="btn btn-secondary map-model-btn zip-btns">+ Draw Map</button>
                                                    </div>
                                                    <div>
                                                        <button data-toggle="modal" data-target="#addzipcode" type="button" class="btn btn-secondary map-model-btn zip-btns">+ Add Zip Code</button>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a onclick="shownewtab()" href="javascript:void(0)" class="btn form-control btn-secondary map-model-btn zip-btns" ><i class="fa fa-print"></i> Print Map</a>
                                                </div>
                                                
                                            </div>
                                        </div>
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
                                            <div style="width: 100%; border-radius: 12px; height: 500px; border: 1px solid #ccc" id="map">
                                              <div id="filterdiv">
                                                
                                              </div>
                                            </div>
                                        </div>
                                        <script src="https://unpkg.com/file-saver@2.0.5/dist/FileSaver.js"></script>                                  
                                        <div id="appenddivs" class="col-md-12 mt-5">
                                            
                                        </div>
                                        <div class="col-md-12 mt-5 upload-log-title">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Map Logo</label>
                                                    <input class="form-control" type="file" name="logo" accept=".png, .jpg, .jpeg">
                                                </div>
                                                
                                            </div>
                                            <div style="margin-top:20px;" class="row">
                                                <div class="col-md-12">
                                                    <img src="{{ url('public/images') }}/{{ $map->logo  }}" width="120">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 allow-files">
                                            <p>Allowed file types: png, jpg, jpeg</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="map-btns">
                                                <button type="button" class="btn btn-primary">Download MAP</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    
<!-- Add Zipcode-->
<div class="modal fade" id="addZip" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="modal-title" id="exampleModalLabel">Add Zip Code</h5>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <input id="zipcode" type="text" class="form-control form-control-lg form-control-solid" name="zipcode" placeholder="Enter Zip Code">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button onclick="addnewzip()" type="button" class="btn btn-primary font-weight-bold">Add Zip Code</button>
                </div>
            </div>
    </div>
</div>


<!-- Add city-->
<div class="modal fade" id="addCity" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input id="city" type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter City">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button onclick="addnewcity()" type="button" class="btn btn-primary font-weight-bold">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Add State-->
<div class="modal fade" id="addState" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Add State</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="states_div">
                          <div id="states_chkbx_div" style=" max-height: 300px; padding: 5%; overflow: auto; background-color: aliceblue;">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button onclick="addnewstate()" type="button" class="btn btn-primary font-weight-bold">Save</button>
            </div>
        </div>
    </div>
</div>



@endsection


@section('scripts')
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
          @foreach(DB::table('maplocations')->where('map_id' , $map->id)->get() as $r)
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
    <script type="text/javascript">
        function addnewstate()
        {
            var state = $('#state').val();
            let value1 = Math.floor(Math.random() * 10000);;
            $('#appenddivs').append('<button type="button" class="state'+value1+' btn btn-secondary map-delete-btn">'+state+' <i class="icon-2x text-dark-50 flaticon-delete-1" onclick="deletestate('+value1+')"></i></button><input type="hidden" value="'+state+'" name="state[]" id="state'+value1+'">');
            $('#state').val('')
            $('#addState').modal('hide');
        }
        function deletestate(id)
        {
            $('.state'+id).hide();
            $('#state'+id).val('');
        }
        function addnewcity()
        {
            var city = $('#city').val();
            let value1 = Math.floor(Math.random() * 10000);;
            $('#appenddivs').append('<button type="button" class="city'+value1+' btn btn-secondary map-delete-btn">'+city+' <i class="icon-2x text-dark-50 flaticon-delete-1" onclick="deletecity('+value1+')"></i></button><input type="hidden" value="'+city+'" name="city[]" id="city'+value1+'">');
            $('#city').val('')
            $('#addCity').modal('hide');
        }
        function deletecity(id)
        {
            $('.city'+id).hide();
            $('#city'+id).val('');
        }
        function addnewzip()
        {
            var zipcode = $('#zipcode').val();
            let value1 = Math.floor(Math.random() * 10000);;
            $('#appenddivs').append('<button type="button" class="zipcode'+value1+' btn btn-secondary map-delete-btn">'+zipcode+' <i class="icon-2x text-dark-50 flaticon-delete-1" onclick="deletezipcode('+value1+')"></i></button><input type="hidden" value="'+zipcode+'" name="zipcode[]" id="zipcode'+value1+'">');
            $('#zipcode').val('')
            $('#addZip').modal('hide');
        }
        function deletezipcode(id)
        {
            $('.zipcode'+id).hide();
            $('#zipcode'+id).val('');
        }
        function savelocation(value)
        {
            var app_url = geturl();
            var map_id = '{{ $map->id }}';
            $.ajax({
                url:app_url+"/savestatemap/"+value+"/"+map_id, 
                type:"get",
                success:function(res){
                   
                }
            })
        }
    </script>
@endsection
