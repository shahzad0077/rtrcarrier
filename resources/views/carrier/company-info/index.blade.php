@extends('layouts.main-layout')
@section('title','Company Info')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="col-md-6">
                        <h3 class="card-label">
                            {{ $modulename }}
                        </h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <span class="btn btn-primary mr-2" data-toggle="modal" data-target="#update">
                            Update {{ $modulename }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    @if($data)
                        {!! $data !!}
                    @else
                    <p class="text-center">No Records</p>
                    @endif
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<div class="modal fade" id="update" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="exampleModalLabel">Update {{ $modulename }}</h5>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
                <form method="POST" action="{{ url('updatecompanyinfo') }}">
                    @csrf
                    <input type="hidden" name="columnname" value="{{ $columname }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">{{ $modulename }}</label>
                                <textarea name="additional_notes_about_expereince" class="summernote">{{ $data }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" id="save_templatebutton" class="btn btn-primary font-weight-bold">Save</button>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection