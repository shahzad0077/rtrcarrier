@php
    $hir = DB::table('linktemplatewithjobs')->where('job_id' , $job->id);
    if($hir->count() > 0)
    {
        $template = DB::table('hiring_templates')->where('id' , $hir->first()->template_id)->first();
    }
@endphp
<div class="accordion accordion-solid accordion-toggle-plus mt-5" id="accordionExample6">
    <div class="card">
        <div class="card-header" id="headingOne6">
            <div class="card-title" data-toggle="collapse" data-target="#collapseOne6">
                <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/basic-details.svg')}}"> Basic Details
            </div>
        </div>
        <div id="collapseOne6" class="collapse show" data-parent="#accordionExample6">
            <div class="card-body p-10">
                <div class="row">
                    <div class="col-md-12">
                        <b>Title</b>
                        <p class="mt-2">{{ $job->job_tittle }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>How often will the driver get home?</b>
                        <p class="mt-2">{{ $job->how_often_will_driver_get_home }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Custom Home Time</b>
                        <p class="mt-2">{{ $job->custom_home_time }}</p>
                    </div>

                    
                    <div class="col-md-6 mb-3">
                        <b>Driver Type</b>
                        <p class="mt-2">{{ $job->driver_type }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Home Time</b>
                        <p class="mt-2">{{ $job->home_time }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Freight Type</b>
                        <p class="mt-2">{{ $job->freight_type }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Dedicated Account</b>
                        <p class="mt-2">{{ $job->dedicated_account }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Avg Weekly Mile</b>
                        <p class="mt-2">{{ $job->avg_weekly_mile }}</p>
                    </div>

                    <div class="col-md-12">
                        <h4 class="mt-3 mb-3 text-primary">
                            Advance Details
                        </h4>
                    </div>

                    <div class="col-md-12 mb-3">
                        <b>What are the primary running lanes for this position?</b>
                        <p class="mt-2">
                            {!! $job->primary_running_lanes  !!}
                        </p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Avg Length of haul (Miles)</b>
                        <p class="mt-2">{{ $job->avg_length_of_haul }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Type of Fuel Card</b>
                        <p class="mt-2">{{ $job->type_of_fuel_card }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Tolls</b>
                        <p class="mt-2">{{ $job->tolls }}</p>
                    </div>


                    <div class="col-md-6 mb-3">
                        <b>24 hour Dispatch</b>
                        <p class="mt-2">{{ $job->hour_dispatch }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>EZ Pass</b>
                        <p class="mt-2">{{ $job->ez_Pass }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Pre-Pass</b>
                        <p class="mt-2">{{ $job->pre_pass }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>Non-Forced Dispatch</b>
                        <p class="mt-2">{{ $job->non_forced_dispatch }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6">
                <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/hiring-req.svg')}}"> Hiring Req.
            </div>
        </div>
        <div id="collapseTwo6" class="collapse" data-parent="#accordionExample6">
            <div class="card-body p-10">
                <div class="row">
                    @if($hir->count() > 0)
                    @if($template->minimum_age != 'Other')
                    <div class="col-md-6 mb-3">
                        <b>Minimum Age</b>
                        <p class="mt-2">{{ $template->minimum_age }}</p>
                    </div>
                    @endif

                    @if($template->minimum_age == 'Other')
                    <div class="col-md-6 mb-3">
                        <b>Minimum Age</b>
                        <p class="mt-2">{{ $template->minimum_age_field }}</p>
                    </div>
                    @endif
                    <div class="col-md-6 mb-3">
                        <b>Minimum Expereince</b>
                        <p class="mt-2">{{ $template->minimum_expereince }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Additional Notes About Expereince</b>
                        <p class="mt-2">{!! $template->additional_notes_about_expereince !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>No More Than About Expereince</b>
                        <p class="mt-2">{{ $template->no_more_than }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Moving voilations</b>
                        <p class="mt-2">{{ $template->moving_violations }} Voilations</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Additional Notes About Moving Voilations</b>
                        <p class="mt-2">{!! $template->additionl_notes_about_moving_voliations !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>No More Than Major Voilations</b>
                        <p class="mt-2">{{ $template->no_more_than_major_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Major Moving Voilation</b>
                        <p class="mt-2">{{ $template->major_moving_voilations }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Additional Notes About Moving Major Voilation</b>
                        <p class="mt-2">{!! $template->additionl_notes_about_moving_major_voliations !!}</p>
                    </div>
                    @if($template->license_suspensions == 'No')
                    <div class="col-md-6 mb-3">
                        <b>License Suspensions</b>
                        <p class="mt-2">{{ $template->license_suspensions }}</p>
                    </div>
                    @else
                    <div class="col-md-12 mb-3">
                        <b>License Suspensions</b>
                        <p class="mt-2">{!! $template->license_suspensions_field !!}</p>
                    </div>
                    @endif
                    <div class="col-md-6 mb-3">
                        <b>Dot More Than</b>
                        <p class="mt-2">{{ $template->dot_no_more_than }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Dot Moving Voilations</b>
                        <p class="mt-2">{{ $template->dot_moving_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Preventable Accedents</b>
                        <p class="mt-2">{{ $template->preventable_accidents_withn_the_last }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Reasons of Suspensions</b>
                        <p class="mt-2">{!! $template->reason_of_suspensions !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>No More Than Incidents</b>
                        <p class="mt-2">{{ $template->no_more_than_incidents }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Moving Voilations Incidents</b>
                        <p class="mt-2">{{ $template->moving_voilations_incidents }}</p>
                    </div><div class="col-md-6 mb-3">
                        <b>Ticket Incedent</b>
                        <p class="mt-2">{{ $template->ticket_incedent }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>specify in a free form fill</b>
                        <p class="mt-2">{!! $template->specify_in_a_free_form_fill !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>maximum jobs no more than</b>
                        <p class="mt-2">{{ $template->maximum_jobs_no_more_than }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Maximum jobs moving voilations</b>
                        <p class="mt-2">{{ $template->maximum_jobs_moving_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Unemployment</b>
                        <p class="mt-2">{{ $template->unemployment }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Maximum jobs additional infomation</b>
                        <p class="mt-2">{!! $template->maximum_jobs_additional_infomation !!}</p>
                    </div>

                    <div class="col-md-12 mb-3">
                        <b>Felony Convictions</b>
                        <p class="mt-2">{!! $template->felony_convictions !!}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Misdemeanors</b>
                        <p class="mt-2">{!! $template->misdemeanors !!}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Drug Duis</b>
                        <p class="mt-2">{!! $template->drug_duis !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Type of Drug Test</b>
                        <p class="mt-2">{{ $template->type_of_drug_test }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Accepting Sap Drivers</b>
                        <p class="mt-2">{{ $template->accepting_sap_drivers }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Additional Information</b>
                        <p class="mt-2">{!! $template->additional_information !!}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <b>Physical</b>
                        <p class="mt-2">{!! $template->physical !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Accomodate adn automatic Restriction</b>
                        <p class="mt-2">{{ $template->accomodate_an_automatic_restriction }}</p>
                    </div>
                    @if($template->camera_installed == 'No')
                    <div class="col-md-6 mb-3">
                        <b>Camera Installed</b>
                        <p class="mt-2">{{ $template->camera_installed }}</p>
                    </div>
                    @else
                    <div class="col-md-6 mb-3">
                        <b>Camera Installed</b>
                        <p class="mt-2">{{ $template->camera_installed }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Type</b>
                        <p class="mt-2">{{ $template->camera_type }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Are</b>
                        <p class="mt-2">{{ $template->camera_are }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Facing</b>
                        <p class="mt-2">{{ $template->camera_facing }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Camera Recording</b>
                        <p class="mt-2">{{ $template->camera_recording }}</p>
                    </div>
                    @endif
                    @endif             
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6">
                <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/routing-trans.svg')}}"> Routing & trans.
            </div>
        </div>
        <div id="collapseThree6" class="collapse" data-parent="#accordionExample6">
            <div class="card-body p-10">
                <div class="col-md-12">
                    <h4 class="mt-3 mb-3 text-primary">
                        Emails
                    </h4>
                </div>

                <div class="col-md-12 mb-3">
                    <b>Email you would like to send applications from this job post to</b>
                    <p class="mt-2">
                        @foreach(explode(',' , $job->emails_send) as $e) 
                            {{ $e }}<br>
                        @endforeach 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="card">
        <div class="card-header" id="headingFour6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour6">
                <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/preview.svg')}}"> Subscriptions
            </div>
        </div>
        <div id="collapseFour6" class="collapse" data-parent="#accordionExample6">
            <div class="card-body p-10">
                @if($job->plan_id)
                @php
                    $plan = DB::table('subscription_plans')->where('id' , $job->plan_id)->first();

                @endphp
                <div  style="margin-bottom:20px;" class="col-md-6">
                    <div class="card my-left card activeplan">
                        <div class="card-body post-jobs-titles">
                            <h2>{{ $plan->name }} (${{$plan->price}})</h2>
                            <div class="correct-pin">
                                @foreach(explode(',' , $plan->key_points) as $k)
                                <div class="my-icon">
                                    <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                                </div>
                                <div class="post-icon-title">
                                    <p>{{$k}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div> -->

</div>