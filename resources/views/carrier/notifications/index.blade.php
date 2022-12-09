@extends('layouts.main-layout')
@section('title','Notification & Alerts')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Notification & Alerts</a>
</li>
@endsection

@section('content')
        <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <!-- Progress bar -->
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header pt-2 pl-0 pr-0 pb-0">
                                        <ul class="nav nav-success nav-pills" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="one-tab-2" data-toggle="tab" href="#one-2">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Notifications</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="two-tab-2" data-toggle="tab" href="#two-2" aria-controls="two">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Alerts</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content" id="myTabContent2">
                                    
                                    <div class="tab-pane fade active show" id="one-2" role="tabpanel" aria-labelledby="one-tab-2">
                                        <div class="card">
                                            <div class="card-body">
                                                @if($notification->count() > 0)
                                                @foreach($notification as $r)
                                                <div class="alert alert-custom alert-outline-primary fade show mb-5" role="alert">
                                                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                    <div class="alert-text">{{ $r->notification }}</div>
                                                    <div class="alert-close">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else

                                                <div class="text-center">
                                                    <p>No Notification</p>
                                                </div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="two-2" role="tabpanel" aria-labelledby="two-tab-2">
                                        <div class="card">
                                            <div class="card-body">
                                                @if($alerts->count() > 0)
                                                @foreach($alerts as $r)
                                                <div class="alert alert-custom alert-outline-primary fade show mb-5" role="alert">
                                                    <div class="alert-icon"><i class="{{ $r->icon }}"></i></div>
                                                    <div class="alert-text">{!! $r->alert !!}</div>
                                                    <div class="alert-close">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @else

                                                <div class="text-center">
                                                    <p>No Notification</p>
                                                </div>

                                                @endif
                                            </div>
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