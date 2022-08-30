@extends('admin.layouts.main-layout')
@section('title','Requests')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            Carrier Requests
                            <span class="text-muted pt-2 font-size-sm d-block">Find all carrier requests here</span>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-md-12">
                            <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                                <thead>
                                        <tr>
                                            <th>Carrier Name/Email</th>
                                            <th>DOT Number</th>
                                            <th>Phone Number</th>
                                            <th>Company title</th>
                                            <th>Subscription</th>
                                            <th>Dated</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 flex-shrink-0">
                                                        <img src="{{asset('admin/assets/media/users/100_13.jpg')}}" alt="photo">
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 flex-shrink-0">
                                                        <img src="{{asset('admin/assets/media/users/100_13.jpg')}}" alt="photo">
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 flex-shrink-0">
                                                        <img src="{{asset('admin/assets/media/users/100_13.jpg')}}" alt="photo">
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">H</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 flex-shrink-0">
                                                        <img src="{{asset('admin/assets/media/users/100_13.jpg')}}" alt="photo">
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">Humbert Bresnen</span>
                                                        <a href="#" class="text-muted text-hover-primary">example@gmail.com</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-12445</td>
                                            <td>+923407712693</td>
                                            <td>Hayes Boule</td>
                                            
                                            <td>Free</td>
                                            <td>12 Jun 2022 <br> <small>12:00Pm</small></td>
                                            <td nowrap="">
                                                <button class="btn btn-light-primary">
                                                    Approve
                                                </button>
                                                <button class="btn btn-light-danger">
                                                    Decline
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add New Carrier <br>
                    <small class="-mt-4">Fill all details to invite the carrier</small>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Carrier Fullname</label>
                            <input type="text" class="form-control input-lg" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Company Name</label>
                            <input type="text" class="form-control input-lg" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Company Name</label>
                            <input type="text" class="form-control input-lg" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Carrier DOT Number</label>
                            <input type="email" class="form-control input-lg" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">How many trucks are in fleet?</label>
                            <input type="number" class="form-control input-lg" name="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Work Email address</label>
                            <input type="text" class="form-control input-lg" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Phone number</label>
                            <input type="text" class="form-control input-lg" name="phone-number">
                        </div>
                    </div>

                    <div class="col-md-12 mt-3 mb-3">
                        <h4 class="text-primary">Account Credentials</h4>
                    </div>                    

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Email address</label>
                            <input type="email" class="form-control input-lg" name="">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Password</label>
                            <input type="text" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Confirm password</label>
                            <input type="text" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" checked="checked" name="Checkboxes3_1"/>
                            <span></span>
                            &nbsp;&nbsp; Send Password Instructions
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection