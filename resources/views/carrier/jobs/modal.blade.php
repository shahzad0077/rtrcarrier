<div class="modal fade" id="addcompanyemail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Email</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="POST" action="{{ url('job/addnewcompanyemal') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Enter Email</label>
                                <input name="email" required type="email" id="emailfield" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">
                                <span class="invalid-feedback" id="emailerror" role="alert"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="savetemplate" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Save This as a Template</h5>
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
                                <label class="lable-control">Template Name</label>
                                <input type="text" id="templatenamefield" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">
                                <span class="invalid-feedback" id="templatenameerror" role="alert"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="button" onclick="savetemplatemodalsubmit()" id="save_templatebutton" class="btn btn-primary font-weight-bold">Save</button>
                </div>
        </div>
    </div>
</div>
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
                <input type="hidden" value="{{ $job->id }}" name="job_id">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">What are the primary running lanes for this position?</label>
                            <textarea name="primary_running_lanes" id="primary_running_lanes" rows="5" class="form-control form-control-solid" style="height:100px;">{{ $job->primary_running_lanes }}</textarea>
                            <span class="invalid-feedback advance-feedback" id="primary_running_lanes_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Avg Length of haul (Miles)</label>
                            <input value="{{ $job->avg_length_of_haul }}" type="number" id="avg_length_of_haul" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="avg_length_of_haul">
                            <span class="invalid-feedback advance-feedback" id="avg_length_of_haul_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Type of Fuel Card</label>
                            <input value="{{ $job->avg_length_of_haul }}" type="text" id="type_of_fuel_card" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="eg. 25,000 miles" name="type_of_fuel_card">
                            <span class="invalid-feedback advance-feedback" id="type_of_fuel_card_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Tolls</label>
                            <textarea id="tolls" name="tolls" rows="4" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">{{ $job->tolls }}</textarea>
                            <span class="invalid-feedback advance-feedback" id="tolls_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">24 hour Dispatch</label>
                            <select name="hour_dispatch" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="hour_dispatch">
                                <option @if($job->hour_dispatch == 'Yes') selected @endif value="Yes">Yes</option>
                                <option @if($job->hour_dispatch == 'No') selected @endif value="No">No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="hour_dispatch_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">EZ Pass</label>
                            <select name="ez_Pass" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="ez_Pass">
                                <option @if($job->ez_Pass == 'Yes') selected @endif value="Yes">Yes</option>
                                <option @if($job->ez_Pass == 'No') selected @endif value="No">No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="ez_Pass_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Pre-Pass</label>
                            <select name="pre_pass" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="pre_pass">
                                <option @if($job->pre_pass == 'Yes') selected @endif value="Yes">Yes</option>
                                <option @if($job->pre_pass == 'No') selected @endif value="No">No</option>
                            </select>
                            <span class="invalid-feedback advance-feedback" id="pre_pass_err" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Non-Forced Dispatch</label>
                            <select name="non_forced_dispatch" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="non_forced_dispatch">
                                <option @if($job->non_forced_dispatch == 'Yes') selected @endif value="Yes">Yes</option>
                                <option @if($job->non_forced_dispatch == 'No') selected @endif value="No">No</option>
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
            <form id="addpayoutschedule" method="POST" action="{{ url('job/addpayoutschedule') }}"> 
                @csrf
            <div class="modal-body ">
                <div id="payoutschedule">
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <h5>Payout #1</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">When?</label>
                                <select name="whenpayout[]" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option value="Orientation">Orientation</option>
                                    <option value="1st Dispatch">1st Dispatch</option>
                                    <option value="Delivery of 1st Load">Delivery of 1st Load</option>
                                    <option value="Month 1">Month 1</option>
                                    <option value="Month 2">Month 2</option>
                                    <option value="Month 3">Month 3</option>
                                    <option value="Month 4">Month 4</option>
                                    <option value="Month 5">Month 5</option>
                                    <option value="Month 6">Month 6</option>
                                    <option value="Month 7">Month 7</option>
                                    <option value="Month 8">Month 8</option>
                                    <option value="Month 9">Month 9</option>
                                    <option value="Month 10">Month 10</option>
                                    <option value="Month 11">Month 11</option>
                                    <option value="Month 12">Month 12</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount</label>
                                <select name="ammountpayout[]" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
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
                <button type="submit" id="payout-schedule-button" class="btn btn-primary font-weight-bold">Set Schedule</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="advancepayOption" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Advance Pay Options</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form id="addadvancepayoutdetails" method="POST" action="{{ url('job/addadvancepayoutdetails') }}">
                @csrf
                <input type="hidden" value="{{ $job->id }}" name="job_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Breakdown Pay ($)</label>
                                <input required id="breakdown_pay" type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="breakdown_pay">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Cash Advance</label>
                                <select name="cash_advance" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="cash_advance">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Detention pay</label>
                                <select name="detention_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="detention_pay">
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
                                <input required id="pays_amount" type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="pays_amount">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Are drivers paid the same for loaded and empty miles?</label>
                                <select name="are_drivers_paid_the_same_for_loaded_and_empty" onchange="showbelowfield(this.value,'miles_cpm_chat' , 'No')" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <!-- If selected No in the above field then show this field. -->
                        <div id="miles_cpm_chat" style="display: none;" class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Miles CPM chat</label>
                                <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="miles_cpn_chat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">End of Pay Week</label>
                                <select name="end_of_pay_week" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
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
                                <select onchange="showbelowfield(this.value,'hazmat_pay_options','Yes')" name="hazmat_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>
                        <!-- If selected Yes then show this input-->
                        <div style="display:none;" id="hazmat_pay_options" class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Select Option</label>
                                <select name="hazmat_pay_options_field" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="hazmat_pay_options_field">
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
                                <textarea name="holida_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="8"></textarea>
                                <small>Max 400 characters</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">How Are Drivers Paid?</label>
                                <select onchange="showbelowfield(this.value,'how_are_drivers_paid_other','Other')" name="how_are_drivers_paid" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Direct Deposit</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <!-- If they select Other -->
                        <div id="how_are_drivers_paid_other" style="display:none;" class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Add option</label>
                                <input id="how_are_drivers_paid_other_field" type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="how_are_drivers_paid_other_field">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Layover Pay</label>
                                <select name="layover_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="layover_pay">
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
                                <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="layover_pay_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Minimum Pay Guarantee</label>
                                <select name="minimum_pay_guarantee" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Weekly</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount</label>
                                <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="minimum_pay_guarantee_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Multi-stop Pay</label>
                                <select name="multi_stop_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount</label>
                                <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="multi_stop_pay_amount">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Paid On</label>
                                <select onchange="showbelowfield(this.value,'paid_on','Other')" name="paid_on" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>All stops</option>
                                    <option>All stop except first and last stop</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <!-- If they select Other -->
                        <div style="display:none" id="paid_on" class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Specify other</label>
                                <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="paid_on_field" id="paid_on_field">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">New York City Pay</label>
                                <select name="new_york_city_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount</label>
                                <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="new_york_city_pay_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Northeast Pay</label>
                                <select name="northeast_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount(CPM)</label>
                                <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="northeast_pay_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Orientation Pay</label>
                                <select name="prientation_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount</label>
                                <input type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="prientation_pay_amount">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Pay Increase</label>
                                <textarea name="pay_increase" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="6"></textarea>
                                <small>Max 200 characters</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Per Diem</label>
                                <select name="per_diem" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Amount(CPM)</label>
                                <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="per_diem_amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Referral Bonus ($)</label>
                                <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="referral_bonus">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Safety Bonus</label>
                                <textarea name="safety_bonus" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="6"></textarea>
                                <small>Max 400 characters</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">Start of Pay Week</label>
                                <select nama="start_of_pay_week" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
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
                                <select name="type_of_driver_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option> Practical Millage Pay</option>
                                    <option>HHG</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Unloading Pay ($)</label>
                                <select nama="unloading_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Vacation Pay</label>
                                <textarea name="vacation_pay" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" rows="6" style="height:100px;"></textarea>
                                <small>Max 200 characters</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="lable-control">When Are Drivers Paid?</label>
                                <select name="when_are_drivers_paid" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
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
                        <button type="submit" id="advance-pay-button-submit" class="btn btn-primary font-weight-bold">Submit Now</button>
                    </div>
                </div>
            </form>
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
            <form id="advanceequipment" method="POST" action="{{ url('job/advanceequipment') }}">
                @csrf
                <input type="hidden" value="{{ $job->id }}" name="job_id">
                @php
                    $advanceequipment = DB::table('advance_equipment_values')->where('job_id' , $job->id)->first();
                @endphp
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Engine</label>
                            <input @if($advanceequipment) value="{{ $advanceequipment->engine }}" @endif type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="" name="engine">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Transmission Type</label>
                            <select name="transmission_type" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->transmission_type == 'Automatic') selected @endif @endif>Automatic</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Truck Speed (Cruise / Pedal)</label>
                            <select name="truck_speed" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->truck_speed == 'Cruise') selected @endif @endif>Cruise</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Inverter</label>
                            <select name="inverter" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->inverter == 'No') selected @endif @endif>No</option>
                                <option @if($advanceequipment) @if($advanceequipment->inverter == 'Yes') selected @endif @endif>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">APU/EPU</label>
                            <select name="apu_epu" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->apu_epu == 'No') selected @endif @endif>No</option>
                                <option @if($advanceequipment) @if($advanceequipment->apu_epu == 'Yes') selected @endif @endif>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Bunks</label>
                            <select name="bunks" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->bunks == 'Single Bunk') selected @endif @endif>Single Bunk</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Orientation</label>
                            <select name="camera_orientation" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->camera_orientation == 'Inward Facing') selected @endif @endif>Inward Facing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Recording</label>
                            <select name="camera_recording" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->camera_recording == 'No') selected @endif @endif>No</option>
                                <option @if($advanceequipment) @if($advanceequipment->camera_recording == 'Yes') selected @endif @endif>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Can Truck Be Taken Home?</label>
                            <select name="can_truck_taken_home" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->can_truck_taken_home == 'No') selected @endif @endif>No</option>
                                <option @if($advanceequipment) @if($advanceequipment->can_truck_taken_home == 'Yes') selected @endif @endif>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Truck Permanently Assigned</label>
                            <select name="truck_permanently_assigned" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->truck_permanently_assigned == 'No') selected @endif @endif>No</option>
                                <option @if($advanceequipment) @if($advanceequipment->truck_permanently_assigned == 'Yes') selected @endif @endif>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Navigation</label>
                            <select name="onboard_navigation" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->onboard_navigation == 'Camera Recording') selected @endif @endif>Camera Recording</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Onboard Communication</label>
                            <textarea name="onboard_communication" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" placeholder="Enter your text here..." rows="5">@if($advanceequipment) {{ $advanceequipment->onboard_communication }} @endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">DirecTV</label>
                            <select name="directtv" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->directtv == 'Yes') selected @endif @endif>Yes</option>
                                <option @if($advanceequipment) @if($advanceequipment->directtv == 'No') selected @endif @endif>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">SiriusXM</label>
                            <select name="siriusxm" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->siriusxm == 'Yes') selected @endif @endif>Yes</option>
                                <option @if($advanceequipment) @if($advanceequipment->siriusxm == 'No') selected @endif @endif>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Refrigerator</label>
                            <select name="refrigerator" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->refrigerator == 'Yes') selected @endif @endif>Yes</option>
                                <option @if($advanceequipment) @if($advanceequipment->refrigerator == 'No') selected @endif @endif>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Microwave</label>
                            <select name="microwave" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->microwave == 'Yes') selected @endif @endif>Yes</option>
                                <option @if($advanceequipment) @if($advanceequipment->microwave == 'No') selected @endif @endif>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Collision Mitigation</label>
                            <select name="collision_mitigation" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($advanceequipment) @if($advanceequipment->collision_mitigation == 'Yes') selected @endif @endif>Yes</option>
                                <option @if($advanceequipment) @if($advanceequipment->collision_mitigation == 'No') selected @endif @endif>No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button id="advance-equipment-modal-button" type="submit" class="btn btn-primary font-weight-bold">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>