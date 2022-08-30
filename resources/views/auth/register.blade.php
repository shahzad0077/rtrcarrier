@extends('layouts.layout-second')
@section('title','Register')
@section('content')
    <!--begin::Login-->
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
            <!--begin::Content-->
            <div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
                <!--begin::Container-->
                <div class="login-content login-content-signup d-flex flex-column">
                    <!--begin::Aside Top-->
                    <div class="d-flex flex-column-auto flex-column px-10">
                        <!--begin::Aside header-->
                        <a href="{{ url('') }}" class="login-logo pb-lg-4 pb-10 pt-2">
                            <img src="https://i0.wp.com/classaclub.com/wp-content/uploads/2022/03/logo.png?fit=128%2C63&ssl=1" class="max-h-70px" alt="" />
                        </a>
                        <!--end::Aside header-->
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav pt-5 pt-lg-15 pb-10">
                            <!--begin::Wizard Steps-->
                            <div class="wizard-steps d-flex flex-column flex-sm-row">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper pr-7">
                                        <div class="wizard-icon">
                                            <i class="wizard-check ki ki-check"></i>
                                            <span class="wizard-number">1</span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Signup
                                            </h3>
                                            <div class="wizard-desc">
                                                Company Info
                                            </div>
                                        </div>
                                        <span class="svg-icon pl-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                    <div class="wizard-wrapper pr-7">
                                        <div class="wizard-icon">
                                            <i class="wizard-check ki ki-check"></i>
                                            <span class="wizard-number">2</span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Company
                                            </h3>
                                            <div class="wizard-desc">
                                                Company Info
                                            </div>
                                        </div>
                                        <span class="svg-icon pl-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                            <i class="wizard-check ki ki-check"></i>
                                            <span class="wizard-number">3</span>
                                        </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Finish
                                            </h3>
                                            <div class="wizard-desc">
                                                The Last Step
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                            </div>
                            <!--end::Wizard Steps-->
                        </div>
                        <!--end: Wizard Nav-->
                    </div>
                    <!--end::Aside Top-->
                    <!--begin::Signin-->
                    <div class="login-form">
                        <!--begin::Form-->
                        <form method="POST" action="{{ url('carrierregister') }}" class="form px-10" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            <!--begin: Wizard Step 1-->
                            <div class=" " data-wizard-type="step-content" data-wizard-state="current">
                                <!--begin::Title-->
                                <div class="pb-10 pb-lg-12">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Create a Company Account</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Already have an Account ?
                                        <a href="{{url('/')}}" class="text-primary font-weight-bolder">Login here</a>
                                    </div>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Full Name</label>
                                    <input onkeyup="closealert()" required type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="name" name="name" />
                                    <span id="name-error" class="invalid-feedback" role="alert"></span>
                                </div>
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Company Name</label>
                                    <input onkeyup="checkcompanyname(this.value)" type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="company_name" name="company_name" />
                                    <span id="company_name-error" class="invalid-feedback" role="alert"></span>
                                </div>
                                <!--end::Form Group-->
                                <!--begin::Form Group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Work Email address</label>
                                    <input type="email" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="work_email" name="email" />
                                    <span id="email-error" class="invalid-feedback" role="alert">
                                        
                                    </span>
                                </div>
                                <!--end::Form Group-->
                            </div>
                            <!--end: Wizard Step 1-->
                            <!--begin: Wizard Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Title-->
                                <div class="pt-lg-0 pt-5 pb-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Continue Sign-Up</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Provide the following detils.
                                    </div>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
                                            <input type="password" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="password" name="password" />
                                            <span id="password-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>

                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Confirm Password</label>
                                            <input type="password" id="conferm-password" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="confirm-password" />
                                            <span class="form-text text-muted">Repeat your password</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Carrier DOT Number</label>
                                            <input onkeyup="checkdotnumber(this.value)" type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="dot_number" name="dot_number" />
                                            <span id="dot_number-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">How many trucks are in your fleet?</label>
                                            <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="trucks_in_fleet" name="trucks_in_fleet" />
                                            <span id="trucks_in_fleet-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">How many drivers are you looking to hire within the next 90 days?</label>
                                            <input type="text" class="form-control form-control-solid h-auto py-7 px-6 border-0 rounded-lg font-size-h6" id="how_many_drivers_in_next" name="how_many_drivers_in_next" />
                                            <span id="how_many_drivers_in_next-error" class="invalid-feedback" role="alert"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end: Wizard Step 2-->
                            <!--begin: Wizard Step 3-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Title-->
                                <div class="pt-lg-0 pt-5 pb-15">
                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Finished!</h3>
                                    <div class="text-muted font-weight-bold font-size-h4">
                                        Provide the following detils.
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div onclick="selectredirect('free-job-post')" class="free-job-post card step-finish-card">
                                            <div class="card-body text-center">
                                                <span>Create your first free job post</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div onclick="selectredirect('dashboard')" class="dashboard card step-finish-card">
                                            <div class="card-body text-center">
                                                <span>take me to my dashboard</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input style="display:none" type="radio" value="dashboard" id="dashboard" name="redirect">
                                <input style="display:none" type="radio" value="jobpost" id="free-job-post" name="redirect">
                            </div>
                            <!--end: Wizard Step 5-->
                            <!--begin: Wizard Actions-->
                            <div class="d-flex justify-content-between pt-7">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3" data-wizard-type="action-prev">
                                        <span class="svg-icon svg-icon-md mr-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" />
                                                    <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> Previous
                                    </button>
                                </div>
                                <div>
                                        <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-submit" type="submit">
                                        Submit
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> 
                                        </button>
                                        <button id="check-password-button" type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" >
                                        Next
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> 
                                        </button>
                                        <button id="check-email-button" type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" >
                                        Next
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> 
                                        </button>
                                        <button style="display:none;" id="next-button" type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">
                                        Next
                                        <span class="svg-icon svg-icon-md ml-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </button>
                                </div>
                            </div>
                            <!--end: Wizard Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Container-->
            </div>
            <!--begin::Content-->
            <!--begin::Aside-->
            <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" style="background-image: url({{asset('carrier/assets/media/svg/illustrations/login-visual-4.svg')}}); background-size: cover; object-fit: cover;">
                <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom">
                    <!--begin::Aside title-->
                    <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">
                        Truck Driver<br />
                        Recruiting,<br />
                        Reimagined.
                    </h3>
                    <!--end::Aside title-->
                </div>
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Login-->


        <!-- Modal -->
        <div class="modal fade" id="subscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Pricing and plans</h5>
                        Select a suitable plan for yourself
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="container-fluid">
                            <div class="container p-5">
                                <!--begin: Wizard-->
                                <div class="wizard wizard-4" id="kt_wizard_v4" data-wizard-state="step-first" data-wizard-clickable="true">
                                    <!--begin: Wizard Nav-->
                                    <div class="wizard-nav" style="display: none;">
                                        <div class="wizard-steps">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-number">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1 Nav-->
                                            <!--begin::Wizard Step 2 Nav-->
                                            <div class="wizard-step" data-wizard-type="step">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-number">
                                                        2
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Nav-->
                                    <!--begin: Wizard Body-->
                                    <div class="card card-custom card-shadowless rounded-top-0">
                                        <div class="card-body p-0">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-12">
                                                    <!--begin: Wizard Form-->
                                                    <form class="form mt-0" id="kt_form">
                                                        <!--begin: Wizard Step 1-->
                                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12 mb-4 p-0">
                                                                    <div class="card card1 h-100 subscription-card">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title mb-3">Starter</h5>
                                                                            <h1 id="price-plan">$30.00 <small class="f-14">/month</small></h1>
                                                                            <p class="mt-3 text-muted">
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                            </p>
                                                                            <hr>
                                                                            <ul class="subs-list-benefits">
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> More than 30 people can use</li>
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Over 600 components</li>
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Upto 20GB storage</li>
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Dedicated customer Support</li>
                                                                            </ul>
                                                                            <div class="d-grid mt-3">
                                                                                <button class="btn btn-primary btn-lg btn-block">Get Started</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 mb-4 p-0">
                                                                    <div class="card card1 h-100 subscription-card bg-primary shadow-plan">
                                                                        <div class="card-body">
                                                                            <div class="row mb-4">
                                                                                <div class="col-md-12">
                                                                                    <span class="recomended-plan">Recomended</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <h5 class="card-title mb-3 text-white">Professional</h5>
                                                                                    <h1 id="price-plan" class="text-white">$50.00 <small class="text-white f-14">/month</small></h1>
                                                                                    <p class="mt-3 text-muted text-white">
                                                                                        Lorem Ipsum is simply dummy text of the printing and
                                                                                    </p>
                                                                                    <hr>
                                                                                </div>
                                                                            </div>
                                                                            <ul class="subs-list-benefits">
                                                                                <li class="text-white"><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> More than 30 people can use</li>
                                                                                <li class="text-white"><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Over 600 components</li>
                                                                                <li class="text-white"><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Upto 20GB storage</li>
                                                                                <li class="text-white"><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Dedicated customer Support</li>
                                                                            </ul>
                                                                            <div class="d-grid mt-3">
                                                                                <button class="btn btn-white text-primary btn-lg btn-block">Get Started</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 mb-4 p-0">
                                                                    <div class="card card1 h-100 subscription-card">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title mb-3">Enterprise</h5>
                                                                            <h1 id="price-plan">$99.00 <small class="f-14">/month</small></h1>
                                                                            <p class="mt-3 text-muted">
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                            </p>
                                                                            <hr>
                                                                            <ul class="subs-list-benefits">
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> More than 30 people can use</li>
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Over 600 components</li>
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Upto 20GB storage</li>
                                                                                <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Dedicated customer Support</li>
                                                                            </ul>
                                                                            <div class="d-grid mt-3">
                                                                                <button class="btn btn-primary btn-lg btn-block">Get Started</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end: Wizard Step 1-->
                                                        <!--begin: Wizard Step 2-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="card bg-light-gray">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="d-flex">
                                                                                        <div class="p-2">
                                                                                            <button class="btn btn-rounded">
                                                                                                <img src="{{asset('carrier/assets/media/custom/paypal.svg')}}"> Paypal
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="p-2">
                                                                                            <button class="btn bg-primary text-white btn-rounded">
                                                                                                <img src="{{asset('carrier/assets/media/custom/credit-card.svg')}}"> Credit Card
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="p-2">
                                                                                            <button class="btn btn-rounded">
                                                                                                <img src="{{asset('carrier/assets/media/custom/google-pay.svg')}}"> Google Pay
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-4">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="lable-control">Card Number</label>
                                                                                        <input type="text" id="bg-white" class="form-control form-control-lg form-control-solid">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="lable-control">Card Holder Name</label>
                                                                                        <input type="text" id="bg-white" class="form-control form-control-lg form-control-solid">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="lable-control">Expiry Date</label>
                                                                                        <input type="date" id="bg-white" class="form-control form-control-lg form-control-solid">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="lable-control">CVC Number</label>
                                                                                        <input type="number" id="bg-white" class="form-control form-control-lg form-control-solid">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 text-bold">
                                                                                    <label class="checkbox checkbox-lg mb-3">
                                                                                        <input type="checkbox" name="Checkboxes3_1" />
                                                                                        <span class="mr-3"></span>
                                                                                        <b>Enable Auto renew</b>
                                                                                    </label>
                                                                                    <p>If this option is selected, your subscription will automatically renew after you have Expired the current plan.</p>
                                                                                </div>
                                                                                <div class="col-md-12 text-bold">
                                                                                    <label class="checkbox checkbox-lg mb-3">
                                                                                        <input type="checkbox" name="Checkboxes3_1" />
                                                                                        <span class="mr-3"></span>
                                                                                        <b>Save my payment details for the future purchase</b>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h4>Selected plan</h4>
                                                                        </div>
                                                                        <!-- <div class="ml-auto">
                                                                            <a href="javascript:void(0)">
                                                                                <i class="icon-xl la la-edit text-primary"></i>
                                                                            </a>
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-md-12">
                                                                            <div class="card card1 h-100 subscription-card bg-light-gray">
                                                                                <div class="card-body">
                                                                                    <h5 class="card-title mb-3">Starter</h5>
                                                                                    <h1 id="price-plan">$30.00 <small class="f-14">/month</small></h1>
                                                                                    <p class="mt-3 text-muted">
                                                                                        Lorem Ipsum is simply dummy text of the printing and
                                                                                    </p>
                                                                                    <hr>
                                                                                    <ul class="subs-list-benefits">
                                                                                        <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> More than 30 people can use</li>
                                                                                        <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Over 600 components</li>
                                                                                        <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Upto 20GB storage</li>
                                                                                        <li><img src="{{asset('carrier/assets/media/custom/check-subs.svg')}}"> Dedicated customer Support</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-md-12">
                                                                            <button class="btn btn-primary btn-block btn-lg mb-4">
                                                                                Confirm & pay
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end: Wizard Step 2-->
                                                        <!--begin: Wizard Actions-->
                                                        <div class="d-flex justify-content-between border-top mt-2 pt-4">
                                                            <div class="mr-2">
                                                                <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                                    Previous
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <a href="{{url('/dashboard')}}" type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                                    Submit
                                                                </a>
                                                                <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                                    Next
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end: Wizard Actions-->
                                                    </form>
                                                    <!--end: Wizard Form-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Bpdy-->
                                </div>
                                <!--end: Wizard-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection