@extends('layouts.frontend')
@section('title')
<title>{{ $data->job_tittle }} | RTR</title>
@endsection

@section('content')
<section class="ux-secton">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-12">
            <div class="main-ux-outer">
               <div class="left-wyle">
                  @if($company->logo)
                  <img style="width: 100%;" src="{{ asset('public/images') }}/{{ $company->logo }}">
                  @else
                  <img style="width: 100%;" src="https://cdn3.vectorstock.com/i/thumb-large/35/52/placeholder-rgb-color-icon-vector-32173552.jpg">
                  @endif
               </div>
               <div class="ux-content">
                  <h2>{{ $data->job_tittle }}</h2>
                  <ul>
                     <li><img src="{{ asset('public/front/assets/images/location-Vector.png') }}" class="img-fluid" alt="location vector"> Uk,London</li>
                     <li><img src="{{ asset('public/front/assets/images/dollar-vector.png') }}" class="img-fluid price-dollar" alt="dollar vector"><span class="job-salry">{{ $data->avgerage_weekly_pay }} a week</span></li>
                  </ul>
                  <a href="#" class="full-time-btn">Full-time</a>
                  <a href="#" class="urgent-btn">Urgent</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-12 apply-job-btn">
            <a href="">Apply For Job</a>
         </div>
      </div>
   </div>
</section>
<section  class="job-description-section">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="card description-outer">
               <div class="row">
                  <div class="col-md-12">
                     <nav>
                        <div class="nav nav-tabs nav-fill main-description-tab" id="nav-tab" role="tablist">
                           <a class="nav-item my-tabs-link nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Job Details</a>
                           <a class="nav-item my-tabs-link nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Recruiter Information</a>
                        </div>
                     </nav>
                     <div class="tab-content my-tabs-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <div class="row">
                              <!-- <div class="col-md-12 description-pera">
                                 <p>As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent. You will help the team design beautiful interfaces that solve business challenges for our clients. We work with a number of Tier 1 banks on building web-based applications for AML, KYC and Sanctions List management workflows. This role is ideal if you are looking to segue your career into the FinTech or Big Data arenas.</p>
                                 </div> -->
                              <div class="col-md-12 hiring-requirment">
                                 <div class="row">
                                    <div class="col-md-12 hiring-title">
                                       <h2>Basic Details</h2>
                                    </div>
                                    <div class="col-md-12">
                                       <b>Job Title</b>
                                       <p class="mt-2">{{ $data->job_tittle }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>How often will the driver get home?</b>
                                       <p class="mt-2">{{ $data->how_often_will_driver_get_home }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>Custom Home Time</b>
                                       <p class="mt-2">{{ $data->custom_home_time }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>Driver Type</b>
                                       <p class="mt-2">{{ $data->driver_type }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>Home Time</b>
                                       <p class="mt-2">{{ $data->home_time }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>Freight Type</b>
                                       <p class="mt-2">{{ $data->freight_type }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>Dedicated Account</b>
                                       <p class="mt-2">{{ $data->dedicated_account }}</p>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <b>Avg Weekly Mile</b>
                                       <p class="mt-2">{{ $data->avg_weekly_mile }}</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 hiring-requirment">
                                 <div class="row">
                                    <div class="col-md-12 hiring-title">
                                       <h2>Hiring Requirements</h2>
                                    </div>
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
                                    </div>
                                    <div class="col-md-6 mb-3">
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
                                    <div class="col-md-12 mb-3">
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
                              @if($data->benifits)
                              <div class="col-md-12 skilled-div">
                                 <h2>Benifits</h2>
                                 <ul>
                                    @foreach(explode(',' , $data->benifits) as $r)
                                    <li>{{$r}}</li>
                                    @endforeach
                                 </ul>
                              </div>
                              @endif

                              <div class="col-md-12 hiring-map">
                                 <h2>Hiring Area</h2>
                                 <div class="map-div">
                                    <style>
                                          html, body, #map { 
                                            width:100%; 
                                            height:100%; 
                                            margin:0; 
                                            padding:0; 
                                            z-index: 5;
                                          }
                                          .chk{
                                            width: 15px; 
                                            height: 15px; 
                                          }
                                        </style>
                                        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="crossorigin=""/>
                                        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css"/>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
                                        <link rel="stylesheet" href="{{ url('public/carrier/map/geocoder.css') }}" />
                                        <script src="https://unpkg.com/leaflet-control-geocoder@2.4.0/dist/Control.Geocoder.js"></script>

                                        <script src="{{ url('public/carrier/map/states.js') }}"></script>
                                        <script src="{{ url('public/carrier/map/print_bundle.js') }}"></script>

                                        <script src="https://unpkg.com/file-saver@2.0.5/dist/FileSaver.js"></script>
                                        <script src="https://igor-vladyka.github.io/leaflet.browser.print/dist/leaflet.browser.print.js"></script>
                                        <div class="row">
                                           <div class="col-md-12">
                                               <div style="width: 100%; border-radius: 12px; height: 500px; border: 1px solid #ccc" id="map"></div>
                                           </div>
                                        </div>
                                        
                                        <script src="https://unpkg.com/file-saver@2.0.5/dist/FileSaver.js"></script>
                                 </div>
                              </div>
                              <div class="col-md-12 hiring-map">
                                 <h2>Operating Area</h2>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div style="width: 100%; border-radius: 12px; height: 500px; border: 1px solid #ccc" id="operatearea"></div>
                                     </div>
                                  </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <div class="row">
                              <div class="col-md-12 hiring-requirment">
                                 <div class="row">
                                    <div class="col-md-12 mb-3 hiring-title" style="border-bottom: 1px solid #E6E6E6;     max-width: 96%;">
                                       <h2>About Carrier</h2>
                                    </div>
                                    <div class="col-md-4 col-6 abouts-content">
                                       <p>Company Email</p>
                                       <h2>{{ $company->email }}</h2>
                                    </div>
                                    <div class="col-md-4 col-6 abouts-content">
                                       <p>Contact Number</p>
                                       <h2>{{ $company->contact_number }}</h2>
                                    </div>
                                    <div class="col-md-4 col-6 abouts-content">
                                       <p>Website Link</p>
                                       <a>{{ $company->website_link }}</a>
                                    </div>
                                    <div class="col-md-4 col-6 abouts-content mt-4">
                                       <p>Google Profile</p>
                                       <a>{{ $company->google_link }}</a>
                                    </div>
                                    <div class="col-md-4 col-6 abouts-content mt-4">
                                       <p>Facebook Profile</p>
                                       <a>{{ $company->facebook_link }}</a>
                                    </div>
                                    <div class="col-md-12 abouts-content mt-4">
                                       <p>Company address</p>
                                       <h2>{{ $company->address }}</h2>
                                    </div>
                                    <div class="col-md-12 abouts-content mt-4 about-us-pera">
                                       <p>About Us</p>
                                       <h2>{{ $company->riderpolicy }}</h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @if($relatedjobs->count() > 0)
            <div class="card relareds-card">
               <div class="row">
                  <div class="col-md-12 relateds-title">
                     <h2>Related Jobs</h2>
                  </div>
                  <div class="col-md-12">
                     <div class="job-lists-main">
                        @foreach($relatedjobs as $index => $job)
                        <div class="list-card-main">
                            <div class="job-logo-left">

                                @if($company->logo)
                                <img class="img-fluid" src="{{ asset('public/images') }}/{{ $company->logo }}">
                                @else
                                <img class="img-fluid"  src="https://cdn3.vectorstock.com/i/thumb-large/35/52/placeholder-rgb-color-icon-vector-32173552.jpg">
                                @endif

                                
                            </div>
                            <div class="job-info-right">
                                <div class="job-title">
                                    <a href="{{ url('job-detail') }}/{{ $job->url }}">
                                        <h3>{{ $job->job_tittle }}</h3>
                                    </a>
                                </div>
                                <div class="job-description-1">
                                    <ul>
                                        <li class="company-name"><p>{{ $company->company_name }}</p></li>
                                        <li><img src="{{ asset('public/front/assets/images/location-Vector.png') }}" class="img-fluid" alt="location vector"> {{ $company->address }}</li>
                                        <li><img src="{{ asset('public/front/assets/images/dollar-vector.png') }}" class="img-fluid price-dollar" alt="dollar vector"><span class="job-salry">{{ $job->avgerage_weekly_pay }} a week</span></li>
                                        <li><p class="job-type">Full Times</p></li>
                                    </ul>
                                </div>
                                <div class="job-description-bottom">
                                    <div class="recent-job-require freight">
                                        <h4>Freight Type</h4>
                                        <p>{{ $job->freight_type }}</p>
                                    </div>
                                    <div class="recent-job-require hours">
                                        <h4>Home time</h4>
                                        <p>{{ $job->home_time }}</p>
                                    </div>
                                    <div class="recent-job-require experince">
                                        <h4>Experience</h4>
                                        <p>{{ $job->hirring->minimum_expereince }}</p>
                                    </div>
                                    <div class="recent-job-require-btn">
                                        <a href="{{ url('job-detail') }}/{{ $job->url }}">See Details</a>
                                    </div>
                                    <div class="recent-job-require-easy-btn">
                                        <a href="{{ url('job-detail') }}/{{ $job->url }}">Easy Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            @endif
         </div>
         <div class="col-md-4">
            <div class="card job-left-details mb-4">
               <div class="row">
                  <div class="col-md-12 jobs-title">
                     <h2>Job Details</h2>
                     <div class="details-contents-main">
                        <div class="left-img">
                           <img src="{{ asset('public/front/assets/images/job-details/user.png') }}">
                        </div>
                        <div class="right-content">
                           <h3>Job Title:</h3>
                           <p>{{ $data->job_tittle }}</p>
                        </div>
                     </div>
                     <div class="details-contents-main">
                        <div class="left-img">
                           <img src="{{ asset('public/front/assets/images/job-details/date.png') }}">
                        </div>
                        <div class="right-content">
                           <h3>Date :</h3>
                           <p>{{ Cmf::date_format($data->created_at) }}</p>
                        </div>
                     </div>
                     <div class="details-contents-main">
                        <div class="left-img">
                           <img src="{{ asset('public/front/assets/images/job-details/Calendar.png') }}">
                        </div>
                        <div class="right-content">
                           <h3>Expiration date:</h3>
                           <p>Posted 1 hours ago</p>
                        </div>
                     </div>
                     <div class="details-contents-main">
                        <div class="left-img">
                           <img src="{{ asset('public/front/assets/images/job-details/Location.png') }}">
                        </div>
                        <div class="right-content">
                           <h3>Location:</h3>
                           <p>London, UK</p>
                        </div>
                     </div>
                     <div class="details-contents-main">
                        <div class="left-img">
                           <img src="{{ asset('public/front/assets/images/job-details/Bookmark.png') }}">
                        </div>
                        <div class="right-content">
                           <h3>Avg Weakly pay:</h3>
                           <p>$35k - $45k</p>
                        </div>
                     </div>
                     <div class="details-contents-main">
                        <div class="left-img">
                           <img src="{{ asset('public/front/assets/images/job-details/Bookmark.png') }}">
                        </div>
                        <div class="right-content">
                           <h3>Avg Monthly pay:</h3>
                           <p>$35k - $45k</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card job-left-details ">
               <div class="row">
                  <div class="righ-wyle-main">
                     <div class="wyle-logo">
                        @if($company->logo)
                        <img src="{{ asset('public/images') }}/{{ $company->logo }}">
                        @else
                        <img src="https://cdn3.vectorstock.com/i/thumb-large/35/52/placeholder-rgb-color-icon-vector-32173552.jpg">
                        @endif
                     </div>
                     <div class="wyle-info">
                        <a class="text-left" href="{{ url('carrier') }}/{{ $company->company_link }}">
                            <h2>{{ $company->company_name }}</h2>
                        </a>
                        <a href="">{{ $company->email }}</a>
                     </div>
                  </div>
                  <div class="contact-info-main">
                     <div class="info-title">
                        <h2>Email:</h2>
                     </div>
                     <div class="contect-text">
                        <p>{{ $company->email }}</p>
                     </div>
                  </div>
                  <div class="contact-info-main">
                     <div class="info-title">
                        <h2>Phone:</h2>
                     </div>
                     <div class="contect-text">
                        <p>{{ $company->contact_number }}</p>
                     </div>
                  </div>
                  <div class="contact-info-main">
                     <div class="info-title">
                        <h2>Location:</h2>
                     </div>
                     <div class="contect-text">
                        <p>{{ $company->address }}</p>
                     </div>
                  </div>
                  <div class="contact-info-main">
                     <div class="info-title">
                        <h2>Website:</h2>
                     </div>
                     <div class="contect-text">
                        <p>{{ $company->website_link }}</p>
                     </div>
                  </div>
                  <!-- <div class="col-md-12 web-div">
                     <input type="text" class="web-filed form-control" placeholder="www.companyname.com" name="">
                     </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
var map
map = L.map('map', {
center: [47.291, -107.78],
zoom: 3,
attributionControl: false
});
var googlestreet   = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
 maxZoom: 20,
 subdomains:['mt0','mt1','mt2','mt3']
 }).addTo(map);
var dark  = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png');
var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
     maxZoom: 20,
     subdomains:['mt0','mt1','mt2','mt3']
 })  
map.zoomControl.setPosition('topright');
var eachlyr_arr =  Array();
setTimeout(function(){
 var str='';
 str=str+'<h5>--Select State--</h5>';
 @foreach(DB::table('maplocations')->where('map_id' , $data->hiring_area)->get() as $r)
 state_drwa('{{ $r->state }}')
 @endforeach
 for(var i=0;i<us_states.length;i++){
   str=str+'<label for="'+us_states[i].name+'" ><input type="checkbox" class="stchk" name="statechk" value="'+us_states[i].value+'" id="'+us_states[i].value+'" > '+us_states[i].name+' </label>&nbsp<br>'
   $('#states_chkbx_div').html(str);
 }
}, 400);
function state_drwa(valname){
     var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&state='+valname+'&polygon_geojson=1&format=geojson'
     $.getJSON(nurl, function(data) {
       console.log(data);
       var lyrname=L.geoJSON(data, {
         style: (feature) => {
           return {
             stroke: true,
             color: "#9933ff",
             weight: 2,
             opacity: 0.7,
             fill: true,
             fillColor: "#7300e6",
             fillOpacity: 0.15,
             smoothFactor: 0.5,
             interactive: false,
           };
         },
       })
       eachlyr_arr.push(valname)
       eachlyr_arr[valname]=lyrname
       eachlyr_arr[valname].addTo(map)
     });
   
}
</script>
<script>
var operatearea
operatearea = L.map('operatearea', {
center: [47.291, -107.78],
zoom: 3,
attributionControl: false
});
var googlestreet   = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
 maxZoom: 20,
 subdomains:['mt0','mt1','mt2','mt3']
 }).addTo(operatearea);
var dark  = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png');
var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
     maxZoom: 20,
     subdomains:['mt0','mt1','mt2','mt3']
 })  
operatearea.zoomControl.setPosition('topright');
var eachlyr_arr =  Array();
setTimeout(function(){
 var str='';
 str=str+'<h5>--Select State--</h5>';
 @foreach(DB::table('maplocations')->where('map_id' , $data->operating_area)->get() as $r)
 state_drwa_operate_area('{{ $r->state }}')
 @endforeach
 for(var i=0;i<us_states.length;i++){
   str=str+'<label for="'+us_states[i].name+'" ><input type="checkbox" class="stchk" name="statechk" value="'+us_states[i].value+'" id="'+us_states[i].value+'" > '+us_states[i].name+' </label>&nbsp<br>'
   $('#states_chkbx_div').html(str);
 }
}, 600);
function state_drwa_operate_area(valname){
     var nurl='https://nominatim.openstreetmap.org/search.php?country=%us%&state='+valname+'&polygon_geojson=1&format=geojson'
     $.getJSON(nurl, function(data) {
       console.log(data);
       var lyrname=L.geoJSON(data, {
         style: (feature) => {
           return {
             stroke: true,
             color: "#9933ff",
             weight: 2,
             opacity: 0.7,
             fill: true,
             fillColor: "#7300e6",
             fillOpacity: 0.15,
             smoothFactor: 0.5,
             interactive: false,
           };
         },
       })
       eachlyr_arr.push(valname)
       eachlyr_arr[valname]=lyrname
       eachlyr_arr[valname].addTo(operatearea)
     });
}
</script>
@endsection