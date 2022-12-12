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
            <div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">Title</label>
                    <input required value="@if($job->job_tittle){{ $job->job_tittle }}@elseif(old('job_tittle')){{ old('job_tittle') }}@endif" type="text" class="@error('job_tittle') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Looking for fulltime driver for our native company" name="job_tittle">
                    @error('job_tittle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">How often will the driver get home?</label>
                    <select required name="how_often_will_driver_get_home" class="form-control @error('how_often_will_driver_get_home') is-invalid @enderror form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 123)->first()->options) as $r)
                        <option @if($job->how_often_will_driver_get_home == $r) selected @elseif(old('how_often_will_driver_get_home') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <input required value="@if($job->custom_home_time){{ $job->custom_home_time }}@elseif(old('custom_home_time')){{ old('custom_home_time') }}@endif" type="text" class="@error('custom_home_time') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Add Custome Time Here" name="custom_home_time">
                    @error('custom_home_time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Driver Type</label>
                    <select required name="driver_type" class="@error('driver_type') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 124)->first()->options) as $r)
                        <option @if($job->driver_type == $r) selected @elseif(old('driver_type') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <select required name="home_time" class="@error('home_time') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 125)->first()->options) as $r)
                        <option @if($job->home_time == $r) selected @elseif(old('home_time') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <select required name="freight_type" class="@error('freight_type') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $r)
                        <option @if($job->freight_type == $r) selected @elseif(old('freight_type') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <select required name="dedicated_account" class="@error('dedicated_account') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 127)->first()->options) as $r)
                        <option @if($job->dedicated_account == $r) selected @elseif(old('dedicated_account') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <input required value="@if($job->avg_weekly_mile){{ $job->avg_weekly_mile }}@elseif(old('avg_weekly_mile')){{ old('avg_weekly_mile') }}@endif" name="avg_weekly_mile" type="text" class="@error('avg_weekly_mile') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200">
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
                    <select required name="hiring_area" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Hiring Map</option>
                        @foreach(DB::table('hiring_maps')->where('type' , 'Hiring Map')->where('company_id' , Cmf::getusercompany()->id)->get() as $r)
                        <option value="{{ $r->id }}" @if($job->hiring_area == $r->id) selected @elseif(old('hiring_area') == $r->id) selected @endif>{{ $r->tittle }}</option>
                        @endforeach
                    </select>
                    @error('hiring_area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <a href="{{ url('map/add-new') }}">Create New Hiring Map</a>
            </div>
            <div class="col-md-6 map-content">
                <div class="form-group">
                    <label class="lable-control">Operating Area</label>
                    <select required name="operating_area" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Hiring Map</option>
                        @foreach(DB::table('hiring_maps')->where('type' , 'Operating Map')->where('company_id' , Cmf::getusercompany()->id)->get() as $r)
                        <option value="{{ $r->id }}" @if($job->operating_area == $r->id) selected @elseif(old('operating_area') == $r->id) selected @endif>{{ $r->tittle }} </option>
                        @endforeach
                    </select>
                    @error('operating_area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <a href="{{ url('map/add-new') }}">Create New Hiring Map</a>
            </div>
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
                    <select required name="compensation" class="@error('compensation') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 128)->first()->options) as $r)
                        <option @if($job->compensation == $r) selected @elseif(old('compensation') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <label class="lable-control">Type of Driver Pay</label>
                    <select required name="duty_time" class="@error('duty_time') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 129)->first()->options) as $r)
                        <option @if($job->duty_time == $r) selected @elseif(old('duty_time') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <input required value="@if($job->compensation_ammount){{ $job->compensation_ammount }}@elseif(old('compensation_ammount')){{ old('compensation_ammount') }}@endif" type="text" class="@error('compensation_ammount') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200" name="compensation_ammount">
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
                    <input required value="@if($job->top_10_of_earners_are_makking){{ $job->top_10_of_earners_are_makking }}@elseif(old('top_10_of_earners_are_makking')){{ old('top_10_of_earners_are_makking') }}@endif" type="text" class="@error('top_10_of_earners_are_makking') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200"name="top_10_of_earners_are_makking">
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
                    <select required class="@error('avgerage_weekly_pay') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="avgerage_weekly_pay">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 130)->first()->options) as $r)
                        <option @if($job->avgerage_weekly_pay == $r) selected @elseif(old('avgerage_weekly_pay') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <select required class="@error('avgerage_yearly_pay') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="avgerage_yearly_pay">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 131)->first()->options) as $r)
                        <option @if($job->avgerage_yearly_pay == $r) selected @elseif(old('avgerage_yearly_pay') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <select required class="@error('sign_on_bonus') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="sign_on_bonus">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 132)->first()->options) as $r)
                        <option @if($job->sign_on_bonus == $r) selected @elseif(old('sign_on_bonus') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <input required value="@if($job->sign_on_bonus_amount){{ $job->sign_on_bonus_amount }}@elseif(old('sign_on_bonus_amount')){{ old('sign_on_bonus_amount') }}@endif" class="@error('sign_on_bonus_amount') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" type="text" name="sign_on_bonus_amount">
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
                        <label class="checkbox checkbox-lg mb-3 ">
                            <input @foreach(explode(',' , $job->benifits) as $b) @if($b == $r) checked @endif @endforeach type="checkbox" value="{{ $r }}" name="benifits[]" />
                            <span class="mr-3"></span>
                            {{ $r }}
                        </label>
                        
                    </div>
                    @endforeach
                    @if($job->custombenifits)
                        @foreach(explode(',' , $job->custombenifits) as $r)
                        <div class="col-md-6">
                            <label class="checkbox checkbox-lg mb-3">
                                <input checked type="checkbox" value="{{ $r }}" name="custombenifits[]" />
                                <span class="mr-3"></span>
                                {{ $r }}
                            </label>
                        </div>
                        @endforeach
                    @endif
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
                    <select required name="freight_type_equipment" class="@error('freight_type_equipment') is-invalid @enderror form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $r)
                        <option @if($job->freight_type_equipment == $r) selected @elseif(old('freight_type_equipment') == $r) selected @endif value="{{ $r }}">{{ $r }}</option>
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
                    <input required value="@if($job->drop_and_hook){{ $job->drop_and_hook }}@elseif(old('drop_and_hook')){{ old('drop_and_hook') }}@endif" name="drop_and_hook" type="text" class="@error('drop_and_hook') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
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
                    <input required value="@if($job->live_load){{ $job->live_load }}@elseif(old('live_load')){{ old('live_load') }}@endif" name="live_load" type="text" class="@error('live_load') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
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
                    <input required value="@if($job->driver_load){{ $job->driver_load }}@elseif(old('driver_load')){{ old('driver_load') }}@endif" name="driver_load" type="text" class="@error('driver_load') is-invalid @enderror form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
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
                <span id='add-row' class="btn btn-primary">+ Add Equipment</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-md-12">
                <table id="test-table" class="">
                  <div id="test-body">
                    <div class="row" id="row0">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="lable-control">Truck Make</label>
                                <input name="truck_make[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="lable-control">Truck Model</label>
                                <input name="truck_model[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="lable-control">Truck Year</label>
                                <input name="truck_year[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px">
                            </div>
                        </div>
                      <td>
                        
                      </td>
                    </div>
                  </div>
                </table>
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