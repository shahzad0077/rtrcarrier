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
                                                <input required type="text" class="form-control form-control-lg form-control-solid" name="map_type" placeholder="Map Type">
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            <button type="button" class="btn btn-secondary map-model-btn state-btns" data-toggle="modal" data-target="#addState">+ Add State</button>

                                            <button type="button" class="btn btn-secondary map-model-btn city-btns" data-toggle="modal" data-target="#addCity">+ Add City</button>

                                            <button type="button" class="btn btn-secondary map-model-btn zip-btns" data-toggle="modal" data-target="#addZip">+ Add Zip</button>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <div id="map" style="width: 100%; border-radius: 12px; height: 500px; border: 1px solid #ccc"></div>
                                        </div>
                                        <div id="appenddivs" class="col-md-12 mt-5">
                                            
                                        </div>
                                        <div class="col-md-12 mt-5 upload-log-title">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <h3>Upload Logo</h3>
                                                    <div class="dropzone dropzone-default dz-clickable my-files" id="kt_dropzone_1">
                                                        <div class="dropzone-msg dz-message needsclick up-arrow">
                                                            <h3 class="dropzone-msg-title"><i class="icon-2x text-dark-50 flaticon2-up"></i></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 logo-preview">
                                                    <div class="image-input" id="kt_image_2">
                                                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_2.jpg)"></div>
                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="logo" accept=".png, .jpg, .jpeg">
                                                            <input type="hidden" name="profile_avatar_remove">
                                                        </label>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 allow-files">
                                            <p>Allowed file types: png, jpg, jpeg</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <div class="map-btns">
                                                <button type="button" class="btn btn-secondary mr-2">Preview</button>
                                                <button type="button" class="btn btn-outline-primary mr-2">Download as PDF</button>
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
                        <input id="state" type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter State">
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
    </script>
   


    <script src="{{asset('public/carrier/assets/map/libs/leaflet-src.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/carrier/assets/map/libs/leaflet.css')}}"/>
    <script src="{{asset('public/carrier/assets/map/src/Leaflet.draw.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/Leaflet.Draw.Event.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/carrier/assets/map/src/leaflet.draw.css')}}"/>

    <script src="{{asset('public/carrier/assets/map/src/Toolbar.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/Tooltip.js')}}"></script>

    <script src="{{asset('public/carrier/assets/map/src/ext/GeometryUtil.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/ext/LatLngUtil.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/ext/LineUtil.Intersect.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/ext/Polygon.Intersect.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/ext/Polyline.Intersect.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/ext/TouchEvents.js')}}"></script>

    <script src="{{asset('public/carrier/assets/map/src/draw/DrawToolbar.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Feature.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.SimpleShape.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Polyline.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Marker.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Circle.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.CircleMarker.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Polygon.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Rectangle.js')}}"></script>


    <script src="{{asset('public/carrier/assets/map/src/edit/EditToolbar.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/EditToolbar.Edit.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/EditToolbar.Delete.js')}}"></script>

    <script src="{{asset('public/carrier/assets/map/src/Control.Draw.js')}}"></script>

    <script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Poly.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.SimpleShape.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Rectangle.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Marker.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.CircleMarker.js')}}"></script>
    <script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Circle.js')}}"></script>
    <script>
        var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
        map = new L.Map('map', { center: new L.LatLng(32.008694605395604,74.02606973404139), zoom: 13 }),
        drawnItems = L.featureGroup().addTo(map);
        L.control.layers({
            'osm': osm.addTo(map)
        }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);



        @foreach(DB::table('maplocations')->get() as $r)


        // L.circle([{{ $r->long }},{{ $r->lat }}], {{ $r->radius }}).addTo(map);

        @endforeach


        map.addControl(new L.Control.Draw({
            edit: {
                featureGroup: drawnItems,
                poly: {
                    allowIntersection: false
                }
            },
            draw: {
                polygon: false,
                rectangle:false,
                circlemarker:false,
                polyline:false,
                marker:false
            }
        }));

        map.on(L.Draw.Event.CREATED, function (event) {
            var layer = event.layer;
            var latlong = layer.getLatLng();
            var center = [latlong.lng,latlong.lat]; 
            var theRadius = layer.getRadius();
            drawnItems.addLayer(layer);
            savelocation(latlong.lng,latlong.lat,theRadius)
        });
    </script>

    <script type="text/javascript">
        function savelocation(lat , long , radius)
        {
            var app_url = geturl();
            var map_id = '{{ $map_id }}';
            $.ajax({
                url:app_url+"/savemaplocations/"+lat+"/"+long+"/"+radius+"/"+map_id, 
                type:"get",
                success:function(res){
                   
                }
            })
        }
    </script>
@endsection
