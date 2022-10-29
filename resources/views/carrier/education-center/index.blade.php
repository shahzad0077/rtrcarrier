@extends('layouts.main-layout')
@section('title','Education Center')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid mt-5">
            <div class="card">
                <div class="card-body p-lg-10">
                    <div class="mb-17">
                        <div class="d-flex mb-5">
                          <div>
                              <h3 class="text-dark">Education Center</h3>
                          </div>
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                    </div>
                    @foreach($categories as $r)
                    <div class="mb-17">
                        <div class="d-flex mb-5">
                              <div>
                                  <h3 class="text-dark">{{ $r->name }}</h3>
                              </div>
                              @if(DB::table('education_articles')->where('category_id' , $r->id)->count() > 4)
                              <div class="ml-auto">
                                  <a href="{{ url('education-center') }}/{{ $r->url }}" class="fs-6 fw-semibold link-primary ml-auto">View All</a>
                              </div>
                              @endif
                        </div>
                        <div class="separator separator-dashed mb-9"></div>
                        <div class="row g-10">
                            @foreach(DB::table('education_articles')->where('category_id' , $r->id)->orderby('created_at' , 'desc')->limit(4)->get() as $a)
                            <div class="col-md-3">
                                <div class="card-xl-stretch me-md-6">
                                    @if($a->youtube)
                                    <iframe class="embed-responsive-item card-rounded h-275px w-100" src="{{ $a->youtube }}" allowfullscreen="allowfullscreen" data-gtm-yt-inspected-11="true" id="116062210" data-gtm-yt-inspected-31871541_91="true" title="How to Implement an Ajax DataTable"></iframe>
                                    @else
                                    <a  href="{{ url('detail') }}/{{ $a->url }}" class="h-275px w-100 d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image: url('{{ url('') }}/public/images/{{ $a->image  }}');">
                                    </a>
                                    @endif
                                    <div class="m-0">
                                        <a href="{{ url('detail') }}/{{ $a->url }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{!! \Illuminate\Support\Str::limit($a->tittle, 100, $end='...') !!}</a>
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark mt-4">
                                            {!! \Illuminate\Support\Str::limit($a->content, 450, $end='...') !!}
                                        </div>
                                        <div class="fs-6 fw-bold">
                                            <span class="text-muted">on {{ Cmf::date_format($a->created_at) }}</span>
                                        </div>
                                    </div>
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