@extends('admin.layouts.main-layout')
@section('title','All Education Articles')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            All Education Articles
                            <div class="text-muted pt-2 font-size-sm">Manage All Education Articles</div>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Article Tittle</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td>
                                    {{ $r->tittle }}
                                </td>
                                <td>
                                    {{ DB::table('education_categories')->where('id' , $r->category_id)->first()->name }}
                                </td>
                                <td>
                                    {{ $r->status }}
                                </td>
                                <td nowrap="">
                                    <a href="{{ url('admin/education/editpost') }}/{{ $r->id }}" class="btn btn-sm btn-clean btn-icon" title="Edit details"> <i class="la la-edit"></i> </a>
                                    <a data-toggle="modal" data-target="#deleteModal{{ $r->id }}" href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <i class="la la-trash"></i> </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you Sure You want to delete this. 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                            <a href="{{ url('admin/education/deleteeducationarticle') }}/{{ $r->id }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection