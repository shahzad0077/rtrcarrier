@extends('layouts.main-layout')
@section('title','All Team members')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">All Team members</a>
</li>
@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Staff users
                            <div class="text-muted pt-2 font-size-sm">Manage your users/staff memebers</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="javascript:void(0)" class="btn btn-primary font-weight-bolder me-4" data-toggle="modal" data-target="#addnewstaffrole">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Staff Role
                        </a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a href="javascript:void(0)" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Member
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.index')
                    <table id="example" class="table table-separate table-bordered" style="width:100%">
                        <thead>
                                <tr>
                                    <th class=" ml-4">Username</th>
                                    <th>Phone Number</th>
                                    <th>User role</th>
                                    <th>Last Activity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $r)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center ml-4">
                                            <div class="symbol symbol-50 symbol-light-dark">
                                                <div class="symbol-label font-size-h5">{{ substr($r->user_name, 0, 1); }}</div>
                                            </div>
                                            <div class="ml-3">
                                                <span class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{ $r->user_name }}</span>
                                                <a href="#" class="text-muted text-hover-primary">{{ $r->user_email }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td>{{ $r->user_phonenumber }}</td>
                                    <td>{{ $r->role_name }} <a href="{{ url('edit-staff-permission') }}/{{ $r->role_id }}" class="btn btn-primary btn-sm flaticon-edit"></a> </td>
                                    <td>{{ Cmf::date_format($r->created_at) }}</td>
                                    <td>
                                        <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                    </td>
                                    <td>
                                        <div class="dropdown dropdown-inline">
                                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="nav nav-hoverable flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Disable</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Activate</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
    <!-- Modal-->
<div class="modal fade" id="addnewstaffrole" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add New Staff Role <br>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('addnewstaffpermission') }}">
                    @csrf
                <input type="hidden" value="{{ Cmf::getusercompany()->id }}" name="company_id">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Role Name</label>
                            <input required type="text" class="form-control input-lg" name="name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Description</label>
                            <textarea class="form-control"name="description"></textarea>
                        </div>
                    </div>

                    <div style="height: 500px;overflow: auto;" class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Module Name</th>
                                    <th>Assign Permission</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cmf::carriermodules() as $r)
                                <tr>
                                    <td>{{ $r['name'] }}</td>
                                    <td><input value="{{ $r['id'] }}" type="checkbox" name="roles[]"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Invite Team Member <br>
                    <small class="-mt-4">invite a Team Member to manage your jobs</small>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('addnewcarrierstaff') }}">
                    @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Select Role</label>
                            <select required name="role_id" class="form-control selectpicker">
                                <option value="">Select Role</option>
                                @foreach(DB::table('staff_permissions')->where('company_id' , Cmf::getusercompany()->id)->get() as $r)
                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Name</label>
                            <input required type="text" class="form-control input-lg" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Email</label>
                            <input required onkeyup="checkemail()" type="text" class="form-control input-lg" id="work_email" name="email">
                            <span style="color:red;" id="email-error"  role="alert"></span>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Phone number</label>
                            <input required type="text" class="form-control input-lg" name="phone_number">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Note</label>
                            <input type="text" class="form-control input-lg" name="note">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button id="submitbutton" type="submit" class="btn btn-primary btn-block">
                            Send Invitation
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection