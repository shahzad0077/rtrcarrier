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
                                <option value="21 Years Old">21 Years Old</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <!-- If they Select other then this field should popup -->
                    <div id="minimum_age" style="display:none;" class="col-md-6">
                        <label class="lable-control">Enter the Minimum Age</label>
                        <input type="number" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="minimum_age_field">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Minimum Experience</label>
                            <small>Tractor/Trailer/OTR</small>
                            <select name="minimum_expereince" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="Student">Student</option>
                                <option value="Recent Graduate">Recent Graduate</option>
                                <option value="1 Months">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 months</option>
                                <option value="4 Months">4 Months</option>
                                <option value="5 Months">5 Months</option>
                                <option value="6 Months">6 Months</option>
                                <option value="7 Months">7 Months</option>
                                <option value="8 Months">8 Months</option>
                                <option value="9 Months">9 Months</option>
                                <option value="10 Months">10 Months</option>
                                <option value="11 Months">11 Months</option>
                                <option value="12 Months">12 Months</option>
                                <option value="1+ Year">1+ Year</option>
                                <option value="2+ Years">2+ Years</option>
                                <option value="3+ Years">3+ Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Notes about Experience</label>
                            <textarea name="additional_notes_about_expereince" class="summernote">
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
                            <select name="no_more_than" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="moving_violations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="6 Months">6 Months</option>
                                <option value="1 Year">1 Year</option>
                                <option value="2 Year">2 Years</option>
                                <option value="3 Year">3 Years</option>
                                <option value="4 Year">4 Years</option>
                                <option value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Notes</label>
                            <textarea name="additionl_notes_about_moving_voliations" class="summernote">
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
                            <select name="no_more_than_major_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="major_moving_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="6 Months">6 Months</option>
                                <option value="1 Year">1 Year</option>
                                <option value="2 Year">2 Years</option>
                                <option value="3 Year">3 Years</option>
                                <option value="4 Year">4 Years</option>
                                <option value="5 Year">5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Additional Notes</label>
                            <textarea name="additionl_notes_about_moving_major_voliations" class="summernote">
                        </textarea>
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
                            <textarea name="license_suspensions_field" class="summernote">
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
                            <select name="dot_no_more_than" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Moving violations</label>
                            <select name="dot_moving_voilations" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                                <option value="6 Months">6 Months</option>
                                <option value="1 Year">1 Year</option>
                                <option value="2 Year">2 Years</option>
                                <option value="3 Year">3 Years</option>
                                <option value="4 Year">4 Years</option>
                                <option value="5 Year">5 Years</option>
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
                            <textarea name="reason_of_suspensions" class="summernote">
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
    </div>
</div>