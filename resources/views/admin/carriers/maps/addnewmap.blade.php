@extends('admin.layouts.main-layout')
@section('title','Carriers')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Manage Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('admin/carriers') }}" class="text-muted">All Carriers</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">All Maps</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add New Map</a>
</li>
@endsection
@section('content')
@php
    $map_id = rand(100000000000 , 2000000000);
@endphp
<style type="text/css">
    #zipcodesuggesstions ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #ddd;
        height: 300px;
        overflow: auto;
        display: none;
    }
    #zipcodesuggesstions ul li{
        padding: 10px;
        cursor: pointer;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            @include('alerts.index')
            <!--begin::Profile Change Password-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                @include('admin.carriers.sidebar')
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8 mt-6">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Add New Map</h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{ url('addnewhiringmap') }}" class="form">
                                @csrf
                                <input type="hidden" name="map_id" value="{{ $map_id }}">
                                <input type="hidden" name="type" value="admin">
                                <input type="hidden" name="carrier_id" value="{{ $data->id }}">
                                <!--begin::Body-->
                                <div class="card-body">
                                    @include('alerts.index')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map title</label>
                                                <input required onkeyup="maptittle()" id="map_tittle" type="text" class="form-control form-control-lg form-control-solid" name="map_tittle" placeholder="RTR-WFX-hiringmap-5.16.22">
                                                <div style="display:none;" class="map_tittle_error text-danger">This Field is Required for Print Map</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map Type</label>
                                                <select class="form-control selectpicker" name="map_type">
                                                    <option value="">Select a Map Type</option>
                                                    <option value="Hiring Map">Hiring Map</option>
                                                    <option value="Operating Map">Operating Map</option>
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
                        </div>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Change Password-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!-- Add Zipcode-->
<div class="modal fade" id="addzipcode" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
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
                            <input onkeyup="searchzipcode(this.value)" id="zipcode" type="text" class="form-control form-control-lg form-control-solid" name="zipcode" placeholder="Enter Zip Code">
                            <div id="zipcodesuggesstions">
                                <ul id="zipcodeul">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="range-slider-two">
                              <label>Select Radius</label>
                              <div class="d-flex flex-row">
                                  <input style="margin-top:10px;" class="range-slider__range-two" type="range" value="0" min="0" max="1000">
                                  <input style="width:70px; height: 30px; background-color: white; color:black; border:1px solid lightgray" min="0" max="1000" type="number" class="range-slider__value-two" value="0" name="">
                              </div>
                            </div>
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
                    <input type="hidden" id="cityLat" name="">
                    <input type="hidden" id="cityLng" name="">
                    <div class="col-md-12">
                        <div class="range-slider">
                          <label>Select Radius</label>
                          <div class="d-flex flex-row">
                              <input style="margin-top:10px;" class="range-slider__range" type="range" value="0" min="0" max="1000">
                              <input style="width:70px; height: 30px; background-color: white; color:black; border:1px solid lightgray" min="0" max="1000" type="number" class="range-slider__value" value="0" name="">
                          </div>
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
        function searchzipcode(id) {
            var app_url = geturl();
            $.ajax({
                url:app_url+"/searchzipcode/"+id, 
                type:"get",
                success:function(res){
                 $('#zipcodeul').show();   
                 $('#zipcodeul').html(res);      
                }
            })
        }
        function selectzipcode(id) {
            $('#zipcodeul').hide();
            $('#zipcodeul').html('');
            $('#zipcode').val(id);
        }
        function maptittle() {
            $('.map_tittle_error').hide();
        }
        function shownewtab() {
            var tittle = $('#map_tittle').val();
            if(tittle == '')
            {
                $('.map_tittle_error').show();
            }else{
                var url = '{{ url("printmap") }}/{{ $map_id }}/'+tittle;
                window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=500,width=5000,height=1000");
            }
            
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

        var circlelayer= L.layerGroup();


        function circle_draw(lat,lon,radius){
            var rmile=radius * 1609.34
            // if(map.hasLayer(circlelayer)){
            //     map.removeLayer(circlelayer)
            // }
            circlelayer=L.circle([lat,lon], rmile, {color: 'red', opacity:.5});
            circlelayer.addTo(map)
        }


        function city_drawn(valname , state)
        {
            var j = valname;
            var searchTxt = j.replace(" ", "-");
            var city = searchTxt.toLowerCase();
            var state_apend = state.toLowerCase();
              var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&city='+searchTxt+'&polygon_geojson=1&state='+state_apend+'&format=geojson'
              $.getJSON(nurl, function(data) {
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
                eachlyr_arr.push(city)
                eachlyr_arr[city]=lyrname
                // console.log(eachlyr_arr);
                var bounds = lyrname.getBounds();
                map.fitBounds(bounds)
                var center = bounds.getCenter()
                map.panTo(center)
              });
                
        }

        function deletecity(valname)
        {
            var city = valname.toLowerCase();
            if(map.hasLayer(eachlyr_arr[city])){
                map.removeLayer(eachlyr_arr[city])
            }
            if(map.hasLayer(circlelayer)){
                map.removeLayer(circlelayer)
            }
            $('.city'+valname).remove();
        }


        function getlattitudeandlongitude(zipcode)
        {
            $.ajax({
                url:"https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyBQAdBoWGWwdne8WSvfQRlQv58Hyz-BVQw&address="+zipcode, 
                type:"get",
                success:function(res){
                    latitude = res.results[0].geometry.location.lat;
                    longitude= res.results[0].geometry.location.lng;
                    var marker = L.marker([latitude, longitude]).addTo(map);
                    var radius = $('.range-slider__value-two').val();
                    circle_draw(latitude,longitude,radius);
                    $('#zipcode').val('')
                }
            })
        }
    </script>



    <script type="text/javascript">
        var rangeSlider = function() {
          var slider = $('.range-slider'),
            range = $('.range-slider__range'),
            valuecity = $('.range-slider__value');

            slider.each(function() {

            valuecity.each(function() {
              var valuecity = $(this).prev().attr('value');
              $(this).val(valuecity);
            });

            range.on('input', function() {
              $(this).next(valuecity).val(this.value);
            });
          });
        };

        rangeSlider();

        var rangeSlidertwo = function() {
          var slidertwo = $('.range-slider-two'),
            rangetwo = $('.range-slider__range-two'),
            value = $('.range-slider__value-two');

            slidertwo.each(function() {

            value.each(function() {
              var value = $(this).prev().attr('value');
              $(this).val(value);
            });

            rangetwo.on('input', function() {
              $(this).next(value).val(this.value);
            });
          });
        };

        rangeSlidertwo();

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
            var lat = $('#cityLat').val();
            var lon = $('#cityLng').val();
            var radius = $('.range-slider__value').val();
            console.log(radius);
            circle_draw(lat,lon,radius);
            $('#searchcity').val('');
            $('#pac-input').val('')
            $('#addCity').modal('hide');
        }
        
        function addnewzip()
        {
            var zipcode = $('#zipcode').val();
            getlattitudeandlongitude(zipcode);

            $('#appenddivs').append('<button type="button" class="zipcode'+zipcode+' btn btn-secondary map-delete-btn">'+zipcode+'<i class="icon-2x text-dark-50 flaticon-delete-1" onclick="deletezipcode('+zipcode+')"></i></button>');
            $('#addzipcode').modal('hide')
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
            var app_url = geturl();
            var map_id = '{{ $map_id }}';
            $.ajax({
                url:app_url+"/savecitymaplocation/"+city+"/"+state+"/"+map_id, 
                type:"get",
                success:function(res){
                 $('#appenddivs').append(res);      
                }
            })
            
        }
    </script>
@endsection