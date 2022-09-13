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
                ...
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