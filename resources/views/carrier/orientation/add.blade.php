@extends('layouts.main-layout')
@section('title','Add Orientation Template')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Jobs</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('orientation-templates') }}" class="text-muted">Orientation Templates</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add New Orientation Template</a>
</li>
@endsection


@section('content')

    <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <div class="row mt-5">
                <div class="col-md-12">
					<div class="card card-custom card-stretch">
					    <div class="card-header">
					        <div class="card-title">
					            <h3 class="card-label font-weight-bolder text-dark">Add New Orientation Template</h3>
					        </div>
					    </div>
					    <div class="card-body">
					            <!--begin::Body-->
					            <form method="POST" action="{{ url('addneworientationtemplate') }}">
					            	@csrf
					                <div class="row">
					                	<div class="col-md-12">
					                        <div class="form-group">
					                            <label class="lable-control">Template Name</label>
					                            <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="name">
					                        </div>
					                    </div>
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="lable-control">Location</label>
					                            <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="location">
					                        </div>
					                    </div>
					                    <div class="col-md-6">
					                        <div class="form-group">
					                            <label class="lable-control">Orientation Days</label>
					                            <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="days">
					                        </div>
					                    </div>
					                    <div class="col-md-6">
					                        <div class="form-group">
					                            <label class="lable-control">Orientation Time</label>
					                            <input required type="text" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" name="time">
					                        </div>
					                    </div>

					                    
					                    <div class="col-md-12">
					                        <div class="d-flex">
					                            <div class="ml-auto">
					                                <button type="submit" class="btn btn-lg btn-primary">Save as template</button>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </form>
					    </div>
					</div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection