@extends('admin.layouts.main-layout')
@section('title','Add Job')

@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Add New Job</a>
</li>
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-danger">Please Asign This Job To Any Carrier First
</a>
</li>
@endsection

@section('content')
    
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-custom card-stretch">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">
                                                Add New Job
                                                <div class="text-danger pt-2 font-size-sm">Please Asign This Job To Any Carrier First</div>
                                            </h3>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ url('admin/jobs/assigncarrier') }}">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Select Carrier</label>
                                                    <select required class="form-control" name="company_id">
                                                        <option value="">Select Carrier</option>
                                                        @foreach(DB::table('users')->where('type' , 'carrier')->orderby('created_at', 'desc')->get() as $r)
                                                        <option value="{{ DB::table('companies')->where('user_id' , $r->id)->get()->first()->id }}">{{ $r->name }} | {{ DB::table('companies')->where('user_id' , $r->id)->get()->first()->company_name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12 text-right">
                                                    <button class="btn btn-primary">Asign Carrier</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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