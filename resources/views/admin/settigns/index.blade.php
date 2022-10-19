@extends('admin.layouts.main-layout')
@section('title','Website Settings')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            
            <div class="row">
        <div class="col-lg-8 col-md-8 offset-md-2 offset-lg-2">
            @include('alerts.index')
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="fw-600 mb-0">Stripe Keys</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/settings/settingsupdate') }}" enctype='multipart/form-data' method="POST">
                       @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Stripe Published Key</label>
                            <div class="col-md-8">
                                <input type="text" name="stripe_published" class="form-control" placeholder="Website Name" value="{{Cmf::getsettings('stripe_published')}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">Stripe Secret Key</label>
                            <div class="col-md-8">
                                <input type="text" name="stripe_secret" class="form-control"  value="{{Cmf::getsettings('stripe_secret')}}" />
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection