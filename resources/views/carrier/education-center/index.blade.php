@extends('layouts.main-layout')
@section('title','Education Center')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-10">
                    <!--begin::Section-->
                    <div class="mb-17">
                        <div class="d-flex mb-5">
                              <div>
                                  <h3 class="text-dark">Posts from RTR</h3>
                              </div>
                              @if($categories->count() > 2)
                              <div class="ml-auto">
                                  <a href="#" class="fs-6 fw-semibold link-primary ml-auto">View All</a>
                              </div>
                              @endif
                        </div>
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        
                        <!--begin::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    @foreach($categories as $r)
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex mb-5">
                              <div>
                                  <h3 class="text-dark">{{ $r->name }}</h3>
                              </div>
                              @if($rtrposts->where('category_id' , $r->id)->count() > 6)
                              <div class="ml-auto">
                                  <a href="{{ url('educationcenter') }}/{{ $r->id }}" class="fs-6 fw-semibold link-primary ml-auto">View All</a>
                              </div>
                              @endif
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                        <div class="row g-10">
                            @foreach($rtrposts->where('category_id' , $r->id)->limit(6)->get() as $a)
                            <div class="col-md-4">
                                <div class="card-xl-stretch me-md-6">
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/600x400/img-73.jpg');" data-fslightbox="lightbox-video-tutorials" href="{{ url('detail') }}/{{ $a->id }}">
                                        
                                    </a>
                                    <div class="m-0">
                                        <a href="{{ url('detail') }}/{{ $a->id }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $a->tittle }}</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="javascript::void(0)" class="text-gray-700 text-hover-primary">Admin</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Mar 21 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Feature post-->
                            </div>
                            @endforeach
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                            <!--begin::Col-->
                            
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    @endforeach                
                </div>
                <!--end::Body-->
            </div>


            <br>

            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-10">
                    <!--begin::Section-->
                    <div class="mb-17">
                        <div class="d-flex mb-5">
                              <div>
                                  <h3 class="text-dark">{{ Cmf::getusercompany()->company_name }} Posts</h3>
                              </div>
                              @if($categories->count() > 2)
                              <div class="ml-auto">
                                  <a href="#" class="fs-6 fw-semibold link-primary ml-auto">View All</a>
                              </div>
                              @endif
                        </div>
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        
                        <!--begin::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    @foreach($categories as $r)
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex mb-5">
                              <div>
                                  <h3 class="text-dark">{{ $r->name }}</h3>
                              </div>
                              @if($carrierposts->where('category_id' , $r->id)->count() > 6)
                              <div class="ml-auto">
                                  <a href="{{ url('educationcenter') }}/{{ $r->id }}" class="fs-6 fw-semibold link-primary ml-auto">View All</a>
                              </div>
                              @endif
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                        <div class="row g-10">
                            @foreach($carrierposts->where('category_id' , $r->id)->orderby('created_at' , 'desc')->limit(6)->get() as $a)
                            <div class="col-md-4">
                                <div class="card-xl-stretch me-md-6">
                                    <a href="{{ url('detail') }}/{{ $a->id }}" class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image: url('{{ url('') }}/public/images/{{ $a->image  }}');">
                                        
                                    </a>
                                    <div class="m-0">
                                        <a href="{{ url('detail') }}/{{ $a->id }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $a->tittle }}</a>
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="javascript::void(0)" class="text-gray-700 text-hover-primary">By {{ Cmf::getusercompany()->company_name }}</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on {{ Cmf::date_format($a->created_at) }}</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Feature post-->
                            </div>
                            @endforeach
                        </div>
                        <!--end::Row-->
                    </div>
                    @endforeach                
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Container-->
    </div>
</div>
@endsection