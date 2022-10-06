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
                                  <h3 class="text-dark">Education Center</h3>
                              </div>
                              <!-- <div class="ml-auto">
                                  <a href="#" class="fs-6 fw-semibold link-primary ml-auto">View All</a>
                              </div> -->
                        </div>
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                @foreach($rtrposts->whereNotNull('youtube')->limit(1)->get() as $a)
                                <!--begin::Feature post-->
                                <div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
                                    <!--begin::Video-->
                                    <div class="mb-3">
                                        <iframe class="embed-responsive-item card-rounded h-275px w-100" src="{{ $a->youtube }}" allowfullscreen="allowfullscreen" data-gtm-yt-inspected-11="true" id="116062210" data-gtm-yt-inspected-31871541_91="true" title="How to Implement an Ajax DataTable"></iframe>
                                    </div>
                                    <!--end::Video-->
                                    <!--begin::Body-->
                                    <div class="mb-5">
                                        <!--begin::Title-->
                                        <a href="{{ url('detail') }}/{{ $a->id }}" class="fs-2 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $a->tittle }}</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark mt-4">
                                            {!! \Illuminate\Support\Str::limit($a->content, 450, $end='...') !!}
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pe-2">
                                            <div class="fs-5 fw-bold">
                                                <a href="javascript:void(0)" class="text-gray-700 text-hover-primary">Admin</a>
                                                <span class="text-muted">{{ Cmf::date_format($a->created_at) }}</span>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                        
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Feature post-->
                                @endforeach
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 justify-content-between d-flex flex-column">
                               @foreach($rtrposts->limit(3)->get() as $a) <!--begin::Post-->
                               @if($a->youtube)

                               @else
                                <div class="ps-lg-6 mb-16 mt-md-0 mt-17">
                                    <!--begin::Body-->
                                    <div class="mb-6">
                                        <!--begin::Title-->
                                        <a href="{{ url('detail') }}/{{ $a->id }}" class="fw-bold text-dark mb-4 fs-2 lh-base text-hover-primary">{{ $a->tittle }}</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 mt-4 text-gray-600 text-dark">
                                            {!! \Illuminate\Support\Str::limit($a->content, 150, $end='...') !!}
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pe-2">
                                            <div class="fs-5 fw-bold">
                                                <a href="javascript::void(0)" class="text-gray-700 text-hover-primary">Admin</a>
                                                <span class="text-muted">{{ Cmf::date_format($a->created_at) }}</span>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                @endif
                                @endforeach


                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                
                    <!--end::Section-->
                    <!--begin::Section-->
                    
                    <!--end::Section-->
                    
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