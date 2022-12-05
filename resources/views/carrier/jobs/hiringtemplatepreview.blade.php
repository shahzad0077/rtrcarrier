@foreach($template as $template)
<div style="display:none;" class="card card-custom card-stretch previewcard" id="preview{{ $template->id }}">
	<div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">
               {{ $template->name }}
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            <a href="javascript:void(0)" onclick="edittemplate({{$template->id}})" class="btn btn-primary font-weight-bolder" >
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span> Edit Template
            </a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body p-10">
        <div class="row">
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
        </div>
    </div>
</div>
@endforeach