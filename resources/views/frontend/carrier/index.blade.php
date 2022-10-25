@extends('layouts.frontend')
@section('title')
<title>{{ $data->company_name }} | RTR</title>
@endsection
@section('content')
<section >
<div class="container main-bg-section" @if($data->banner) style="background-repeat: no-repeat !important;background-size: cover !important; background:url('{{ url('public/') }}/images/{{ $data->banner  }}')" @else style="background:url('https://thumbs.dreamstime.com/b/senior-man-steep-rock-climb-colorado-male-climber-climbing-turtle-rocks-usa-sized-to-fit-popular-social-media-cover-image-74256916.jpg');" @endif>
    <div class="row">
        <div class="col-md-12 heart-outer">
           <div class="heart-div">
            <a href=""><i class="far fa-heart"></i></a>
                <!-- <img src="assets/images/heart.png"> -->
           </div>
        </div>
        <div class="main-logo-content">
            <div class="logo-div">
                <div class="logo-inner-main">
                    <div class="inner-logo-div">
                        @if($data->logo)
                        <img style="width: 100%;" src="{{ asset('public/images') }}/{{ $data->logo }}">
                        @else
                        <img style="width:100%;" src="https://cdn3.vectorstock.com/i/thumb-large/35/52/placeholder-rgb-color-icon-vector-32173552.jpg">
                        @endif
                    </div>
                    <div class="inner-text-div">
                        <h2>{{ $data->company_name }}</h2>
                        <p>{{ $data->address }}</p>
                    </div>
                </div>
            </div>
            <div class="report-btn-div">
                <a href="javascript:void(0)" class="report-btn">Report</a>
                <a href="javascript:void(0)"  class="share-btn"><img src="{{ asset('public/front/assets/images/shere.png') }}">Share</a>
            </div>
        </div>
    </div>
</div>
</section>
<section class="job-listing-section">
    <div class="container p-0">
        <div class="_main_row_job">
            <div class="side-bar-main">
            <div class="side-bar-filter">
                <h2>Search & Filter Class-A Jobs</h2>
                
                <form>
                    <div class="desired-pay">
                        <div class="filter-title">
                            <h3>Desired Weekly Pay</h3>
                            <i class="fas fa-angle-down close3"></i>
                            </div>
                        <input type="number" class="desried-price" id="vehicle1" name="home-type" value="All" placeholder="$">
                     </div>
                    <div class="job-type">
                        <div class="filter-title">
                            <h3>Job Type</h3>
                            <i class="fas fa-angle-up open1"></i>
                        </div> 
                      
                        <div class="filters-collapse-open1">
                            @foreach(explode(',' , $attribute->where('id' , 124)->first()->options) as $key=> $r)
                            <div class="toggle-checkbox">
                                <label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                                <p>{{ $r }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="home-type-filter">
                        <div class="filter-title">
                            <h3>Home Time</h3>
                            <i class="fas fa-angle-up open2"></i>
                        </div>
                            <div class="filters-collapse-open2">
                                @foreach(explode(',' , $attribute->where('id' , 125)->first()->options) as $key=> $r)
                                <div class="toggle-checkbox">
                                    <label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                                    <p>{{ $r }}</p>
                                </div>
                                @endforeach
                            </div>
                     </div>
                     <div class="freight-type-filter">
                        <div class="filter-title">
                            <h3>Freight Type</h3>
                            <i class="fas fa-angle-down close1"></i>
                        </div>
                         <div class="filters-collapse-close1">
                            @foreach(explode(',' , $attribute->where('id' , 126)->first()->options) as $key=> $r)
                            <div class="toggle-checkbox">
                                <label class="switch"><input type="checkbox"><span class="slider round"></span></label>
                                <p>{{ $r }}</p>
                            </div>
                            @endforeach
                        </div>
                     </div>
                     
                     <!-- <div class="radius-around-filter">
                         <div class="title-section">
                             <h3>Radius around</h3>
                             <p class="radius-value">50km</p>
                        </div>
                        <input type="range" id="radius-vol" name="vol" min="0" max="50">
                     </div> -->
                     <button type="submit" class="search-job">Search Jobs</button>
                </form>
            </div>
            <div class="recurting-side">
                
            </div>
        </div>
            <div class="job-listing-right">
                 <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Posted Jobs</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">About {{ $data->company_name }}</a>
                            <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</a> -->
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="top-bar-main">
                    <!-- <div class="result-show">
                         <p> Showing <strong>10</strong> of <strong>{{ $jobs->count() }}</strong> jobs</p>
                    </div> -->
                    <!-- <div class="top-bar-filter">
                        <form>
                            <div class="job-type-search">
                                <select name="cars" id="cars">
                                    <option value="volvo">New Jobs </option>
                                    <option value="saab">Latest Jobs</option>
                                    <option value="mercedes">Old Jobs</option>
                                    <option value="audi">Audi</option>
                                  </select>
                            </div>
                            <div class="job-type-search">
                                <select name="cars" id="cars">
                                    <option value="volvo">Show 10 </option>
                                    <option value="saab">Show 20</option>
                                    <option value="mercedes">Show 50</option>
                                    <option value="audi">Show 100</option>
                                  </select>
                            </div>

                        </form>
                        
                    </div> -->
                </div>
                @if($jobs->count() > 0)
                <div class="job-lists-main">
                    @foreach($jobs as $index => $job)
                    <div class="list-card-main">
                        <div class="job-logo-left">

                            @if($data->logo)
                            <img class="img-fluid" src="{{ asset('public/images') }}/{{ $data->logo }}">
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
                                    <li class="company-name"><p>{{ $data->company_name }}</p></li>
                                    <li><img src="{{ asset('public/front/assets/images/location-Vector.png') }}" class="img-fluid" alt="location vector"> {{ $data->address }}</li>
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
                @else

                    <div class="job-lists-main">
                        
                        <div class="alert alert-danger text-center">
                            There is no Jobs Posted By This Carrier Yet
                        </div>
                        
                    </div>

                @endif       
                
            
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="card card-custom card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">About {{ $data->company_name }}</h3>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Form-->
                                        <form class="form">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="row">
                                                <div class="col-md-4 basic-content mb-4">
                                                     <h5>Company Dot Number</h5>
                                                     <p>{{ DB::table('users')->where('id' , $data->user_id)->get()->first()->dot_number }}</p>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Trucks in fleet</h5>
                                                     <p>{{ DB::table('users')->where('id' , $data->user_id)->get()->first()->trucks_in_fleet }}</p>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Hire Drivers within the next 90 days</h5>
                                                     <p>{{ DB::table('users')->where('id' , $data->user_id)->get()->first()->how_many_drivers_in_next }}</p>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Company Email</h5>
                                                     <p>{{ $data->email }}</p>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Contact Number</h5>
                                                     <p>{{ $data->contact_number }}</p>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Website Link</h5>
                                                     <span>{{ $data->website_link }}</span>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Google Profile</h5>
                                                     <span>{{ $data->google_link }}</span>
                                                 </div>
                                                 <div class="col-md-4 basic-content mb-4">
                                                     <h5>Facebook Profile</h5>
                                                     <span>{{ $data->facebook_link }}</span>
                                                 </div>
                                                 <div class="col-md-12 basic-content mb-4">
                                                     <h5>Company address</h5>
                                                     <p>{{ $data->address }}</p>
                                                 </div>
                                                 <div class="col-md-12 basic-content mb-4">
                                                     <h5>About Us</h5>
                                                     <p>{{ $data->aboutus }}</p>
                                                 </div>
                                                </div>  
                                            </div>
                                            <!--end::Body-->
                                        </form>
                                        <!--end::Form-->
                                </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                           <div class="row">
                               <div class="col-lg-6 col-md-6 col-12 people-review-div ">
                                 <div class="card reviews-earned-card">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <div class="people-review-profile">
                                                     <img src="assets/images/earned-revieew7.png" class="img-fluid" alt="earned revieew">
                                                 </div>
                                             </div>
                                             <div class="col-md-9 raiting-starts">
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <p>4.50 / 5.00</p>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12 people-review-content">
                                                 <h2>“ Great and friendly people “</h2>
                                                 <span>Jhone doe</span>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#">More</a></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-12 people-review-div ">
                                 <div class="card reviews-earned-card">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <div class="people-review-profile">
                                                     <img src="assets/images/earned-revieew7.png" class="img-fluid" alt="earned revieew">
                                                 </div>
                                             </div>
                                             <div class="col-md-9 raiting-starts">
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <p>4.50 / 5.00</p>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12 people-review-content">
                                                 <h2>“ Great and friendly people “</h2>
                                                 <span>Jhone doe</span>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#">More</a></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-12 people-review-div ">
                                 <div class="card reviews-earned-card">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <div class="people-review-profile">
                                                     <img src="assets/images/earned-revieew7.png" class="img-fluid" alt="earned revieew">
                                                 </div>
                                             </div>
                                             <div class="col-md-9 raiting-starts">
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <p>4.50 / 5.00</p>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12 people-review-content">
                                                 <h2>“ Great and friendly people “</h2>
                                                 <span>Jhone doe</span>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#">More</a></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-12 people-review-div ">
                                 <div class="card reviews-earned-card">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <div class="people-review-profile">
                                                     <img src="assets/images/earned-revieew7.png" class="img-fluid" alt="earned revieew">
                                                 </div>
                                             </div>
                                             <div class="col-md-9 raiting-starts">
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <p>4.50 / 5.00</p>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12 people-review-content">
                                                 <h2>“ Great and friendly people “</h2>
                                                 <span>Jhone doe</span>
                                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer <a href="#">More</a></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                           </div>
                        </div>
                    </div>
                </div>
            </div>
               

            </div>
         </div>
    </div>
</section>
<!-- ready to work with us section start here -->
<section class="find-your-job-section singl-team-cdl">
         <div class="container find-your-job-container" style="background-image: url('{{ asset('public/front/assets/images/newslater-background.png')  }}');">
             <div class="row">
                 <div class="col-md-12 find-your-job-title aos-init aos-animate" >
                     <h2>Find your next CDL-A driving job!</h2>
                     <div class="seach-main-div">
                        <div class="search-field">
                            <div class="search-icons">
                                <i class="fa fa-search my-right-arrow"></i>
                            </div>
                            <div class="form-group my-search-field">
                                <input type="text" class="form-control search-input" placeholder="Search by Zipcode" name="">
                            </div>
                        </div>
                        <div class="search-subcribe">
                            <a href="#">Find Jobs</a>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </section>

  <section class="shere-section">
      <div class="container">
      <div class="row">
          <div class="col-md-6 m-auto">
               <div class="card shere-profile-card">
                   <div class="card-body shere-profile-content">
                       <div class="row">
                        <div class="col-md-12 croos-shere-div">
                            <div class="shere-cross">
                            <i class="fa fa-times"></i>
                        </div>
                        </div>
                           <div class="col-md-12 shere-profile-text">
                               <h2>Share Carrier’s Profile</h2>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem I</p>
                               <div class="shere-main-icon">
                                   <div class="social-shere">
                                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                                   </div>
                                   <div class="social-shere">
                                       <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                   </div>
                                   <div class="social-shere">
                                       <a href="#"><i class="fab fa-twitter"></i></a>
                                   </div>
                                   <div class="social-shere">
                                       <a href="#"><i class="fab fa-whatsapp"></i></a>
                                   </div>
                               </div>
                               <div class="input-shere">
                                    <form>
                                       <input type="text" placeholder="" value="{{ url('carrier') }}/{{ $data->company_link }}" name="">
                                       <i class="fa fa-copy"></i>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
              </div>
          </div>
      </div>
  </div>
</section>
  <!-- report pop -->
  <section class="refer-friend-popup ">
       <div class="container">
           <div class="row">
               <div class="col-md-5 card-popup-divs">
                   <div class="card-popup">
                       <div class="card-body">
                           <form method="post" action="" class="refer-friend-form">
                           <div class="row">
                               
                                  <div class="col-md-12 cross-icon close-popup text-right">
                                     <a href="#"> <i class="fas fa-times"></i></a>
                                  </div>
                                  <div class="col-md-12 get-lead-content">
                                      <h2>Report Carrier </h2>
                                      <p>Submit your query against the carrier</p>
                                  </div>
                                   <div class="col-md-12 col-12">
                                       <div class="form-group popup-form">
                                           <input type="text" class="form-control driver_name" placeholder="Subject" name="driver_name">
                                       </div>
                                   </div>
                                   <div class="col-md-12 col-12">
                                       <div class="form-group popup-form">
                                           <textarea id="" name="" rows="6" cols="50" placeholder="Tell something what happend"></textarea>
                                       </div>
                                   </div>
                                   <div class="col-md-12 col-12 popup-btn refer-freind-pop">
                                       <button type="submit" class="refer-subt-btn">Submit</button>
                                       <img class="loader-ajax-popup" src="https://classaclub.com/wp-content/uploads/2022/04/Spinner-1s-200px-1-1.png">
                                   </div>
                                   
                                   
                                     
                               </div>
                             </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  </section>
<!-- ready to work with us section end here -->

@endsection