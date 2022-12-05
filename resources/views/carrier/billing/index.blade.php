@extends('layouts.main-layout')
@section('title','Billing & Invoices')
@section('pagename')
<li class="breadcrumb-item">
    <a href="javascript:void(0)" class="text-muted">Billing & Invoices</a>
</li>
@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Card-->
            @include('alerts.index')
            <div class="card card-custom mt-5">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Billing & Invoices
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-separate table-head-custom table-checkable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Job</th>
                                <th>Subscription Plan</th>
                                <th>Ammount Paid</th>
                                <th>Payement Method</th>
                                <th>Date & Time</th>
                                <th>Download Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            @php
                                $job = DB::table('jobs')->where('id' , $r->job_id)->first();
                            @endphp
                                @if($job->company_id == Cmf::getusercompany()->id)
                                <tr>
                                    <td>RTR00{{ $r->id }}</td>
                                    <td> <a class="btn btn-primary btn-sm" target="_blank" href="{{ url('job-detail') }}/{{ DB::table('jobs')->where('id' , $r->job_id)->first()->url }}"> <i class="fa fa-eye"></i> View Job</a></td>
                                    <td>{{ DB::table('subscription_plans')->where('id' , $r->plan_id)->first()->name  }}</td>
                                    <td>${{ $r->amount }}</td>
                                    <td style="text-transform: capitalize;">{{ $r->payment_channel }}</td>
                                    <td>{{ $r->created_at }}</td>
                                    <td><a class="btn btn-primary btn-sm" href="{{ url('downloadinvoice') }}/{{ $r->id }}"><i class="fa fa-download"></i> Download Invoice</a></td>
                                </tr>
                                @endif
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