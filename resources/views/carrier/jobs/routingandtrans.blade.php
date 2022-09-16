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
                    <select class="form-control select2 form-control-lg form-control-solid" style="width:100%; height: 55px !important; background: #f3f6f9 !important; border: 1px solid #E4E6EF !important;" id="kt_select2_11" multiple name="emails[]">
                        @foreach(DB::table('company_emails')->where('company_id' , Cmf::getusercompany()->id)->get() as $r)
                            <option value="{{ $r->email }}">{{ $r->email }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 text-right add-email">
                    <span data-toggle="modal" data-target="#addcompanyemail">Add New Email</span>
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


