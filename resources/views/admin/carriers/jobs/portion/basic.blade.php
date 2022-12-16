<div class="card card-custom mt-3">
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
                    <input required  type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Looking for fulltime driver for our native company" name="job_tittle">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">How often will the driver get home?</label>
                    <select required name="how_often_will_driver_get_home" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 123)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Add Custom Home Time</label>
                    <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Add Custome Time Here" name="custom_home_time">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Driver Type</label>
                    <select required name="driver_type" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 124)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Home Time</label>
                    <select required name="home_time" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 125)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Freight Type</label>
                    <select required name="freight_type" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Dedicated Account</label>
                    <select required name="dedicated_account" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 127)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">Avg Weekly Mile</label>
                    <input required name="avg_weekly_mile" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200">
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
<div class="card card-custom mt-3">
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
                        @foreach(DB::table('hiring_maps')->where('type' , 'Hiring Map')->where('company_id' , $data->id)->get() as $r)
                        <option value="{{ $r->id }}">{{ $r->tittle }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ url('map/add-new') }}">Create New Hiring Map</a>
            </div>
            <div class="col-md-6 map-content">
                <div class="form-group">
                    <label class="lable-control">Operating Area</label>
                    <select name="operating_area" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Hiring Map</option>
                        @foreach(DB::table('hiring_maps')->where('type' , 'Operating Map')->where('company_id' , $data->id)->get() as $r)
                        <option value="{{ $r->id }}">{{ $r->tittle }} </option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ url('map/add-new') }}">Create New Hiring Map</a>
            </div>
        </div>
    </div>
</div>
<div class="card card-custom mt-3">
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
                    <select required name="compensation" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 128)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Type of Driver Pay</label>
                    <select required name="duty_time" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 129)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
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
                    <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200" name="compensation_ammount">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Top 10% Of Earners are making</label>
                    <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="1,000 - 2,200"name="top_10_of_earners_are_makking">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Average Weekly Pay</label>
                    <select required class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="avgerage_weekly_pay">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 130)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6 map-content">
                <div class="form-group">
                    <label class="lable-control">Average Yearly Pay</label>
                    <select required class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="avgerage_yearly_pay">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 131)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Sign on Bonus</label>
                    <select required class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects" name="sign_on_bonus">
                        <option value="">Select Option</option>
                        @foreach(explode(',' , $attribute->where('id' , 132)->first()->options) as $r)
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Sign on Bonus Amount</label>
                    <input required class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" type="text" name="sign_on_bonus_amount">
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
<div class="card card-custom mt-3">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label font-weight-bolder text-dark">Benefits</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">When do benefits start?</label>
                    <input type="text" placeholder="When do benefits start?" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" name="when_do_benifit_start">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="lable-control">Select Benifits</label>
                <div class="row" id="appendbenifitindiv">
                    @foreach(explode(',' , $attribute->where('id' , 133)->first()->options) as $r)
                    <div class="col-md-6">
                        <label class="checkbox checkbox-lg mb-3 ">
                            <input type="checkbox" value="{{ $r }}" name="benifits[]" />
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
        <style type="text/css">
            
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">Upload your benefits information documents</label>
                    <input class="form-control" type="file" id="files" name="files[]" multiple />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-custom mt-3">
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
                        <option value="{{ $r }}">{{ $r }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Drop and Hook</label>
                    <input required name="drop_and_hook" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Live Load/Unload</label>
                    <input required name="live_load" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="lable-control">Driver Load/Unload</label>
                    <input required name="driver_load" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" placeholder="%">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
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
                <p class="btn btn-primary mr-2" data-toggle="modal" data-target="#equipmentOption">Advanced Equipment Options</p>
            </div>
        </div>
    </div>
</div>
<div class="card card-custom mt-3">
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
                <p class="policy-text" id="ridertextpolicy">{{ DB::table('companies')->where('id' , $data->id)->first()->riderpolicy }}</p>
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
                <p id="pettextpolicy" class="policy-text">{{ DB::table('companies')->where('id' , $data->id)->first()->petpolicy }}</p>
            </div>
        </div>
    </div>
</div>