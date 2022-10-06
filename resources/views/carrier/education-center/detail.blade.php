@extends('layouts.main-layout')
@section('title','Post Detail')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container-fluid mt-5">
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20 pb-lg-0">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-15">
                        <!--begin::Post content-->
                        <div class="mb-17">
                            <!--begin::Wrapper-->
                            <div class="mb-8">
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap mb-6">
                                    <!--begin::Item-->
                                    <div class="me-9 my-1">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-400">{{ Cmf::date_format($data->created_at) }}</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="me-9 my-1">
                                        <!--begin::Icon-->
                                        <!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-400"> Announcements</span>
                                        <!--begin::Label-->
                                    </div>
                                </div>
                                <!--end::Info-->
                                <!--begin::Title-->
                                <a href="javascript::void(0)" class="text-dark text-hover-primary fs-2 fw-bold">
                                    {{ $data->tittle }}
                                </a>
                                <!--end::Title-->
                                <!--begin::Container-->
                                <div class="overlay mt-8">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image: url('{{ url('public/images') }}/{{ $data->image }}');"></div>
                                    <!--end::Image-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Description-->
                            <div class="fs-5 fw-semibold text-gray-600">
								{!! $data->content !!}                                
                            </div>
                            <!--end::Description-->
                            <!--begin::Block-->
                            
                            <!--begin::Icons-->
                            
                            <!--end::Icons-->
                        </div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                        <!--begin::Search blog-->
                        <!-- <div class="mb-16">
                            <h4 class="text-dark mb-7">Search Blog</h4>
                            <div class="position-relative">
                                
                                <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
                            </div>
                        </div> -->
                        <!--end::Search blog-->
                        <!--begin::Catigories-->
                        <div class="mb-16">
                            <h4 class="text-dark mb-7">Categories</h4>
                            @foreach($categories as $r)
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                <a href="#" class="text-muted text-hover-primary pe-2">{{ $r->name }}</a>
                            </div>
                            @endforeach
                            
                        </div>
                        <!--end::Catigories-->
                        <!--begin::Recent posts-->
                        <div class="m-0">
                            <h4 class="text-dark mb-7">Recent Posts</h4>
                            <!--begin::Item-->
                            @foreach(DB::table('education_articles')->where('id', '!=', $data->id)->where('status' , 'Published')->limit(5)->get() as $r)
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                    <div class="symbol-label" style="background-image: url('{{ url('public/images') }}/{{ $r->image }}');"></div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="m-0">
                                    <a href="javascript::void(0)" class="text-dark fw-bold text-hover-primary fs-6">@if($r->type == 'rtr') From RTR @else Any Carrier @endif</a>
                                    <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">{{ $r->tittle }}</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            @endforeach
                            
                        </div>
                        <!--end::Recent posts-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

@endsection