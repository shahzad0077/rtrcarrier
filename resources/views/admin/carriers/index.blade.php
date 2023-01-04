@extends('admin.layouts.main-layout')
@section('title','Carriers')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            @include('alerts.index')
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            All Carriers
                            <span class="text-muted pt-2 font-size-sm d-block">Find all carriers in the list below; use the filters to find what you want.</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="javascript:void(0)" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                        <path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000"
                                            opacity="0.3"
                                        ></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            Add New Carrier
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <form method="GET" action="{{ url('admin/carriers/search') }}">
                    <div class="mb-7">
                        <div class="row">
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="input-icon">
                                    <input @if(isset($_GET['keyword'])) value="{{ $_GET['keyword'] }}" @endif type="text" name="keyword" class="form-control input-lg" placeholder="Search with name..." id="kt_datatable_search_query">
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="input-icon">
                                    <input name="dotnumber" @if(isset($_GET['dotnumber'])) value="{{ $_GET['dotnumber'] }}" @endif type="text" class="form-control input-lg" placeholder="Search with DOT..." id="kt_datatable_search_query">
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>
                            <div class="col-md-3 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <div class="dropdown bootstrap-select form-control">
                                        <select class="form-control" id="kt_datatable_search_status" tabindex="null">
                                            <option value="">All</option>
                                            <option value="1">Active</option>
                                            <option value="2">Disabled</option>
                                            <option>Pending Invitation</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 mt-5 mt-lg-0">
                                <button style="height: 52px;padding-top: 15px;" type="submit" class="btn btn-light-primary px-6 font-weight-bold">
                                    Search
                                </button>
                            </div>

                        </div>
                    </div>
                    </form>
                    <!--end: Search Form-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">
                                <!--begin: Datatable-->
                                <table class="table table-separate table-bordered table-head-custom table-checkable" id="kt_datatable">
                                    <thead>
                                        <tr>
                                            <th>Carrier Name/Email</th>
                                            <th>DOT Number</th>
                                            <th>Phone Number</th>
                                            <th>Company title</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $r)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50 symbol-light-dark">
                                                        <div class="symbol-label font-size-h5">{{ substr($r->user_name, 0, 1); }}</div>
                                                    </div>
                                                    <div class="ml-3">
                                                        <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{ $r->user_name }}</span>
                                                        <a href="#" class="text-muted text-hover-primary">{{ $r->user_email }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>DOT-{{ $r->dot_number }}</td>
                                            <td>{{ $r->contact_number }}</td>
                                            <td>{{ $r->company_name }}</td>
                                            <td>
                                                @if($r->approved_status == 1)
                                                <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                                @endif
                                                @if($r->approved_status == '')
                                                <span class="label label-lg font-weight-bold label-light-warning label-inline">Pending Invitation</span>
                                                @endif
                                                @if($r->approved_status == 2)
                                                <span class="label label-lg font-weight-bold label-light-danger label-inline">Disabled</span>
                                                @endif
                                            </td>
                                            <td nowrap="">
                                                <a href="{{ url('admin/carriers/detail') }}/{{ $r->id }}/detail" class="btn btn-primary btn-sm btn-clean" title="Edit details"> <i class="la la-eye"></i> View Details</a>
                                                <!-- <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a> -->
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
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
    <div class="modal-dialog modal-lg" role="document">
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
            <form enctype="multipart/form-data" id="addnewcarrier" method="POST" action="{{ route('admin.addnewcarrier') }}">
                    @csrf
            <div class="modal-body">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Company Logo</label>
                            <input required type="file" class="form-control input-lg" name="company_logo">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Carrier Fullname</label>
                            <input required type="text" class="form-control input-lg" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Company Name</label>
                            <input required onkeyup="checkcompanyname(this.value)" type="text" class="form-control input-lg" name="company_name">
                            <span id="company_name-error" class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Company Email</label>
                            <input required type="text" class="form-control input-lg" name="company_email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Carrier DOT Number</label>
                            <input required onkeyup="checkdotnumber(this.value)" type="number" class="form-control input-lg" name="dot_number">
                            <span id="dot_number-error" class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">How many trucks are in fleet?</label>
                            <input required type="number" class="form-control input-lg" name="trucks_in_fleet">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Phone number</label>
                            <input required type="text" class="form-control input-lg" name="phone_number">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">How many drivers looking to hire within the next 90 days?</label>
                            <input required type="text" class="form-control input-lg" name="how_many_drivers_in_next">
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 mb-3">
                        <h4 class="text-primary">Account Credentials</h4>
                    </div>                    

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Email address</label>
                            <input required onkeyup="checkemail(this.value)" type="email" class="form-control input-lg" name="email">
                            <span id="email-error" class="invalid-feedback" role="alert"></span>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Password</label>
                            <input required type="text" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Confirm password</label>
                            <input required type="text" class="form-control input-lg" name="conferm_password">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="checkbox checkbox-lg">
                            <input type="checkbox" checked="checked" name="password_instructions"/>
                            <span></span>
                            &nbsp;&nbsp; Send Password Instructions
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection