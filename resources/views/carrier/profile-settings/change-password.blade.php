@extends('layouts.main-layout')
@section('title','Change Password')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
              @include('alerts.index')
                <!--begin::Profile Personal Information-->
                <div class="d-flex flex-row">
                    <!--begin::Aside-->
                    @include('carrier.profile-settings.sidebar')
                    <!--end::Aside-->
                    <!--begin::Content-->
					<div class="flex-row-fluid ml-lg-8">
					    <!--begin::Card-->
					    <div class="card card-custom card-stretch">
					        <!--begin::Header-->
					        <div class="card-header py-3">
					            <div class="card-title align-items-start flex-column">
					                <h3 class="card-label font-weight-bolder text-dark">Change Password</h3>
					                <span class="text-muted font-weight-bold font-size-sm mt-1">Update your password</span>
					            </div>
					            <div class="card-toolbar">
					            </div>
					        </div>
					        <!--end::Header-->
					        <!--begin::Form-->
					            <!--begin::Body-->
					            <div class="card-body">
                                    @if(session()->has('errorsecurity'))
                                        <div class="alert alert-danger">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{ session()->get('errorsecurity') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                      <div  class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                              <li >{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                      </div><br />
                                    @endif
                                    <form method="POST" action="{{ url('securetycredentials') }}">
                                        {{ csrf_field() }}
					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="lable-control">Old Password</label>
                                                <input type="password" class="form-control form-control-lg form-control-solid" placeholder="Current Password" name="oldpassword">
					                        </div>
					                    </div>
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="lable-control">New Password</label>
					                            <input type="password" id="password" class="form-control form-control-lg form-control-solid" name="newpassword">
					                        </div>
					                    </div>
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="lable-control">Confirm Password</label>
					                            <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmed">
					                        </div>
					                    </div>
                                        <div class="col-md-12">
                                            <style type="text/css">
.valid {
  color: green;
}
.invalid {
  color: red;
}
</style>

                                            <ul id="message">
                                                  <li id="letter" class="invalid"><i class="icofont-tick-mark"></i> Lowercase Letter</li>
                                                  <li id="capital" class="invalid"><i class="icofont-tick-mark"></i> One Capital Letter</li>
                                                  <li id="number" class="invalid"><i class="icofont-tick-mark"></i> One Numeric Digit</li>
                                                  <li id="length" class="invalid"><i class="icofont-tick-mark"></i> Minimum 8 characters</li>
                                            </ul>
                                        </div>
					                    <div class="col-md-12">
                                            <button id="submitbutton" type="submit" class="btn btn-primary mr-2">Save Changes</button>
                                        </div>
					                </div>
                                </form>
					            </div>
					            <!--end::Body-->
					        <!--end::Form-->
					    </div>
					</div>
					<!--end::Content-->
                </div>
                <!--end::Profile Personal Information-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
@endsection