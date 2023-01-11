<div class="col-md-12">
    <div class="card job-card">
        <div class="card-body p-5">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="d-flex flex-row">
                        <div>
                            <h4><a target="_blank" class="text-black" href="{{url('job-detail')}}/{{ $job->url }}">{{ $job->job_tittle }}</a></h4>
                        </div>
                        <div>
                            @if($job->job_status_main == 'pause')
                            <span class="label ml-5 label-lg label-light-danger label-inline">{{ $job->job_status_main }}</span>
                            @else
                            <span class="job-type ml-5">{{ $job->job_status }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <div data-toggle="modal" data-target="#sharejobmodal{{$job->job_id}}" class="btn btn-primary me-6">Share Job</div>
                    <div onclick="showdetails({{ $job->job_id }})" id="jobdetailbutton{{$job->job_id}}" class="btn btn-primary me-6">See Details</div>
                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-hover-light-gray btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ki ki-bold-more-hor"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right job-dropdown">
                            <a class="dropdown-item" href="{{ url('jobedit') }}/{{ $job->job_id }}/basic"> <img src="{{asset('public/carrier/assets/media/custom/edit.svg')}}" />Edit </a>
                            <a onclick="deletejobbycarrier({{$job->job_id}})" class="dropdown-item" href="javascript:void(0)"> <img src="{{asset('public/carrier/assets/media/custom/delete.svg')}}" />Delete </a>
                            
                            @if($job->job_status == 'approved')
                            <a class="dropdown-item" href=""> <img src="{{asset('public/carrier/assets/media/custom/completed.svg')}}" />Completed </a>
                            <a class="dropdown-item" href="#"> <img src="{{asset('public/carrier/assets/media/custom/pause.svg')}}" />Pause </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-row mt-3">
                        <div class="job-detail">
                            <p>Average Weekly Pay</p>
                            <b>{{ $job->avgerage_weekly_pay }} a week</b>
                        </div>
                        <div class="job-detail">
                            <p>Freight type</p>
                            <b>{{ $job->freight_type }}</b>
                        </div>
                        <div class="job-detail">
                            <p>Driver type</p>
                            <b>{{ $job->driver_type }}</b>
                        </div>
                        <div class="job-detail">
                            <p>Compensation</p>
                            <b>{{ $job->compensation }}</b>
                        </div>
                        <div class="job-detail">
                            <p>Home time</p>
                            <b>{{ $job->home_time }}</b>
                        </div>
                        <div class="job-detail">
                            <p>Experience</p>
                            <b>{{ $job->hirring->minimum_expereince }}</b>
                        </div>
                        <div class="job-detail">
                            <p>Open Seats</p>
                            <b>200</b>
                        </div>
                        <div class="job-detail">
                            <p>Total Applications Recieved</p>
                            <b>300</b>
                        </div>
                        <div class="job-detail">
                            <p>Last App Received</p>
                            <b>12 Jun 2022 , 12:00PM</b>
                        </div>
                    </div>
                </div>
                
            </div>
            @include('carrier.jobs.jobdetailsection')
        </div>
    </div>
</div>