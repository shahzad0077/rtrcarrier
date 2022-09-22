@php
    $hir = DB::table('linktemplatewithjobs')->where('job_id' , $job->id)->first();
    if(isset($hir->template_id))
    {
        $template = DB::table('hiring_templates')->where('id' , $hir->template_id)->first();
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
                    <div class="col-md-6 mb-3">
                        <b>How often will the driver get home?</b>
                        <p class="mt-2">{{ $job->how_often_will_driver_get_home }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>Custom Home Time</b>
                        <p class="mt-2">{{ $job->custom_home_time }}</p>
                    </div>

                    <div class="col-md-6">
                        <b>Title</b>
                        <p class="mt-2">{{ $job->job_tittle }}</p>
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
                    @if(isset($template))
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
                    <div class="col-md-6 mb-3">
                        <b>Additional Notes About Expereince</b>
                        <p class="mt-2">{!! $template->additional_notes_about_expereince !!}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->no_more_than }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->moving_violations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->additionl_notes_about_moving_voliations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->no_more_than_major_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->major_moving_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->additionl_notes_about_moving_major_voliations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->license_suspensions }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->license_suspensions_field }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->dot_no_more_than }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->dot_moving_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->preventable_accidents_withn_the_last }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->reason_of_suspensions }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->no_more_than_incidents }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->moving_voilations_incidents }}</p>
                    </div><div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->ticket_incedent }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->specify_in_a_free_form_fill }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->maximum_jobs_no_more_than }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->maximum_jobs_moving_voilations }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->unemployment }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->maximum_jobs_additional_infomation }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->felony_convictions }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->misdemeanors }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->drug_duis }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->type_of_drug_test }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->accepting_sap_drivers }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->additional_information }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->physical }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->accomodate_an_automatic_restriction }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->camera_installed }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->camera_type }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->camera_are }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->camera_facing }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <b>test</b>
                        <p class="mt-2">{{ $template->camera_recording }}</p>
                    </div>  
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
                ...
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFour6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour6">
                <img class="mr-2" src="{{asset('public/carrier/assets/media/custom/preview.svg')}}"> Subscriptions
            </div>
        </div>
        <div id="collapseFour6" class="collapse" data-parent="#accordionExample6">
            <div class="card-body p-10">
                ...
            </div>
        </div>
    </div>

</div>