@extends('layouts.main-layout')
@section('title','Job Published')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card card-custom card-stretch">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 successfully-content">
                                    <img src="{{asset('public/carrier/assets/media/custom/ticked.png')}}">
                                    <h2>Your Job has been successfully received</h2>
                                    <p>We're examining your job posting and will publish it soon one of our administrators approves it.</p>
                                    <div class="dashboad-btn-main">
                                        <div class="dashboad-btn">
                                            <a href="new-dashboard.html" type="reset" class="btn btn-primary mr-2 dashboard-inner-btn">Dashboard</a>
                                        </div>
                                        <div class="dashboad-btn">
                                            <a href="post-job.html" type="reset" class="btn btn-primary mr-2 post-inner-btn">Post another Job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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