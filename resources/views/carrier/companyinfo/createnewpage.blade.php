@extends('layouts.main-layout')
@section('title','Create New Page')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Create New Page</a>
</li>
@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid mt-15">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Create New Page
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('addcompanypage') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="lable-control">Enter Name</label>
                                        <input name="name" required type="text" id="emailfield" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="lable-control">Page Content</label>
                                        <textarea name="additional_notes_about_expereince" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection