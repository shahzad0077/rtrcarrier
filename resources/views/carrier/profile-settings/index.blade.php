@extends('layouts.main-layout')
@section('title','Profile Settings')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                @include('alerts.index')
                <!--begin::Profile Personal Information-->
                <div class="d-flex flex-row">
                    <!--begin::Aside-->
                   @include('carrier.profile-settings.sidebar')
                    <!--end::Aside-->
                    <!--begin::Content-->
                                <div class="flex-row-fluid ml-lg-8">
                                    <!--begin::Card-->
                                    <div class="card card-custom card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
                                            </div>
                                            <div class="card-toolbar">
                                                
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Form-->
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-xl-2 col-lg-2">Avatar</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">

                                                            @if(Auth::user()->profile_picture)
                                                            <div class="image-input-wrapper" style="background-image: url('{{ asset('public/') }}/images/{{ Auth::user()->profile_picture }}')"></div>
                                                            @else
                                                            <div class="image-input-wrapper" style="background-image: url('https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg')"></div>
                                                            @endif


                                                            
                                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen icon-sm text-muted"></i>

                                                                <form id="profileavatarform" style="display: none;" enctype="multipart/form-data" method="POST" action="{{ url('updateprofilepicture') }}">
                                                                    {{ csrf_field() }}
                                                                    <input type="file" id="profile_avatar" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                                </form>
                                                            </label>
                                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                            </span>
                                                            
                                                        </div>
                                                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                    </div>
                                                </div>
                                                <form method="POST" action="{{ url('updateuserprofile') }}">
                                                    {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Name</label>
                                                            <input type="text" value="{{Auth::user()->name}}" class="form-control form-control-lg form-control-solid" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Email</label>
                                                            <input type="text" readonly value="{{Auth::user()->email}}" class="form-control form-control-lg form-control-solid" name="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Phonenumber</label>
                                                            <input type="text" value="{{Auth::user()->phonenumber}}" class="form-control form-control-lg form-control-solid" name="phonenumber">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                                                    </div>
                                                </div> 
                                                </form> 
                                            </div>
                                            <!--end::Body-->
                                        <!--end::Form-->
                                    </div>
                                </div>
                                <!--end::Content-->
                </div>
                <!--end::Profile Personal Information-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection