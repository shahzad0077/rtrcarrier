@extends('layouts.main-layout')
@section('title','Add Hiring Map')
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
                            <form class="form">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                <div class="alert-text">
                                                    <b>Map Added Successfully</b>
                                                    <p>We’ve succefully added the map to list</p>
                                                </div>
                                                <div class="alert-close">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map title</label>
                                                <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="RTR-WFX-hiringmap-5.16.22">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="lable-control">Map Type</label>
                                                <select class="form-control border-0 form-control-solid text-muted font-size-lg font-weight-bolder pl-5 min-h-50px" id="exampleSelects">
                                                    <option>Hiring Map</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            <button type="button" class="btn btn-secondary map-model-btn state-btns" data-toggle="modal" data-target="#addState">+ Add State</button>

                                            <button type="button" class="btn btn-secondary map-model-btn city-btns" data-toggle="modal" data-target="#addCity">+ Add City</button>

                                            <button type="button" class="btn btn-secondary map-model-btn zip-btns" data-toggle="modal" data-target="#addZip">+ Add Zip</button>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <div id="map" style="width: 100%; border-radius: 12px; height: 400px; border: 1px solid #ccc"></div>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <button type="button" class="btn btn-secondary map-delete-btn">New York <i class="icon-2x text-dark-50 flaticon-delete-1"></i></button>
                                            <button type="button" class="btn btn-secondary map-delete-btn">80014 <i class="icon-2x text-dark-50 flaticon-delete-1"></i></button>
                                            <button type="button" class="btn btn-secondary map-delete-btn">California <i class="icon-2x text-dark-50 flaticon-delete-1"></i></button>
                                            <button type="button" class="btn btn-secondary map-delete-btn">55126 - 200 miles <i class="icon-2x text-dark-50 flaticon-delete-1"></i></button>
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
                                                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
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
                                                <button type="button" class="btn btn-primary">Save</button>
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
                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter Zip Code">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Add Zip Code</button>
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
                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter City">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Add Zip Code</button>
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
                        <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter State">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Add Zip Code</button>
            </div>
        </div>
    </div>
</div>



@endsection


@section('scripts')

    <script src="{{asset('carrier/assets/map/libs/leaflet-src.js')}}"></script>
    <link rel="stylesheet" href="{{asset('carrier/assets/map/libs/leaflet.css')}}"/>
    <script src="{{asset('carrier/assets/map/src/Leaflet.draw.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/Leaflet.Draw.Event.js')}}"></script>
    <link rel="stylesheet" href="{{asset('carrier/assets/map/src/leaflet.draw.css')}}"/>

    <script src="{{asset('carrier/assets/map/src/Toolbar.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/Tooltip.js')}}"></script>

    <script src="{{asset('carrier/assets/map/src/ext/GeometryUtil.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/ext/LatLngUtil.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/ext/LineUtil.Intersect.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/ext/Polygon.Intersect.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/ext/Polyline.Intersect.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/ext/TouchEvents.js')}}"></script>

    <script src="{{asset('carrier/assets/map/src/draw/DrawToolbar.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.Feature.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.SimpleShape.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.Polyline.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.Marker.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.Circle.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.CircleMarker.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.Polygon.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/draw/handler/Draw.Rectangle.js')}}"></script>


    <script src="{{asset('carrier/assets/map/src/edit/EditToolbar.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/EditToolbar.Edit.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/EditToolbar.Delete.js')}}"></script>

    <script src="{{asset('carrier/assets/map/src/Control.Draw.js')}}"></script>

    <script src="{{asset('carrier/assets/map/src/edit/handler/Edit.Poly.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/Edit.SimpleShape.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/Edit.Rectangle.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/Edit.Marker.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/Edit.CircleMarker.js')}}"></script>
    <script src="{{asset('carrier/assets/map/src/edit/handler/Edit.Circle.js')}}"></script>
@endsection
