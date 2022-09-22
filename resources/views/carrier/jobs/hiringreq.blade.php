@php
    $hir = DB::table('linktemplatewithjobs')->where('job_id' , $job->id);
    if($hir->count() > 0)
    {
        $template = DB::table('hiring_templates')->where('id' , $hir->first()->template_id)->first();
    }
@endphp
<input type="hidden" name="hirringid" value="@if($hir->count() > 0) {{ $template->id }} @endif">
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
                            <select onchange="showbelowfield(this.value,'minimum_age' , 'Other')" name="minimum_age" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->minimum_age == '21 Years Old') selected @endif @endif value="21 Years Old">21 Years Old</option>
                                <option @if($hir->count() > 0) @if($template->minimum_age == 'Other') selected @endif @endif value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they Select other then this field should popup -->
                    <div id="minimum_age" @if($hir->count() > 0) @if($template->minimum_age == '21 Years Old') style="display: none;" @endif @else style="display: none;" @endif class="col-md-6">
                        <label class="lable-control">Enter the Minimum Age</label>
                        <input type="text" value="@if($hir->count() > 0) {{ $template->minimum_age_field }} @endif" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="minimum_age_field">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Minimum Experience</label>
                            <small>Tractor/Trailer/OTR</small>
                            <select name="minimum_expereince" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '21 Years Old') selected @endif @endif value="21 Years Old" value="Student">Student</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == 'Recent Graduate') selected @endif @endif value="Recent Graduate">Recent Graduate</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '1 Months') selected @endif @endif value="1 Months">1 Month</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '2 Months') selected @endif @endif value="2 Months">2 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '3 Months') selected @endif @endif value="3 Months">3 months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '4 Months') selected @endif @endif value="4 Months">4 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '5 Months') selected @endif @endif value="5 Months">5 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '6 Months') selected @endif @endif value="6 Months">6 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '7 Months') selected @endif @endif value="7 Months">7 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '8 Months') selected @endif @endif value="8 Months">8 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '9 Months') selected @endif @endif value="9 Months">9 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '10 Months') selected @endif @endif value="10 Months">10 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '11 Months') selected @endif @endif value="11 Months">11 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '12 Months') selected @endif @endif value="12 Months">12 Months</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '1+ Year') selected @endif @endif value="1+ Year">1+ Year</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '2+ Years') selected @endif @endif value="2+ Years">2+ Years</option>
                                <option @if($hir->count() > 0) @if($template->minimum_expereince == '3+ Years') selected @endif @endif value="3+ Years">3+ Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Notes about Experience</label>
                            <textarea name="additional_notes_about_expereince" class="summernote">@if($hir->count() > 0){{ $template->additional_notes_about_expereince }}@endif</textarea>
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
                            <select name="no_more_than" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->no_more_than == '1') selected @endif @endif value="1">1</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '2') selected @endif @endif value="2">2</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '3') selected @endif @endif value="3">3</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '4') selected @endif @endif value="4">4</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '5') selected @endif @endif value="5">5</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '6') selected @endif @endif value="6">6</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '7') selected @endif @endif value="7">7</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '8') selected @endif @endif value="8">8</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '9') selected @endif @endif value="9">9</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than == '10') selected @endif @endif value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="moving_violations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->moving_violations == '6 Months') selected @endif @endif value="6 Months">6 Months</option>
                                <option @if($hir->count() > 0) @if($template->moving_violations == '1 Year') selected @endif @endif value="1 Year">1 Year</option>
                                <option @if($hir->count() > 0) @if($template->moving_violations == '2 Year') selected @endif @endif value="2 Year">2 Years</option>
                                <option @if($hir->count() > 0) @if($template->moving_violations == '3 Year') selected @endif @endif value="3 Year">3 Years</option>
                                <option @if($hir->count() > 0) @if($template->moving_violations == '4 Year') selected @endif @endif value="4 Year">4 Years</option>
                                <option @if($hir->count() > 0) @if($template->moving_violations == '5 Year') selected @endif @endif value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Notes</label>
                            <textarea name="additionl_notes_about_moving_voliations" class="summernote">@if($hir->count() > 0){{ $template->additionl_notes_about_moving_voliations }}@endif</textarea>
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
                            <select name="no_more_than_major_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '1') selected @endif @endif value="1">1</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '2') selected @endif @endif value="2">2</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '3') selected @endif @endif value="3">3</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '4') selected @endif @endif value="4">4</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '5') selected @endif @endif value="5">5</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '6') selected @endif @endif value="6">6</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '7') selected @endif @endif value="7">7</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '8') selected @endif @endif value="8">8</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '9') selected @endif @endif value="9">9</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_major_voilations == '10') selected @endif @endif value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="major_moving_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->major_moving_voilations == '6 Months') selected @endif @endif value="6 Months">6 Months</option>
                                <option @if($hir->count() > 0) @if($template->major_moving_voilations == '1 Year') selected @endif @endif value="1 Year">1 Year</option>
                                <option @if($hir->count() > 0) @if($template->major_moving_voilations == '2 Year') selected @endif @endif value="2 Year">2 Years</option>
                                <option @if($hir->count() > 0) @if($template->major_moving_voilations == '3 Year') selected @endif @endif value="3 Year">3 Years</option>
                                <option @if($hir->count() > 0) @if($template->major_moving_voilations == '4 Year') selected @endif @endif value="4 Year">4 Years</option>
                                <option @if($hir->count() > 0) @if($template->major_moving_voilations == '5 Year') selected @endif @endif value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Notes</label>
                            <textarea name="additionl_notes_about_moving_major_voliations" class="summernote">@if($hir->count() > 0){{ $template->additionl_notes_about_moving_major_voliations }}@endif</textarea>
                        </div>
                    </div>
                    <!-- Section -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">License Suspensions</label>
                            <select onchange="showbelowfield(this.value,'license_suspensions' , 'Yes')" name="license_suspensions" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <!-- if they Select yes -->
                    <div style="display:none;" id="license_suspensions" class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Reason of Suspensions</label>
                            <textarea name="license_suspensions_field" class="summernote">@if($hir->count() > 0){{ $template->license_suspensions_field }}@endif</textarea>
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
                            <select name="dot_no_more_than" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->dot_no_more_than == '1') selected @endif @endif value="1">1</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '2') selected @endif @endif value="2">2</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '3') selected @endif @endif value="3">3</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '4') selected @endif @endif value="4">4</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '5') selected @endif @endif value="5">5</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '6') selected @endif @endif value="6">6</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '7') selected @endif @endif value="7">7</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '8') selected @endif @endif value="8">8</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '9') selected @endif @endif value="9">9</option>
                                <option  @if($hir->count() > 0) @if($template->dot_no_more_than == '10') selected @endif @endif value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="dot_moving_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->dot_moving_voilations == '6 Months') selected @endif @endif value="6 Months">6 Months</option>
                                <option @if($hir->count() > 0) @if($template->dot_moving_voilations == '1 Year') selected @endif @endif value="1 Year">1 Year</option>
                                <option @if($hir->count() > 0) @if($template->dot_moving_voilations == '2 Year') selected @endif @endif value="2 Year">2 Years</option>
                                <option @if($hir->count() > 0) @if($template->dot_moving_voilations == '3 Year') selected @endif @endif value="3 Year">3 Years</option>
                                <option @if($hir->count() > 0) @if($template->dot_moving_voilations == '4 Year') selected @endif @endif value="4 Year">4 Years</option>
                                <option @if($hir->count() > 0) @if($template->dot_moving_voilations == '5 Year') selected @endif @endif value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Preventable accidents within the last</label>
                            <select name="preventable_accidents_withn_the_last" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="6 Months">6 Months</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Reason of Suspensions</label>
                            <textarea name="reason_of_suspensions" class="summernote">@if($hir->count() > 0){{ $template->reason_of_suspensions }}@endif</textarea>
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
                            <select name="no_more_than_incidents" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->no_more_than_incidents == '1') selected @endif @endif value="1">1</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '2') selected @endif @endif value="2">2</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '3') selected @endif @endif value="3">3</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '4') selected @endif @endif value="4">4</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '5') selected @endif @endif value="5">5</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '6') selected @endif @endif value="6">6</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '7') selected @endif @endif value="7">7</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '8') selected @endif @endif value="8">8</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '9') selected @endif @endif value="9">9</option>
                                <option  @if($hir->count() > 0) @if($template->no_more_than_incidents == '10') selected @endif @endif value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="moving_voilations_incidents" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->moving_voilations_incidents == '6 Months') selected @endif @endif value="6 Months">6 Months</option>
                                <option @if($hir->count() > 0) @if($template->moving_voilations_incidents == '1 Year') selected @endif @endif value="1 Year">1 Year</option>
                                <option @if($hir->count() > 0) @if($template->moving_voilations_incidents == '2 Year') selected @endif @endif value="2 Year">2 Years</option>
                                <option @if($hir->count() > 0) @if($template->moving_voilations_incidents == '3 Year') selected @endif @endif value="3 Year">3 Years</option>
                                <option @if($hir->count() > 0) @if($template->moving_voilations_incidents == '4 Year') selected @endif @endif value="4 Year">4 Years</option>
                                <option @if($hir->count() > 0) @if($template->moving_voilations_incidents == '5 Year') selected @endif @endif value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Ticket/Accident/Incident Combo </label>
                            <select onchange="showbelowfield(this.value,'ticket_incedent_field' , 'Yes')" name="ticket_incedent" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->ticket_incedent == 'No') selected @endif @endif value="No">No</option>
                                <option @if($hir->count() > 0) @if($template->ticket_incedent == 'Yes') selected @endif @endif value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they pressed Yes -->
                    <div @if($hir->count() > 0) @if($template->ticket_incedent == 'No') style="display: none;" @endif @else style="display: none;" @endif class="col-md-12" id="ticket_incedent_field">
                        <div class="form-group">
                            <label class="lable-control">Specify in a free form fill</label>
                            <textarea name="specify_in_a_free_form_fill" class="summernote">@if($hir->count() > 0){{ $template->specify_in_a_free_form_fill }}@endif</textarea>
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
                            <select name="maximum_jobs_no_more_than" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '1') selected @endif @endif value="1">1</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '2') selected @endif @endif value="2">2</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '3') selected @endif @endif value="3">3</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '4') selected @endif @endif value="4">4</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '5') selected @endif @endif value="5">5</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '6') selected @endif @endif value="6">6</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '7') selected @endif @endif value="7">7</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '8') selected @endif @endif value="8">8</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '9') selected @endif @endif value="9">9</option>
                                <option  @if($hir->count() > 0) @if($template->maximum_jobs_no_more_than == '10') selected @endif @endif value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="maximum_jobs_moving_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_moving_voilations == '6 Months') selected @endif @endif value="6 Months">6 Months</option>
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_moving_voilations == '1 Year') selected @endif @endif value="1 Year">1 Year</option>
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_moving_voilations == '2 Year') selected @endif @endif value="2 Year">2 Years</option>
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_moving_voilations == '3 Year') selected @endif @endif value="3 Year">3 Years</option>
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_moving_voilations == '4 Year') selected @endif @endif value="4 Year">4 Years</option>
                                <option @if($hir->count() > 0) @if($template->maximum_jobs_moving_voilations == '5 Year') selected @endif @endif value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Unemployment</label>
                            <select name="unemployment" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->unemployment == 'No') selected @endif @endif value="No">No</option>
                                <option @if($hir->count() > 0) @if($template->unemployment == 'Yes') selected @endif @endif value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Information</label>
                            <textarea name="maximum_jobs_additional_infomation" class="summernote">@if($hir->count() > 0){{ $template->maximum_jobs_additional_infomation }}@endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Felony Convictions </label>
                            <textarea name="felony_convictions" class="summernote">@if($hir->count() > 0){{ $template->felony_convictions }}@endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Misdemeanors</label>
                            <textarea name="misdemeanors" class="summernote">@if($hir->count() > 0){{ $template->misdemeanors }}@endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Drugs/DUIs </label>
                            <textarea name="drug_duis" class="summernote">@if($hir->count() > 0){{ $template->drug_duis }}@endif</textarea>
                        </div>
                    </div>
                    <!-- Section -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Type of Drug Test </label>
                            <select name="type_of_drug_test" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->type_of_drug_test == 'Urine') selected @endif @endif>Urine</option>
                                <option @if($hir->count() > 0) @if($template->type_of_drug_test == 'Hair Follicle') selected @endif @endif>Hair Follicle</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Accepting SAP Drivers? </label>
                            <select onchange="showbelowfield(this.value,'accepting_sap_drivers' , 'Yes')" name="accepting_sap_drivers" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->accepting_sap_drivers == 'No') selected @endif @endif value="No">No</option>
                                <option @if($hir->count() > 0) @if($template->accepting_sap_drivers == 'Yes') selected @endif @endif value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they pressed Yes then it should appear -->
                    <div @if($hir->count() > 0) @if($template->accepting_sap_drivers == 'No') style="display: none;" @endif @else style="display: none;" @endif id="accepting_sap_drivers" class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Information</label>
                            <textarea name="additional_information" class="summernote">@if($hir->count() > 0){{ $template->additional_information }}@endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Physical</label>
                            <textarea name="physical" class="summernote">@if($hir->count() > 0){{ $template->physical }}@endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Accommodate an Automatic Restriction? </label>
                            <select name="accomodate_an_automatic_restriction" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->accomodate_an_automatic_restriction == 'No') selected @endif @endif value="No">No</option>
                                <option @if($hir->count() > 0) @if($template->accomodate_an_automatic_restriction == 'Yes') selected @endif @endif value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Cameras Installed in the Trucks?</label>
                            <select onchange="showbelowfield(this.value,'camera_installed' , 'Yes')" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="camera_installed">
                                <option @if($hir->count() > 0) @if($template->camera_installed == 'No') selected @endif @endif value="No">No</option>
                                <option @if($hir->count() > 0) @if($template->camera_installed == 'Yes') selected @endif @endif value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they pressed Yes -->
                    <div id="camera_installed" class="row col-md-12" @if($hir->count() > 0) @if($template->camera_installed == 'No') style="display: none;" @endif @else style="display: none;" @endif>
                    <div  id="camera_installed" class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Select Type</label>
                            <select name="camera_type" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->camera_type == 'Inward') selected @endif @endif value="Inward">Inward</option>
                                <option @if($hir->count() > 0) @if($template->camera_type == 'Outward') selected @endif @endif value="Outward">Outward</option>
                            </select>
                        </div>
                    </div>

                    <div  class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Cameras are</label>
                            <select name="camera_are" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->camera_are == 'Continuously recording') selected @endif @endif value="Continuously recording">Continuously recording</option>
                                <option @if($hir->count() > 0) @if($template->camera_are == 'Only during incidents') selected @endif @endif value="Only during incidents">Only during incidents</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Facing</label>
                            <select name="camera_facing" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->camera_facing == 'Inward') selected @endif @endif value="Inward">Inward</option>
                                <option @if($hir->count() > 0) @if($template->camera_facing == 'Outward') selected @endif @endif value="Outward">Outward</option>
                            </select>
                        </div>
                    </div>
                    <div  class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Camera Recording</label>
                            <select name="camera_recording" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option @if($hir->count() > 0) @if($template->camera_recording == 'Only during incidents') selected @endif @endif value="Only during incidents">Only during incidents</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h4>Required Endorsements</h4>
                    </div>
                    <div class="col-md-6">
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'Hazmat') checked @endif  @endforeach @endif value="Hazmat" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            Hazmat
                        </label>
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'TWIC Card') checked @endif  @endforeach @endif value="TWIC Card" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            TWIC Card
                        </label>
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'Tanker') checked @endif  @endforeach @endif value="Tanker" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            Tanker
                        </label>
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'Hazardous Tank Endorsement') checked @endif  @endforeach @endif value="Hazardous Tank Endorsement" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            Hazardous Tank Endorsement
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'Double/Triple') checked @endif  @endforeach @endif value="Double/Triple" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            Double/Triple
                        </label>
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'Passenger endorsement') checked @endif  @endforeach @endif value="Passenger endorsement" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            Passenger endorsement
                        </label>
                        <label class="checkbox checkbox-lg mb-3">
                            <input @if($hir->count() > 0) @foreach(explode(',' , $template->requiredendorsements) as $r) @if($r == 'No endorsements required') checked @endif  @endforeach @endif value="No endorsements required" type="checkbox" name="requiredendorsements[]" />
                            <span class="mr-3"></span>
                            No endorsements required
                        </label>
                    </div>
                    <input type="hidden" name="template_name" id="template_name_field">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <div class="ml-auto">
                                <span onclick="savetemplate()" id="save_as_template" class="btn btn-lg btn-primary">Save as template</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>