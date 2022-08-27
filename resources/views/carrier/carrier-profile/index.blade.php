@extends('layouts.main-layout')
@section('title','My Carrier Profile')
@section('content')
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
                                                <button type="reset" class="btn btn-primary mr-2">Save changes</button>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Form-->
                                        <form class="form">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 truck-bg" style="background:url('https://www.hireright.com/blog/wp-content/uploads/2018/07/outsource-driver-verification-blog.jpg')">
                                                        <div class="row">
                                                            <div class="col-md-12 edit-btn ">
                                                                <label class="inner-label edit-covers">
                                                                    <p>Edit Cover</p> <br /> <input type="file" class="form-input documents" size="60" name="Dokumente">
                                                                </label>
                                                                <!-- <a type="file" href="#" class="dropzone-select btn btn-light-primary font-weight-bold btn-sm dz-clickable">Edit Cover</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ocean-row">
                                                    <div class="col-md-4 ocean-way">
                                                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3" style="    margin-top: -60px;">
                                                            <div class="image-input-wrapper" style="background-image: url('{{asset('carrier/assets/media/users/100_3.jpg')}}')"></div>
                                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                                <input type="hidden" name="profile_avatar_remove">
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
                                                        <form>
                                                            <label class=" text-right col-lg-3 col-sm-12 link-title">Direct Link :</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control copy-filed" id="kt_clipboard_1" placeholder="https://www.classaclub.com/oceanway">
                                                                    <div class="input-group-append">
                                                                        <a href="#" class="btn btn-secondary copy-btn" data-clipboard="true" data-clipboard-target="#kt_clipboard_1"><i class="la la-copy"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Company Email</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Contact number</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Company address</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Website link</label>
                                                            <input type="link" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Custom Link Title</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Link address</label>
                                                            <input type="link" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Custom Link Title</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Link address</label>
                                                            <input type="link" class="form-control form-control-lg form-control-solid" name="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">About us</label>
                                                            <textarea class="form-control form-control-lg form-control-solid" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="d-flex">
                                                            <div class="ml-auto">
                                                                <button type="reset" class="btn btn-primary mr-2">Save changes</button>
                                                            </div>
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
@endsection