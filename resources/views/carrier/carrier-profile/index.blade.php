@extends('layouts.main-layout')
@section('title','My Carrier Profile')
@section('content')
@include('alerts.index')
    <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card card-custom card-stretch mb-10">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Carrier Profile</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Add your company information</span>
                            </div>
                            <div class="card-toolbar">
                                <button onclick="submitformupdateprofile()" type="reset" class="btn btn-primary mr-2">Save changes</button>
                            </div>
                        </div>
                        <script type="text/javascript">
                            function submitformupdateprofile()
                            {
                                $('#updateprofile').submit();
                            }
                        </script>
                        <!--end::Header-->
                        <!--begin::Form-->
                            <!--begin::Body-->
                            <div class="card-body">
                                @include('alerts.index')
                                <div class="row">
                                    <div class="col-md-12 truck-bg" @if($data->banner) style="background:url('{{ url('public') }}/images/{{ $data->banner  }}')" @else style="background:url('public/carrier/assets/placeholder.jpg');" @endif>
                                        <div class="row">
                                            <div class="col-md-12 edit-btn ">
                                                <label class="inner-label edit-covers">
                                                    <p>Edit Cover</p> <br /> 
                                                    <form id="updatecoverform" style="display: none;" enctype="multipart/form-data" method="POST" action="{{ url('changecoverphoto') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{ $data->id }}" name="id">
                                                        <input type="file" id="updatecoverinput" class="form-input documents" size="60" name="coverphoto">
                                                    </form>
                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ocean-row">
                                    <div class="col-md-4 ocean-way">
                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3" style="margin-top: -60px;">
                                            <div class="image-input-wrapper" @if($data->logo) style="background-image: url('{{ url('public') }}/images/{{ $data->logo  }}')" @else style="background-image: url('public/carrier/assets/profile.jpg')"  @endif></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <form id="updateprofileform" style="display: none;" enctype="multipart/form-data" method="POST" action="{{ url('updatecarrierlogo') }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                                    <input type="file" id="updateprofileinput" name="company_logo" accept=".png, .jpg, .jpeg">
                                                </form>
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <!--   <img src="assets-dashboard/media/dashborad-img/Ellipse.png">
                                            <div class="capture-img">
                                               <a href=""><img src="assets-dashboard/media/dashborad-img/capture.png"> </a>
                                            </div> -->
                                    </div>
                                    <div class="col-md-8 copy-field">
                                            <label class=" text-right col-lg-3 col-sm-12 link-title">Direct Link :</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input readonly type="text" value="{{ url('carrier') }}/{{ $data->company_link }}" class="form-control copy-filed" id="kt_clipboard_1" placeholder="">
                                                    <div class="input-group-append">
                                                        <a href="javascript:void(0)" onclick="coppytoclipboard()" class="btn btn-secondary copy-btn" data-clipboard="true" data-clipboard-target="#kt_clipboard_1"><i class="la la-copy"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <form id="updateprofile" method="POST" action="{{ url('updatecarrierprofile') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Company Email</label>
                                            <input value="{{ $data->email }}" type="text" class="form-control form-control-lg form-control-solid" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Contact number</label>
                                            <input value="{{ $data->contact_number }}" type="text" class="form-control form-control-lg form-control-solid" name="contact_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Company address</label>
                                            <input value="{{ $data->address }}" type="text" class="form-control form-control-lg form-control-solid" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Website link</label>
                                            <input value="{{ $data->website_link }}" type="link" class="form-control form-control-lg form-control-solid" name="website_link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Twitter Profile</label>
                                            <input value="{{ $data->google_link }}" type="text" class="form-control form-control-lg form-control-solid" name="google_link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="lable-control">Facebook Profile</label>
                                            <input value="{{ $data->facebook_link }}" type="link" class="form-control form-control-lg form-control-solid" name="facebook_link">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="lable-control">About us</label>
                                            <textarea name="aboutus" class="form-control form-control-lg form-control-solid" rows="10">{{ $data->aboutus }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex">
                                            <div class="ml-auto">
                                                <button type="submit" class="btn btn-primary mr-2">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <!--end::Body-->
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
@endsection