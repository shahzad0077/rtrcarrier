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
                    <h3 class="card-label">
                        {{ $data->name }}
                    </h3>
                </div>
                <div class="card-body">
                    @if($data)
                        {!! $data->content !!}
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
@endsection