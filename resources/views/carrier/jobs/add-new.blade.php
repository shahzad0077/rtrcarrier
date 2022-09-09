@extends('layouts.main-layout')
@section('title','Add Job')
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
                                                    <span class="nav-text">Basic Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="two-tab-2" data-toggle="tab" href="#two-2" aria-controls="two">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Hiring Req.</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="three-tab-2" data-toggle="tab" href="#three-2" aria-controls="three">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Routing & trans.</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="four-tab-2" data-toggle="tab" href="#four-2" aria-controls="four">
                                                    <span class="nav-icon">
                                                        <img src="{{asset('public/carrier/assets/media/custom/subscription.svg')}}">
                                                    </span>
                                                    <span class="nav-text">Subscriptions</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
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
                                <form method="POST" action="{{ url('job/submitone') }}">
                                    @csrf
                                    <div class="tab-pane fade active show" id="one-2" role="tabpanel" aria-labelledby="one-tab-2">
                                        <!-- job details card -->
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Job Details</h3>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">How often will the driver get home?</label>
                                                            <select name="how_often_will_driver_get_home" class="form-control @error('how_often_will_driver_get_home') is-invalid @enderror form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 123)->first()->options) as $r)
                                                                <option @if(old('how_often_will_driver_get_home') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('how_often_will_driver_get_home')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Add Custom Home Time</label>
                                                            <input value="{{ old('custom_home_time') }}" type="text" class="@error('custom_home_time') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Add Custome Time Here" name="custom_home_time">
                                                            @error('custom_home_time')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Title</label>
                                                            <input value="{{ old('job_tittle') }}" type="text" class="@error('job_tittle') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Looking for fulltime driver for our native company" name="job_tittle">
                                                            @error('job_tittle')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Driver Type</label>
                                                            <select name="driver_type" class="@error('driver_type') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 124)->first()->options) as $r)
                                                                <option @if(old('driver_type') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('driver_type')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Home Time</label>
                                                            <select name="home_time" class="@error('home_time') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 125)->first()->options) as $r)
                                                                <option @if(old('home_time') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('home_time')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Freight Type</label>
                                                            <select name="freight_type" class="@error('freight_type') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $r)
                                                                <option @if(old('freight_type') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('freight_type')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Dedicated Account</label>
                                                            <select name="dedicated_account" class="@error('dedicated_account') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 127)->first()->options) as $r)
                                                                <option @if(old('dedicated_account') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('dedicated_account')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="lable-control">Avg Weekly Mile</label>
                                                            <input value="{{ old('avg_weekly_mile') }}" name="avg_weekly_mile" type="text" class="@error('avg_weekly_mile') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200">
                                                            @error('avg_weekly_mile')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <span class="btn btn-primary mr-2" data-toggle="modal" data-target="#advanceDetail">
                                                            Advanced Details
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!-- job details end -->
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Maps</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 map-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Hiring Area</label>
                                                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Select Hiring Map</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <p>Create New Hiring Map</p>
                                                    </div>
                                                    <div class="col-md-6 map-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Operating Area</label>
                                                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option>Select Hiring Map</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <p>Create New Operating Area Map</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Hiring Requirements</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12 map-content">
                                                    <div class="form-group">
                                                        <label class="lable-control">Hiring Requirements Templates</label>
                                                        <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                            <option>Select Hiring Requirements Template</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <p>Create new hiring requirements template</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Pay</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Compensation</label>
                                                            <select name="compensation" class="@error('compensation') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 128)->first()->options) as $r)
                                                                <option @if(old('compensation') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('compensation')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Duty Time</label>
                                                            <select name="duty_time" class="@error('duty_time') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 129)->first()->options) as $r)
                                                                <option @if(old('duty_time') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('duty_time')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Compensation amount</label>
                                                            <input value="{{ old('compensation_ammount') }}" type="text" class="@error('compensation_ammount') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200" name="compensation_ammount">
                                                            @error('compensation_ammount')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Top 10% Of Earners are making</label>
                                                            <input value="{{ old('top_10_of_earners_are_makking') }}" type="text" class="@error('top_10_of_earners_are_makking') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200"name="top_10_of_earners_are_makking">
                                                            @error('top_10_of_earners_are_makking')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Average Weekly Pay</label>
                                                            <select class="@error('avgerage_weekly_pay') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="avgerage_weekly_pay">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 130)->first()->options) as $r)
                                                                <option @if(old('avgerage_weekly_pay') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('avgerage_weekly_pay')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 map-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Average Yearly Pay</label>
                                                            <select class="@error('avgerage_yearly_pay') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="avgerage_yearly_pay">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 131)->first()->options) as $r)
                                                                <option @if(old('avgerage_yearly_pay') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('avgerage_yearly_pay')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Sign on Bonus</label>
                                                            <select class="@error('sign_on_bonus') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="sign_on_bonus">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 132)->first()->options) as $r)
                                                                <option @if(old('sign_on_bonus') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('sign_on_bonus')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Sign on Bonus Amount</label>
                                                            <input value="{{ old('sign_on_bonus_amount') }}" class="@error('sign_on_bonus_amount') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" type="text" name="sign_on_bonus_amount">
                                                            @error('sign_on_bonus_amount')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-right">
                                                        <p class="text-primary" data-toggle="modal" data-target="#payOption">Edit Payout Schedule</p>
                                                    </div>
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <span class="btn btn-primary mr-2" data-toggle="modal" data-target="#advancepayOption">
                                                            Advanced Pay Options
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Benefits</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="row" id="appendbenifitindiv">
                                                            @foreach(explode(',' , $attribute->where('id' , 133)->first()->options) as $r)
                                                            <div class="col-md-6">
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="benifits[]" />
                                                                    <span class="mr-3"></span>
                                                                    {{ $r }}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Add Custom Benefit</label>
                                                                    <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Add Custom Benefit Here" id="bennifitnew">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-md-12">
                                                                <span onclick="appendbenifit()" class="btn btn-primary">
                                                                    <i class="fa fa-plus"></i> Add New
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Equipment & Freight</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Freight Type</label>
                                                            <select name="freight_type_equipment" class="@error('freight_type_equipment') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                <option value="">Select Option</option>
                                                                @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $r)
                                                                <option @if(old('freight_type_equipment') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('freight_type_equipment')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Drop and Hook</label>
                                                            <input value="{{ old('drop_and_hook') }}" name="drop_and_hook" type="text" class="@error('drop_and_hook') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
                                                            @error('drop_and_hook')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Live Load/Unload</label>
                                                            <input value="{{ old('live_load') }}" name="live_load" type="text" class="@error('live_load') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
                                                            @error('live_load')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="lable-control">Driver Load/Unload</label>
                                                            <input value="{{ old('driver_load') }}" name="driver_load" type="text" class="@error('driver_load') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
                                                            @error('driver_load')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                            </div>
                                        </div>
                                        <div class="card card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="d-flex p-0">
                                                    <div>
                                                        <h3 class="card-label font-weight-bolder text-dark">Equipment </h3>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <span onclick="addnewequipment()" class="btn btn-primary">+ Add Equipment</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Make</label>
                                                            <input value="{{ old('truck_make') }}" name="truck_make" type="text" class="@error('truck_make') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px">
                                                            @error('truck_make')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Model</label>
                                                            <input value="{{ old('truck_modal') }}" name="truck_modal" type="text" class="@error('truck_modal') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px">
                                                            @error('truck_modal')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="lable-control">Truck Year</label>
                                                            <input value="{{ old('truck_year') }}" name="truck_year" type="text" class="@error('truck_year') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px">
                                                            @error('truck_year')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <p>If you have different trucks, add multiple Make, Models, and years by clicking “Add Equipment”</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-primary" data-toggle="modal" data-target="#equipmentOption">Advanced Equipment Options</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Company Policies</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h3>Rider Policy</h3>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <span data-toggle="modal" data-target="#riderpolicy" class="btn btn-light-primary btn-icon">
                                                                    <i class="icon-xl la la-edit"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="policy-text" id="ridertextpolicy">{{ Cmf::getusercompany()->riderpolicy }}</p>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h3>Pet Policy</h3>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <span data-toggle="modal" data-target="#petpolicy" class="btn btn-light-primary btn-icon">
                                                                    <i class="icon-xl la la-edit"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p id="pettextpolicy" class="policy-text">{{ Cmf::getusercompany()->petpolicy }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                    </div>
                                </form>
                                    <div class="tab-pane fade" id="two-2" role="tabpanel" aria-labelledby="two-tab-2">
                                        <div class="card card-custom card-stretch">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Hiring Requirements</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Minimum Age</label>
                                                                    <small>This referral code will be sent to your CRM</small>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>21 Years Old</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- If they Select other then this field should popup -->
                                                            <div class="col-md-6">
                                                                <label class="lable-control">Enter the Minimum Age</label>
                                                                    <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Minimum Experience</label> <br>
                                                                    <small>Tractor/Trailer/OTR</small>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Student</option>
                                                                        <option>Recent Graduate</option>
                                                                        <option>1 Month</option>
                                                                        <option>2 Months</option>
                                                                        <option>3 months</option>
                                                                        <option>4 Months</option>
                                                                        <option>5 Months</option>
                                                                        <option>6 Months</option>
                                                                        <option>7 Months</option>
                                                                        <option>8 Months</option>
                                                                        <option>9 Months</option>
                                                                        <option>10 Months</option>
                                                                        <option>11 Months</option>
                                                                        <option>12 Months</option>
                                                                        <option>1+ Year</option>
                                                                        <option>2+ Years</option>
                                                                        <option>3+ Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Notes about Experience</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving Violations</label>
                                                                    <small>Maximum in 3 year period</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Notes</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Major Moving Violations</label>
                                                                    <small>Maximum in 3 year period</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">License Suspensions</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- if they Select yes -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Reason of Suspensions</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">DOT Recordable Accidents </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Preventable accidents within the last</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Reason of Suspensions</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Preventable accidents within the last</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Incidents</label>
                                                                    <small>Maximum in 3 year period</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Ticket/Accident/Incident Combo </label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- If they pressed Yes -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Specify in a free form fill</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Maximum # of Jobs </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">No more than</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Moving violations</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>6 Months</option>
                                                                        <option>1 Year</option>
                                                                        <option>2 Years</option>
                                                                        <option>3 Years</option>
                                                                        <option>4 Years</option>
                                                                        <option>5 Years</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Unemployment</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Information</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Felony Convictions </label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Misdemeanors</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Drugs/DUIs </label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <!-- Section -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Type of Drug Test </label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Urine</option>
                                                                        <option>Hair Follicle</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Type of Drug Test </label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Accepting SAP Drivers? </label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- If they pressed Yes then it should appear -->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Additional Information</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Physical</label>
                                                                    <textarea name="kt-ckeditor-4" class="summernote">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Automatic DQ’s </label>
                                                                    <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Automatic DQ’s </label>
                                                                    <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Automatic DQ’s </label>
                                                                    <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <button class="mt-8 btn btn-primary">
                                                                    Add DQ's
                                                                </button>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Accommodate an Automatic Restriction? </label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Cameras Installed in the Trucks?</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Yes</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- If they pressed Yes -->

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Select Type</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Inward</option>
                                                                        <option>Outward</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Cameras are</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Continuously recording</option>
                                                                        <option>Only during incidents</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Camera Facing</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Inward</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="lable-control">Camera Recording</label>
                                                                    <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                                                        <option>Only during incidents</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <h4>Required Endorsements</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Hazmat
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    TWIC Card
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Tanker
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Hazardous Tank Endorsement
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Double/Triple
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    Passenger endorsement
                                                                </label>
                                                                <label class="checkbox checkbox-lg mb-3">
                                                                    <input type="checkbox" name="Checkboxes3_1" />
                                                                    <span class="mr-3"></span>
                                                                    No endorsements required
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="d-flex">
                                                                    <div class="ml-auto">
                                                                        <button class="btn btn-lg btn-primary">Save as template</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                            </div>
                                        </div>
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
                                    </div>
                                    <div class="tab-pane fade" id="three-2" role="tabpanel" aria-labelledby="three-tab-2">
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Routing & trans.</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 routing-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Referral Code</label>
                                                            <p>This referral code will be sent to your CRM</p>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" style="margin-top:32px !important;" name="" placeholder="Looking for fulltime driver for our native company">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 routing-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Email</label>
                                                            <p>Select the email you would like to send applications from this job post to</p>
                                                            <select class="form-control select2 form-control-lg form-control-solid" style="width:100%; height: 55px !important; background: #f3f6f9 !important; border: 1px solid #E4E6EF !important;" id="kt_select2_11" multiple name="param">
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 text-right add-email">
                                                            <span>Add New Email</span>
                                                        </div>
                                                        <div class="modal-dialog add-email-model" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add Email</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Enter Email">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary font-weight-bold">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 routing-content">
                                                        <div class="form-group">
                                                            <label class="lable-control">Integrated CRM</label>
                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="" placeholder="Driver Reach">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                    </div>
                                    <div class="tab-pane fade" id="four-2" role="tabpanel" aria-labelledby="four-tab-2">
                                        <div class="card card-custom card-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h3 class="card-label font-weight-bolder text-dark">Routing & trans.</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 post-content">
                                                        <h2>How would you like to post your job?</h2>
                                                        <p>We're examining your job posting and will publish it soon one of our administrators approves it.</p>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="card my-left card">
                                                            <div class="card-body post-jobs-titles">
                                                                <h2>Free Job Post</h2>
                                                                <div class="correct-pin">
                                                                    <div class="my-icon">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-title">
                                                                        <p>Post your job for free and get normal visability.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right">
                                                                    <button type="reset" class="btn btn-primary mr-2">Publish</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="card my-right-card">
                                                            <div class="card-body Sponsored-title">
                                                                <h2>Sponsored Post</h2>
                                                                <div class="correct-pins">
                                                                    <div class="my-icons">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-titles">
                                                                        <p>Join our pay-per-hire program</p>
                                                                    </div>
                                                                </div>
                                                                <div class="correct-pins">
                                                                    <div class="my-icons">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-titles">
                                                                        <p>Advertise your posts on the RTR Homepage</p>
                                                                    </div>
                                                                </div>
                                                                <div class="correct-pins">
                                                                    <div class="my-icons">
                                                                        <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                                                    </div>
                                                                    <div class="post-icon-titles">
                                                                        <p>Advertise online to get even more exposure</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right see-options">
                                                                    <button type="reset" class="btn btn-primary mr-2 see-options">See All Options</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                    </div>
                                    <div class="tab-pane fade" id="five-2" role="tabpanel" aria-labelledby="five-tab-2">
                                        <div class="accordion accordion-solid accordion-toggle-plus mt-5" id="accordionExample6">
                                            <div class="card">
                                                <div class="card-header" id="headingOne6">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}"> Basic Details
                                                    </div>
                                                </div>
                                                <div id="collapseOne6" class="collapse show" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <b>How often will the driver get home?</b>
                                                                <p class="mt-2">Daily</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <b>Custom Home Time</b>
                                                                <p class="mt-2">Title goes here</p>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <b>Title</b>
                                                                <p class="mt-2">Title goes here</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <b>Driver Type</b>
                                                                <p class="mt-2">Company Solo</p>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <b>Home Time</b>
                                                                <p class="mt-2">Sunday</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Freight Type</b>
                                                                <p class="mt-2">Dry Van</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Dedicated Account</b>
                                                                <p class="mt-2">Yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Avg Weekly Mile</b>
                                                                <p class="mt-2">1000</p>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <h4 class="mt-3 mb-3 text-primary">
                                                                    Advance Details
                                                                </h4>
                                                            </div>

                                                            <div class="col-md-12 mb-3">
                                                                <b>What are the primary running lanes for this position?</b>
                                                                <p class="mt-2">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                </p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Avg Length of haul (Miles)</b>
                                                                <p class="mt-2">something</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Type of Fuel Card</b>
                                                                <p class="mt-2">Debit</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Tolls</b>
                                                                <p class="mt-2">Available</p>
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <b>24 hour Dispatch</b>
                                                                <p class="mt-2">Yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>EZ Pass</b>
                                                                <p class="mt-2">yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Pre-Pass</b>
                                                                <p class="mt-2">Yes</p>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <b>Non-Forced Dispatch</b>
                                                                <p class="mt-2">yes</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}"> Hiring Req.
                                                    </div>
                                                </div>
                                                <div id="collapseTwo6" class="collapse" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        ...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}"> Routing & trans.
                                                    </div>
                                                </div>
                                                <div id="collapseThree6" class="collapse" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        ...
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFour6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour6">
                                                        <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/preview.svg')}}"> Subscriptions
                                                    </div>
                                                </div>
                                                <div id="collapseFour6" class="collapse" data-parent="#accordionExample6">
                                                    <div class="card-body p-10">
                                                        ...
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-7 mt-7">
                                            <div class="col-md-12 ml-auto">
                                                <div class="d-flex">
                                                    <div class="ml-auto">
                                                        <button class="btn btn-white mr-3 btn-lg">
                                                            <i class="fa fa-arrow-left"></i>Previous
                                                        </button>
                                                        <button class="btn btn-primary btn-lg">
                                                            Submit Job <i class="fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
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
<div class="modal fade" id="riderpolicy" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Rider Policy</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form id="updateriderpolicy" method="POST" action="{{ url('updateriderpolicy') }}">
                @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Rider Policy</label>
                            <textarea name="rider_policy" id="rider_policy" rows="10" class="form-control form-control-solid" style="height:200px;">{{ Cmf::getusercompany()->riderpolicy }}</textarea>
                            <span class="invalid-feedback riderpolicy-feedback" id="rider_policy_err" role="alert"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" id="riderpolicy_submit_button" class="btn btn-primary font-weight-bold">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="petpolicy" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Pet Policy</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form id="updatepetpolicy" method="POST" action="{{ url('updatepetpolicy') }}">
                @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Pet Policy</label>
                            <textarea name="petpolicy" id="petpolicy" rows="5" class="form-control form-control-solid" style="height:200px;">{{ Cmf::getusercompany()->petpolicy }}</textarea>
                            <span class="invalid-feedback petpolicy-feedback" id="petpolicy_err" role="alert"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" id="update-pet-policy-submit-button" class="btn btn-primary font-weight-bold">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
    <div class="modal fade" id="advanceDetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advance Detail</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form id="advance_detail_submit_form" method="POST" action="{{ url('job/adddadvancedetails') }}">
                @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">What are the primary running lanes for this position?</label>
                            <textarea name="primary_running_lanes" id="primary_running_lanes" rows="5" class="form-control form-control-solid" style="height:100px;"></textarea>
                            <span class="invalid-feedback advance-feedback" id="primary_running_lanes_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Avg Length of haul (Miles)</label>
                            <input type="number" id="avg_length_of_haul" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="avg_length_of_haul">
                            <span class="invalid-feedback advance-feedback" id="avg_length_of_haul_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Type of Fuel Card</label>
                            <input type="text" id="type_of_fuel_card" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="eg. 25,000 miles" name="type_of_fuel_card">
                            <span class="invalid-feedback advance-feedback" id="type_of_fuel_card_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Tolls</label>
                            <textarea id="tolls" name="tolls" rows="4" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px"></textarea>
                            <span class="invalid-feedback advance-feedback" id="tolls_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">24 hour Dispatch</label>
                            <select name="hour_dispatch" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="hour_dispatch">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="hour_dispatch_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">EZ Pass</label>
                            <select name="ez_Pass" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="ez_Pass">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="ez_Pass_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Pre-Pass</label>
                            <select name="pre_pass" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="pre_pass">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="pre_pass_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Non-Forced Dispatch</label>
                            <select name="non_forced_dispatch" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="non_forced_dispatch">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="non_forced_dispatch_err" role="alert"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" id="advance_detail_submit_button" class="btn btn-primary font-weight-bold">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Payout Option -->
<div class="modal fade" id="payOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Payout Schedule</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <h5>Payout #1</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">When?</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Orientation</option>
                                <option>1st Dispatch</option>
                                <option>Delivery of 1st Load</option>
                                <option>Month 1</option>
                                <option>Month 2</option>
                                <option>Month 3</option>
                                <option>Month 4</option>
                                <option>Month 5</option>
                                <option>Month 6</option>
                                <option>Month 7</option>
                                <option>Month 8</option>
                                <option>Month 9</option>
                                <option>Month 10</option>
                                <option>Month 11</option>
                                <option>Month 12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mb-3">
                        <h5>Payout #2</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">When?</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Orientation</option>
                                <option>1st Dispatch</option>
                                <option>Delivery of 1st Load</option>
                                <option>Month 1</option>
                                <option>Month 2</option>
                                <option>Month 3</option>
                                <option>Month 4</option>
                                <option>Month 5</option>
                                <option>Month 6</option>
                                <option>Month 7</option>
                                <option>Month 8</option>
                                <option>Month 9</option>
                                <option>Month 10</option>
                                <option>Month 11</option>
                                <option>Month 12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mr-0">
                        <a href="javascript:void(0)" id="addmore" class="add_input">Add New Payout</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Set Schedule</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="advancepayOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advance Detail</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Breakdown Pay ($)</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Cash Advance</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Detention pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>1 hour</option>
                                <option>2 hours</option>
                                <option>3 hours</option>
                                <option>4 hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Pays Amount ($)</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Are drivers paid the same for loaded and empty miles?</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <!-- If selected No in the above field then show this field. -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Miles CPM chat</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">End of Pay Week</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Hazmat Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <!-- If selected Yes then show this input-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Select Option</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>$0.01</option>
                                <option>$0.02</option>
                                <option>$0.03</option>
                                <option>$0.04</option>
                                <option>$0.05</option>
                                <option>$0.06</option>
                                <option>$0.07</option>
                                <option>$0.08</option>
                                <option>$0.09</option>
                                <option>$0.10</option>
                                <option>$0.11</option>
                                <option>$0.12</option>
                                <option>$0.13</option>
                                <option>$0.14</option>
                                <option>$0.15</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Holiday Pay</label>
                            <textarea class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="8"></textarea>
                            <small>Max 400 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">How Are Drivers Paid?</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Direct Deposit</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they select Other -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Add option</label>
                            <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Layover Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>1 hour</option>
                                <option>2 hours</option>
                                <option>3 hours</option>
                                <option>4 hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Minimum Pay Guarantee</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Weekly</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Multi-stop Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Paid On</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>All stops</option>
                                <option>All stop except first and last stop</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they select Other -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Specify other</label>
                            <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">New York City Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Northeast Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount(CPM)</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Orientation Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount</label>
                            <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Pay Increase</label>
                            <textarea class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="6"></textarea>
                            <small>Max 200 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Per Diem</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Amount(CPM)</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Referral Bonus ($)</label>
                            <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Safety Bonus</label>
                            <textarea class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="6"></textarea>
                            <small>Max 400 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Start of Pay Week</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Type of Driver Pay</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option> Practical Millage Pay</option>
                                <option>HHG</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Unloading Pay ($)</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Vacation Pay</label>
                            <textarea class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="6" style="height:100px;"></textarea>
                            <small>Max 200 characters</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">When Are Drivers Paid?</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary font-weight-bold">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Equipment Options -->
<div class="modal fade" id="equipmentOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advanced Equipment Options</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Engine</label>
                            <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Transmission Type</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Automatic</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Truck Speed (Cruise / Pedal)</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Cruise</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Inverter</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">APU/EPU</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Bunks</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>SIngle Bunk</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Orientation</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Inward Facing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Recording</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Camera Recording</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Can Truck Be Taken Home?</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Truck Permanently Assigned</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Navigation</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Camera Recording</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Communication</label>
                            <textarea class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Enter your text here..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Navigation</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">DirecTV</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">SiriusXM</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Refrigerator</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Microwave</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Collision Mitigation</label>
                            <select class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Save Changes</button>
            </div>
        </div>
    </div>
</div>
@endsection