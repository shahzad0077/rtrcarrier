@extends('admin.layouts.main-layout')
@section('title','All Crrier Alerts')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            @include('alerts.index')

            <div class="row">
                <div class="col-md-8">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    All Crrier Alerts
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-head-custom table-checkable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Alert</th>
                                        <th>Carrier Company Name</th>
                                        <th>Read Status of Carrier</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $r)
                                    <tr>
                                        <td>
                                            {{ $r->subject }}
                                        </td>
                                        <td>
                                           {!! $r->alert !!}
                                        </td>
                                        <td>
                                            {{ DB::table('companies')->where('id' , $r->company_id)->first()->company_name }}
                                        </td>
                                        <td>
                                            @if($r->status == 1)
                                            <span class="label label-lg font-weight-bold label-light-success label-inline">Read</span>
                                            @else
                                            <span class="label label-lg font-weight-bold label-light-danger label-inline">Not Read Yet</span>
                                            @endif

                                        </td>
                                        <td nowrap="">
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
                                                    Are you Sure You want to Delete This Alert
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                    <a href="{{ url('admin/carrier/deletealert') }}/{{ $r->id }}" class="btn btn-danger font-weight-bold">Yes, Delete it</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom mt-5">
                        <div class="card-header flex-wrap py-5">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Send New Alert
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{ url('admin/carrier/createcarrieralerts') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Select Type</label>
                                    <select required onchange="selecttype(this.value)" class="form-control" name="type">
                                        <option value="">Select Type</option>
                                        <option value="all">All Carriers</option>
                                        <option value="selected">Selected Carriers</option>
                                    </select>
                                </div>
                                <script type="text/javascript">
                                    function selecttype(id) {
                                        if(id == 'selected')
                                        {
                                            $('#selectmultiplecarriers').show();
                                        }else{
                                            $('#selectmultiplecarriers').hide();
                                        }
                                    }
                                </script>
                                <div style="display:none;" id="selectmultiplecarriers" class="form-group">
                                    <label for="username">Select Carrier <small class="text-danger">If Select All Carriers then no need to Select Carrier One by One</small></label>
                                    <select class="hirringreqemail form-control select2 form-control-lg form-control-solid" style="width:100%; height: 55px !important; background: #f3f6f9 !important; border: 1px solid #E4E6EF !important;" id="kt_select2_11" multiple name="emails[]">
                                        @foreach(DB::table('companies')->get() as $r)
                                        <option value="{{ $r->id }}">{{ $r->company_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="username">Alert Subject</label>
                                    <input name="name" class="form-control input-lg" type="text" id="username" required="" placeholder="eg. New Update">
                                </div>
                                <div class="form-group">
                                    <label for="username">Alert</label>
                                    <textarea required name="answer" class="summernote"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection