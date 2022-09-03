@extends('layouts.main-layout')
@section('title','Edit Staff Role')
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
                            Edit Staff Role
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('updatestaffpermission') }}">
                        @csrf
                    <input type="hidden" value="{{ $data->id }}" name="id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Role Name</label>
                                <input value="{{ $data->name }}" required type="text" class="form-control input-lg" name="name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="lable-control">Description</label>
                                <textarea class="form-control"name="description">{{ $data->description }}</textarea>
                            </div>
                        </div>

                        <div style="height: 500px;overflow: auto;" class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Module Name</th>
                                        <th>Assign Permission</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Cmf::carriermodules() as $r)
                                    <tr>
                                        <td>{{ $r['name'] }}</td>
                                        <td><input @if(DB::table('set_roles')->where('staff_permissions' , $data->id)->where('module_id' , $r['id'])->count() > 0) checked @endif value="{{ $r['id'] }}" type="checkbox" name="roles[]"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection