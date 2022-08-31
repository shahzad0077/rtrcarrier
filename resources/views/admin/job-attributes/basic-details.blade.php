@extends('admin.layouts.main-layout')
@section('title','Basic Details Attributes')
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
                            Basic Details Attributes
                            <div class="text-muted pt-2 font-size-sm">Manage attributes</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="#" data-toggle="modal" data-target="#addAttributes" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Attributes
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">

                    <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Attribute</th>
                                <th>Type</th>
                                <th>Options</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    How often will the driver get home?
                                </td>
                                <td>
                                    Option Field
                                </td>
                                <td>
                                    Daily, 
                                    Once Every 1-2 Days, 
                                    Once every 2-3 Days, 
                                    Weekly, 
                                    2-3 weeks, 
                                    21+
                                </td>
                                <td nowrap="">
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Driver Type
                                </td>
                                <td>
                                    Option Field
                                </td>
                                <td>
                                    Company Solo,
                                    Team,
                                    Team LP,
                                    Lease Purchase,
                                    Owner Operator,
                                    Trainer, Mentor
                                </td>
                                <td nowrap="">
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Home Time
                                </td>
                                <td>
                                    Option Field
                                </td>
                                <td>
                                    Sunday, 
                                    Monday, 
                                    Tuesday, 
                                    Wednesday, 
                                    Thursday, 
                                    Friday, 
                                    Saturday
                                </td>
                                <td nowrap="">
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

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
<div class="modal fade" id="addAttributes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Attributes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Field title</label>
                            <input type="text" class="form-control font-size-lg " placeholder="eg. Home Time" name="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="lable-control">Field Type</label>
                            <select class="form-control font-size-lg " id="exampleSelects">
                                <option>Plane Text</option>
                                <option>Option Fields</option>
                                <option>Text Editor (For more than 300 words)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3 mt-3">
                        <h5>If they choose "Option Field"</h5>
                    </div>


                </div>

                <div class="row">
                    
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="lable-control">Option Title</label>
                            <input type="text" class="form-control font-size-lg " name="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-block mt-8">-</button>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="lable-control">Option Title</label>
                            <input type="text" class="form-control font-size-lg " name="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block mt-8">+</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection