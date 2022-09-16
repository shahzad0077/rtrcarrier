@extends('admin.layouts.main-layout')
@section('title','All Categories')
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
                            All Categories
                            <div class="text-muted pt-2 font-size-sm">Manage all Help Categories</div>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="javascript::void(0)" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon--></span> Add New Category
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Articles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td>
                                    {{ $r->name }}
                                </td>
                                <td>
                                    {{ $r->status }}
                                </td>
                                <td>{{ DB::table('help_articles')->where('category_id' , $r->id)->count() }}</td>
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td>
                                    <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                </td>
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td>
                                    <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                </td>
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="max-lines" href="{{url('admin/job/detail')}}" style="width:100px;">
                                        Fuel Transport Driver – Local, Home Daily
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('admin/carrier/detail')}}">
                                        Shahzad Mughal
                                    </a>
                                </td>
                                <td>Sea Freight</td>
                                <td>Company Solo</td>
                                
                                <td>
                                    <a href="{{url('admin/map/detail')}}">M129-90</a>
                                </td>
                                <td>
                                    operating are
                                </td>
                                
                                <td>
                                    <span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
                                </td>
                                <td nowrap="">
                                    <div class="dropdown dropdown-inline">
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown"> <i class="la la-cog"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="nav nav-hoverable flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Disable</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Featured</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Activate</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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


@endsection