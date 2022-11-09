@extends('layouts.main-layout')
@section('title','Add Hiring Map')
@section('content')

@php
    $map_id = rand(100000000000 , 2000000000);
@endphp
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

                            <form enctype="multipart/form-data" method="POST" action="{{ url('addnewhiringmap') }}" class="form">
                                @csrf
                                <input type="hidden" name="map_id" value="{{ $map_id }}">
                                
                                <!--begin::Body-->
                                <div class="card-body">
                                    @include('alerts.index')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map title</label>
                                                <input type="text" class="form-control form-control-lg form-control-solid" name="map_tittle" placeholder="RTR-WFX-hiringmap-5.16.22">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map Type</label>
                                                <select class="form-control" name="map_type">
                                                    <option value="">Map Type</option>
                                                    <option value="Hiring Map">Hiring Map</option>
                                                    <option value="Operating Map">Operating Map</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <button type="button" class="form-control btn btn-secondary map-model-btn state-btns" data-toggle="modal" data-target="#addState">+ Add State</button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn form-control btn-secondary map-model-btn city-btns" data-toggle="modal" data-target="#addCity">+ Add City</button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button onclick="drawmap()" type="button" class="btn form-control btn-secondary map-model-btn zip-btns">+ Draw Map</button>
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-2">
                                                    <a onclick="shownewtab()" href="javascript:void(0)" class="btn form-control btn-secondary map-model-btn zip-btns" ><i class="fa fa-print"></i> Print Map</a>
                                                </div>
                                                <!-- <div class="col-md-2">
                                                    <a target="_blank" href="{{ url('printmap') }}/{{ $map_id }}" class="btn form-control btn-secondary map-model-btn zip-btns" ><i class="fa fa-print"></i> Print Map</a>
                                                </div> -->
                                                <!-- <div class="col-md-2">
                                                    <button class="btn form-control btn-secondary map-model-btn zip-btns" type="button" onclick="manualPrint()" id="custom_print_button"><i class="fa fa-print"></i> Print Map</button>
                                                </div> -->
                                            </div>
                                        </div>
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
                                                <div class="col-md-2">
                                                    <h3>Upload Logo</h3>
                                                    <div class="upload-logo">
                                                        <label for="selectimage">
                                                            <span style="top: 36px; position: absolute; right: 115px;" class="selectimage btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                        </span>
                                                        <div class="logoicon">
                                                            <i class="icon-2x text-dark-50 flaticon2-up"></i>
                                                        </div>
                                                        <input id="selectimage" style="display:none;" name="logo" required accept=".png, .jpg, .jpeg" type='file' onchange="readURL(this);" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 allow-files">
                                            <p>Allowed file types: png, jpg, jpeg</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="map-btns">
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
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
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
            <div style="height:300px;" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="pac-container">
                            <input class="form-control w-100" id="pac-input" type="text" placeholder="Search City">
                            <div id="location-error"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="addnewcity()" type="button" class="btn btn-primary font-weight-bold">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Add State-->
<div class="modal fade" id="addState" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
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
                <div id="list1" class="dropdown-check-list" tabindex="100">
                  <span class="anchor">Select States</span>
                  <ul class="items">
                    @foreach(DB::table('us_states')->orderby('STATE_NAME' , 'ASC')->get() as $r)
                    <li id="removestatefromli{{ $r->ID }}" onclick="selectdropdown({{ $r->ID }},'{{ $r->STATE_NAME }}' , '{{ $r->STATE_CODE }}')"><input class="states" value="{{ $r->STATE_CODE }}" type="checkbox" id="checkbox{{ $r->ID }}" ><label class="label{{ $r->ID }}" for="checkbox{{ $r->ID }}">{{ $r->STATE_NAME }}</label> </li>
                    @endforeach
                  </ul>
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
        function shownewtab() {
            var url = '{{ url("printmap") }}/{{ $map_id }}'
            window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=500,width=5000,height=1000");
        }
        function selectimageformap() {
            alert('ok');
        }
        function selectdropdown(id , value , code) 
        {
            var checkList = document.getElementById('list1');
            checkList.classList.remove('visible');
            var html = '<input class="states" value="'+value+'" type="hidden" id="selectedstatename" ><input class="states" value="'+id+'" type="hidden" id="selectedstates" >'+value+'';
            $('.anchor').html(html);
        }
        function addnewstate()
        {
            var id = $('#selectedstates').val();
            var value = $('#selectedstatename').val();
            $('.label'+id).click();
            $('#appenddivs').append('<button type="button" class="states'+id+' btn btn-secondary map-delete-btn">'+value+'<i class="icon-2x text-dark-50 flaticon-delete-1" onclick="deletestate('+id+')"></i></button>');
            var html = 'Select State';
            $('.anchor').html(html);
            $('#removestatefromli'+id).hide();
            $('#addState').modal('hide');
        }
        function deletestate(id) {
            $('.label'+id).click();
            $('.states'+id).remove();
            var html = 'Select State';
            $('.anchor').html(html);
            $('#removestatefromli'+id).show();
        }
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

      L.control.browserPrint({position:'topright'}).addTo(map);
      map.zoomControl.setPosition('topright');
     
      var simpleMapScreenshoter = L.simpleMapScreenshoter({
          hidden: true,
      }).addTo(map)

      function manualPrint () {
      $("#filterdiv").hide();
      simpleMapScreenshoter.takeScreen('blob', {
        caption: function () {
                        return 'Map Logo copyright 2022'
                    }
      }).then(blob => {
          saveAs(blob, 'Map_Print.png')
      }).catch(e => {
          alert(e.toString())
      })
      setTimeout(function(){
        $("#filterdiv").show();
      }, 3000);
     
        }

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
              marker: false,
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
        var city_arr = Array();


          $('.states').change(function(event) {
            var valname =$(event.target).val();
            var checked = $(this).is(':checked')
            if(checked==true){
              savelocation(valname , 'state');
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
              savelocation(valname , 'state');
              // console.log("un chkd")
              if(map.hasLayer(eachlyr_arr[valname])){
                map.removeLayer(eachlyr_arr[valname])
              }   
            }  
          });
  
        
        


        function state_drwa(valname){
              var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&state='+valname+'&polygon_geojson=1&format=geojson'
              $.getJSON(nurl, function(data) {
                // console.log(data);
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

        function city_drawn(valname , state)
        {
            var j = valname;
            var searchTxt = j.replace(" ", "-");
            var city = searchTxt.toLowerCase();
            var state_apend = state.toLowerCase();
              var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&city='+searchTxt+'&polygon_geojson=1&state='+state_apend+'&format=geojson'
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
                var bounds = lyrname.getBounds();
                map.fitBounds(bounds)
                var center = bounds.getCenter()
                map.panTo(center)
              });
                
        }


        
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
              console.log(nurl);
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
        
        function drawmap () {
            $('.leaflet-popup-pane .leaflet-draw-tooltip').show();
            $('.leaflet-draw-draw-polygon')[0].click();
        }
        function selectcity(id, state)
        {
            $('#searchcity').val(id);
            $('#statehidden').val(state)
            $('#citiesdiv').hide();
        }
        
        function addnewcity()
        {
            var array = $('#pac-input').val().split(",");
            var city = array[0];
            var state = array[1];
            city_drawn(city , state);
            savecitymaplocation(city , state);
            $('#searchcity').val('');
            $('#pac-input').val('')
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
        function savelocation(value , column)
        {
            var app_url = geturl();
            var map_id = '{{ $map_id }}';
            $.ajax({
                url:app_url+"/savestatemap/"+value+"/"+map_id+"/"+column, 
                type:"get",
                success:function(res){
                   
                }
            })
        }


        function savecitymaplocation(city , state)
        {
            var cityshow = city;
            var app_url = geturl();
            var map_id = '{{ $map_id }}';
            $.ajax({
                url:app_url+"/savecitymaplocation/"+city+"/"+state+"/"+map_id, 
                type:"get",
                success:function(res){
                   
                }
            })

            var j = city;
            var searchTxt = j.replace(" ", "-");
            var city = searchTxt.toLowerCase();
            var state_apend = state.toLowerCase();
            $('#appenddivs').append('<button type="button" class="city'+city+' btn btn-secondary map-delete-btn">'+cityshow+' '+state+' <i class="icon-2x text-dark-50 flaticon-delete-1" onclick="deletecity('+city+' , '+state+')"></i></button>');
        }
    </script>
@endsection
