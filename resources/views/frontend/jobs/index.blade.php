@extends('layouts.frontend')
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
                        <a class="nav-item my-tabs-link nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Job Description</a>
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
                                       <h2>Hiring Requirements</h2>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Minimum Age</h3>
                                       @if($hirring->minimum_age == 'Other')
                                       <p>{{ $hirring->minimum_age_field }} Years</p>
                                       @else
                                       <p>{{ $hirring->minimum_age }}</p>
                                       @endif
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Minimum Experience</h3>
                                       <p>{{ $hirring->minimum_expereince }}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Moving violations</h3>
                                       <p>{{ $hirring->moving_violations }}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>License Suspensions</h3>
                                       <p>{{ $hirring->license_suspensions }}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>DOT Recordable Accidents</h3>
                                       <p>{{ $hirring->dot_moving_voilations }}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Incidents</h3>
                                       <p>{{ $hirring->moving_voilations_incidents }}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Maximum # of Jobs</h3>
                                       <p>{{ $hirring->maximum_jobs_no_more_than }}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Felony Convictions</h3>
                                       <p>{!! $hirring->felony_convictions !!}</p>
                                   </div>
                                   <div class="col-md-4 col-6 hiring-content">
                                       <h3>Misdemeanors</h3>
                                       <p>{!! $hirring->misdemeanors !!}</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-12 hiring-map">
                               <h2>Hiring Area</h2>
                               <div class="map-div">
                                   <div id="hiringarea" style="width: 100%; border-radius: 12px; height: 500px; border: 1px solid #ccc"></div>
                               </div>
                           </div>
                           <div class="col-md-12 hiring-map">
                               <h2>Operating Area</h2>
                               <div class="map-div">
                                   <div id="operatingarea" style="width: 100%; border-radius: 12px; height: 500px; border: 1px solid #ccc"></div>
                               </div>
                           </div>
                           <!-- <div class="col-md-12 skilled-div">
                               <h2>Skill & Experience</h2>
                               <ul>
                                   <li>You have at least 3 years’ experience working as a Product Designer.</li>
                                   <li>Designer. You have experience using Sketch and InVision or Framer X</li>
                                   <li> You have some previous experience working in an agile environment – Think two-week sprints.</li>
                                   <li>You are familiar using Jira and Confluence in your workflow</li>
                               </ul>
                           </div> -->
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
                  <div class="card relareds-card">
                      <div class="row">
                          <div class="col-md-12 relateds-title">
                              <h2>Related Jobs</h2>
                              <p>2020 jobs live - 293 added today.</p>
                          </div>
                          <div class="col-md-12">
                              <div class="job-lists-main">
                <div class="list-card-main">
                    <div class="job-logo-left">
                        <img class="img-fluid" src="assets/images/us-express.png">
                    </div>
                    <div class="job-info-right">
                        <div class="job-title">
                            <h3>Fuel Transport Driver – Local, Home Daily (Traini..</h3>
                        </div>
                        <div class="job-description-1">
                            <ul>
                                <li class="company-name"><p>Joyride Logistics LLc</p></li>
                                <li><img src="http://box5783.temp.domains/~driverx8/wp-content/themes/rtr/assets/images/location-Vector.png" class="img-fluid" alt="location vector"> Uk,London</li>
                                <li><img src="http://box5783.temp.domains/~driverx8/wp-content/themes/rtr/assets/images/dollar-vector.png" class="img-fluid price-dollar" alt="dollar vector"><span class="job-salry">$1,200 - $1,500 a week</span></li>
                                <li><p class="job-type">Full Times</p></li>
                            </ul>
                        </div>
                        <div class="job-description-bottom">
                            <div class="recent-job-require freight">
                                <h4>Freight Type</h4>
                                <p>See Freight</p>
                            </div>
                            <div class="recent-job-require hours">
                                <h4>Duty time</h4>
                                <p>12 Hours</p>
                            </div>
                            <div class="recent-job-require experince">
                                <h4>Experience</h4>
                                <p>3 Years</p>
                            </div>
                            <div class="recent-job-require-btn">
                                <a href="#">See Details</a>
                            </div>
                            <div class="recent-job-require-easy-btn">
                                <a href="#">Easy Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-card-main">
                    <div class="job-logo-left">
                        <img class="img-fluid" src="assets/images/us-express.png">
                    </div>
                    <div class="job-info-right">
                        <div class="job-title">
                            <h3>Fuel Transport Driver – Local, Home Daily (Traini..</h3>
                        </div>
                        <div class="job-description-1">
                            <ul>
                                <li class="company-name"><p>Joyride Logistics LLc</p></li>
                                <li><img src="http://box5783.temp.domains/~driverx8/wp-content/themes/rtr/assets/images/location-Vector.png" class="img-fluid" alt="location vector"> Uk,London</li>
                                <li><img src="http://box5783.temp.domains/~driverx8/wp-content/themes/rtr/assets/images/dollar-vector.png" class="img-fluid price-dollar" alt="dollar vector"><span class="job-salry">$1,200 - $1,500 a week</span></li>
                                <li><p class="job-type">Full Time</p></li>
                            </ul>
                        </div>
                        <div class="job-description-bottom">
                            <div class="recent-job-require freight">
                                <h4>Freight Type</h4>
                                <p>See Freight</p>
                            </div>
                            <div class="recent-job-require hours">
                                <h4>Duty time</h4>
                                <p>12 Hours</p>
                            </div>
                            <div class="recent-job-require experince">
                                <h4>Experience</h4>
                                <p>3 Years</p>
                            </div>
                            <div class="recent-job-require-btn">
                                <a href="#">See Details</a>
                            </div>
                            <div class="recent-job-require-easy-btn">
                                <a href="#">Easy Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                          </div>
                      </div>
                  </div>
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
                                <h2>{{ $company->company_name }}</h2>
                                <a href="#">{{ $company->email }}</a>
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

<script src="{{asset('public/carrier/assets/map/libs/leaflet-src.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/carrier/assets/map/libs/leaflet.css')}}"/>
<script src="{{asset('public/carrier/assets/map/src/Leaflet.draw.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/Leaflet.Draw.Event.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/carrier/assets/map/src/leaflet.draw.css')}}"/>

<script src="{{asset('public/carrier/assets/map/src/Toolbar.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/Tooltip.js')}}"></script>

<script src="{{asset('public/carrier/assets/map/src/ext/GeometryUtil.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/ext/LatLngUtil.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/ext/LineUtil.Intersect.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/ext/Polygon.Intersect.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/ext/Polyline.Intersect.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/ext/TouchEvents.js')}}"></script>

<script src="{{asset('public/carrier/assets/map/src/draw/DrawToolbar.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Feature.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.SimpleShape.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Polyline.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Marker.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Circle.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.CircleMarker.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Polygon.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/draw/handler/Draw.Rectangle.js')}}"></script>


<script src="{{asset('public/carrier/assets/map/src/edit/EditToolbar.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/EditToolbar.Edit.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/EditToolbar.Delete.js')}}"></script>

<script src="{{asset('public/carrier/assets/map/src/Control.Draw.js')}}"></script>

<script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Poly.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.SimpleShape.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Rectangle.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Marker.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.CircleMarker.js')}}"></script>
<script src="{{asset('public/carrier/assets/map/src/edit/handler/Edit.Circle.js')}}"></script>

<script>
    @foreach(DB::table('maplocations')->where('map_id' , $data->hiring_area)->get() as $r)
        @php
            $lattitude = $r->lat;
            $longitude = $r->long;
        @endphp
    @endforeach
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
    map = new L.Map('hiringarea', { center: new L.LatLng({{$longitude}},{{$lattitude}}), zoom: 10 }),
    drawnItems = L.featureGroup().addTo(map);
    L.control.layers({
        'osm': osm.addTo(map)
    }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
    @foreach(DB::table('maplocations')->where('map_id' , $data->hiring_area)->get() as $r)
        L.circle([{{ $r->long }},{{ $r->lat }}], {{ $r->radius }}).addTo(map);
    @endforeach
</script>
<script>
    @foreach(DB::table('maplocations')->where('map_id' , $data->operating_area)->get() as $r)
        @php
            $lattitude = $r->lat;
            $longitude = $r->long;
        @endphp
    @endforeach
    var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
    map = new L.Map('operatingarea', { center: new L.LatLng({{$longitude}},{{$lattitude}}), zoom: 10 }),
    drawnItems = L.featureGroup().addTo(map);
    L.control.layers({
        'osm': osm.addTo(map)
    }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
    @foreach(DB::table('maplocations')->where('map_id' , $data->operating_area)->get() as $r)
        L.circle([{{ $r->long }},{{ $r->lat }}], {{ $r->radius }}).addTo(map);
    @endforeach
</script>
@endsection