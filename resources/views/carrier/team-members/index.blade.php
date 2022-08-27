@extends('layouts.main-layout')
@section('title','All Team members')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
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
                        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
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
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Phone Number</th>
                                <th>company title</th>
                                <th>Last Activity</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>hboule0@hp.com</td>
                                <td>Hayes Boule</td>
                                <td>example@gmail.com</td>
                                <td>5</td>
                                <td nowrap></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>hbresnen1@theguardian.com</td>
                                <td>Humbert Bresnen</td>
                                <td>example@gmail.com</td>
                                <td>2</td>
                                <td nowrap></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>jlabro2@kickstarter.com</td>
                                <td>Jareb Labro</td>
                                <td>example@gmail.com</td>
                                <td>6</td>
                                <td nowrap></td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
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
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Invite user <br>
                    <small class="-mt-4">invite a user to manage your jobs</small>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Company Title</label>
                            <input type="text" class="form-control input-lg" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Select Role</label>
                            <select class="form-control">
                                <option>Admin</option>
                                <option>Staff</option>
                                <option>Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Name</label>
                            <input type="text" class="form-control input-lg" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Email</label>
                            <input type="text" class="form-control input-lg" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="lable-control">Phone number</label>
                            <input type="text" class="form-control input-lg" name="phone-number">
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
                        <div class="form-group">
                            <label class="lable-control">Note</label>
                            <input type="text" class="form-control input-lg" name="note">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-block">
                            Send Invitation
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection