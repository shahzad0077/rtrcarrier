@extends('layouts.main-layout')
@section('title','Add Job')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add New Job</a>
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
                        <!-- End Progress bar -->
                        @if(DB::table('hiring_maps')->where('type' , 'Hiring Map')->where('company_id' , Cmf::getusercompany()->id)->count() != 0 && DB::table('hiring_maps')->where('type' , 'Operating Map')->where('company_id' , Cmf::getusercompany()->id)->count() != 0)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header pt-2 pl-0 pr-0 pb-0">
                                        <ul class="nav nav-success nav-pills" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 0) active @endif" id="one-tab-2" data-toggle="tab" href="#one-2">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Basic Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 1) active @endif" id="two-tab-2" data-toggle="tab" href="#two-2" aria-controls="two">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Hiring Requirements</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link @if($job->step == 2) active @endif" id="three-tab-2" data-toggle="tab" href="#three-2" aria-controls="three">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Routing & Transfer</span>
                                                </a>
                                            </li>
                                            @if($job->plan_id)
                                                @if($job->payement_status == 'done')
                                                <li class="nav-item @if($job->step == 3) active @endif">
                                                    <a class="nav-link @if($job->step == 3) active @endif" id="four-tab-2" data-toggle="tab" href="#four-2" aria-controls="four">
                                                        <span class="nav-icon">
                                                            <img src="{{asset('public/carrier/assets/media/custom/subscription.svg')}}">
                                                        </span>
                                                        <span class="nav-text">Subscription</span>
                                                    </a>
                                                </li>
                                                @else
                                                <li class="nav-item @if($job->step == 3) active @endif">
                                                    <a class="nav-link @if($job->step == 3) active @endif" id="four-tab-2" data-toggle="tab" href="#four-2" aria-controls="four">
                                                        <span class="nav-icon">
                                                            <img src="{{asset('public/carrier/assets/media/custom/subscription.svg')}}">
                                                        </span>
                                                        <span class="nav-text">Payement</span>
                                                    </a>
                                                </li>
                                                @endif
                                            @else
                                            <li class="nav-item @if($job->step == 3) active @endif">
                                                <a class="nav-link @if($job->step == 3) active @endif" id="four-tab-2" data-toggle="tab" href="#four-2" aria-controls="four">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/subscription.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Subscriptions</span>
                                                </a>
                                            </li>
                                            @endif
                                            <li class="nav-item @if($job->step == 4) active @endif">
                                                <a class="nav-link" id="five-tab-2" data-toggle="tab" href="#five-2" aria-controls="five">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/preview.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Preview</span>
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
                                    
                                    <div class="tab-pane fade @if($job->step == 0) active show @endif" id="one-2" role="tabpanel" aria-labelledby="one-tab-2">
                                        <form method="POST" action="{{ url('job/submitone') }}">
                                        @csrf
                                        <input type="hidden" value="{{ $job->id }}" name="job_id">
                                        @include('carrier.jobs.basic')                                     
                                        <div class="row mb-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-primary btn-lg">
                                                            Next <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                    <div class="tab-pane fade @if($job->step == 1) active show @endif" id="two-2" role="tabpanel" aria-labelledby="two-tab-2">
                                        
                                        <form id="hiringreqform" method="POST" action="{{ url('job/hiringreq') }}">
                                        @csrf

                                        @include('carrier.jobs.hiringreq')
                                        <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            <div id="submitbuttonforhiringreq" class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @include('carrier.jobs.hiringtemplatepreview')
                                        @include('carrier.jobs.hiringtemplateshow')
                                    </div>
                                    <div class="tab-pane fade @if($job->step == 2) active show @endif" id="three-2" role="tabpanel" aria-labelledby="three-tab-2">
                                        <form method="POST" action="{{ url('job/routingandtrans') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.routingandtrans')
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @if($job->plan_id)

                                        @if($job->payement_status == 'done')

                                        <div class="tab-pane fade @if($job->step == 3) active show @endif" id="four-2" role="tabpanel" aria-labelledby="four-tab-2">
                                        <form method="POST" action="{{ url('job/subscription') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.subscriptions')
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                        @else
                                    @php
                                        $plan = DB::table('subscription_plans')->where('id' , $job->plan_id)->get()->first();
                                    @endphp
                                    <div class="tab-pane fade @if($job->step == 3) active show @endif" id="four-2" role="tabpanel" aria-labelledby="four-tab-2">
                                            
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h3 class="card-label font-weight-bolder text-dark">Payement Of {{ $plan->name }} Plan price is (${{$plan->price}})</h3>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                         <div class="col-md-12">
                                                            <a onclick="submitpaypalform()" href="javascript:void(0)" class="paypal-buy-now-button">
                                                           <span>Pay with</span> 
                                                           <svg aria-label="PayPal" xmlns="http://www.w3.org/2000/svg" width="90" height="33" viewBox="34.417 0 90 33">
                                                              <path fill="#253B80" d="M46.211 6.749h-6.839a.95.95 0 0 0-.939.802l-2.766 17.537a.57.57 0 0 0 .564.658h3.265a.95.95 0 0 0 .939-.803l.746-4.73a.95.95 0 0 1 .938-.803h2.165c4.505 0 7.105-2.18 7.784-6.5.306-1.89.013-3.375-.872-4.415-.972-1.142-2.696-1.746-4.985-1.746zM47 13.154c-.374 2.454-2.249 2.454-4.062 2.454h-1.032l.724-4.583a.57.57 0 0 1 .563-.481h.473c1.235 0 2.4 0 3.002.704.359.42.469 1.044.332 1.906zM66.654 13.075h-3.275a.57.57 0 0 0-.563.481l-.146.916-.229-.332c-.709-1.029-2.29-1.373-3.868-1.373-3.619 0-6.71 2.741-7.312 6.586-.313 1.918.132 3.752 1.22 5.03.998 1.177 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91a.57.57 0 0 0 .562.66h2.95a.95.95 0 0 0 .939-.804l1.77-11.208a.566.566 0 0 0-.56-.657zm-4.565 6.374c-.316 1.871-1.801 3.127-3.695 3.127-.951 0-1.711-.305-2.199-.883-.484-.574-.668-1.392-.514-2.301.295-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.499.589.697 1.411.554 2.317zM84.096 13.075h-3.291a.955.955 0 0 0-.787.417l-4.539 6.686-1.924-6.425a.953.953 0 0 0-.912-.678H69.41a.57.57 0 0 0-.541.754l3.625 10.638-3.408 4.811a.57.57 0 0 0 .465.9h3.287a.949.949 0 0 0 .781-.408l10.946-15.8a.57.57 0 0 0-.469-.895z"></path>
                                                              <path fill="#179BD7" d="M94.992 6.749h-6.84a.95.95 0 0 0-.938.802l-2.767 17.537a.57.57 0 0 0 .563.658h3.51a.665.665 0 0 0 .656-.563l.785-4.971a.95.95 0 0 1 .938-.803h2.164c4.506 0 7.105-2.18 7.785-6.5.307-1.89.012-3.375-.873-4.415-.971-1.141-2.694-1.745-4.983-1.745zm.789 6.405c-.373 2.454-2.248 2.454-4.063 2.454h-1.031l.726-4.583a.567.567 0 0 1 .562-.481h.474c1.233 0 2.399 0 3.002.704.358.42.467 1.044.33 1.906zM115.434 13.075h-3.272a.566.566 0 0 0-.562.481l-.146.916-.229-.332c-.709-1.029-2.289-1.373-3.867-1.373-3.619 0-6.709 2.741-7.312 6.586-.312 1.918.131 3.752 1.22 5.03 1 1.177 2.426 1.666 4.125 1.666 2.916 0 4.532-1.875 4.532-1.875l-.146.91a.57.57 0 0 0 .563.66h2.949a.95.95 0 0 0 .938-.804l1.771-11.208a.57.57 0 0 0-.564-.657zm-4.565 6.374c-.314 1.871-1.801 3.127-3.695 3.127-.949 0-1.711-.305-2.199-.883-.483-.574-.666-1.392-.514-2.301.297-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.501.589.699 1.411.554 2.317zM119.295 7.23l-2.807 17.858a.569.569 0 0 0 .562.658h2.822c.469 0 .866-.34.938-.803l2.769-17.536a.57.57 0 0 0-.562-.659h-3.16a.571.571 0 0 0-.562.482z"></path>
                                                           </svg>
                                                        </a>
                                                         </div>

                                                    </div>

                                                    <div style="margin-top: 50px;" class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h3>OR</h3>
                                                        </div>
                                                    </div>
                                                    
                                                    <form method="POST" id="paypalform" action="{{ url('paypal') }}">
                                                        @csrf
                                                        <input type="hidden" value="{{ $job->id }}" name="job_id">
                                                    </form>

                                                    <form role="form"
                                                    action="{{ route('stripe.post') }}"
                                                    method="post"
                                                    class="require-validation"
                                                    data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{Cmf::getsettings('stripe_published')}}"
                                                    id="payment-form">
                                                    
                                                     @csrf
                                                     <input type="hidden" value="{{ $job->id }}" name="job_id">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class='form-row row'>
                                                               <div class='col-md-12 form-group required'>
                                                                  <label class='control-label'>Name on Card</label> <input
                                                                     class='form-control' size='4' type='text'>
                                                               </div>
                                                            </div>
                                                            <input type="hidden" value="" name="planid">
                                                            <div class='form-row row'>
                                                               <div class='col-md-12 form-group  required'>
                                                                  <label class='control-label'>Card Number</label> <input
                                                                     autocomplete='off' id="cc" class='form-control card-number' size='20'
                                                                     type='text'>
                                                               </div>
                                                            </div>
                                                            <div class='form-row row'>
                                                               <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                                  <label class='control-label'>CVC</label> <input id="cvv" autocomplete='off'
                                                                     class='form-control card-cvc' placeholder='ex. 311' maxlength="4"
                                                                     type='text'>
                                                               </div>
                                                               <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                  <label class='control-label'>Expiration Month</label> <input
                                                                     class='form-control card-expiry-month' maxlength="2" id="month" placeholder='MM' size='2'
                                                                     type='text'>
                                                               </div>
                                                               <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                                  <label class='control-label'>Expiration Year</label> <input
                                                                     class='form-control card-expiry-year' maxlength="4" id="year" placeholder='YYYY' size='4'
                                                                     type='text'>
                                                               </div>
                                                            </div>
                                                            <div class='form-row row'>
                                                               <div class='col-md-12 error form-group hide'>
                                                                  <div class='alert-danger alert'>Please correct the errors and try
                                                                     again.
                                                                  </div>
                                                               </div>
                                                            </div>
                                                      
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button disabled class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button type="button" onclick="stripeformsubmit()" class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    @endif
                                    @else
                                    <div class="tab-pane fade @if($job->step == 3) active show @endif" id="four-2" role="tabpanel" aria-labelledby="four-tab-2">
                                        <form method="POST" action="{{ url('job/subscription') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.subscriptions')
                                            <div class="row mb-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-lg">
                                                                Next <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                    <div class="tab-pane fade @if($job->step == 4) active show @endif" id="five-2" role="tabpanel" aria-labelledby="five-tab-2">
                                        <form method="POST" action="{{ url('job/jobsubmitlast') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $job->id }}" name="job_id">
                                            @include('carrier.jobs.preview')
                                            <div class="row mb-7 mt-7">
                                                <div class="col-md-12 ml-auto">
                                                    <div class="d-flex">
                                                        <div class="ml-auto">
                                                            <button class="btn btn-white mr-3 btn-lg">
                                                                <i class="fa fa-arrow-left"></i>Previous
                                                            </button>
                                                            <button type="submit" class="btn btn-primary btn-lg">
                                                                Submit Job <i class="fa fa-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else

                        <div class="card card-custom card-stretch">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 successfully-content">
                                        <img width="120" src="{{asset('public/carrier/assets/media/custom/warning.png')}}">
                                        <h2>Warning !!</h2>
                                        <p>You have not Added any Hiring Area or Operating Area Map Please Add Mapp Before Starting Job</p>
                                        <div class="dashboad-btn-main">
                                            <div class="dashboad-btn">
                                                <a href="{{ url('map/add-new') }}" type="reset" class="btn btn-primary mr-2 post-inner-btn">Add New Map</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    @include('carrier.jobs.modal')
@endsection
@section('scripts')
<style type="text/css">
    .hide{
        display: none;
    }
</style>
<script type="text/javascript">
    function submitpaypalform()
    {
        $('#paypalform').submit();
    }
    function stripeformsubmit()
    {
        $('#payment-form').submit();
    }

</script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ asset('public/carrier/assets/js/payement.js') }}"></script>
@endsection