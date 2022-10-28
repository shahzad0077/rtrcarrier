@extends('layouts.main-layout')
@section('title','Help')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            
            <div class="row m-10">
                
                    <div class="col-md-6 mx-auto text-center">
                        <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-3 mb-lg-6 p-4">How Can We Help You?</h1>
                        <form method="GET" action="{{ url('helpsearch') }}">
                        <input type="text" class="form-control " style="min-height:62px; box-shadow: 4px 10px 4px 10px #f1f1f1; border-radius:100px" placeholder="Search for a Question" name="keyword">
                        </form>
                    </div>
                
            </div>

            <!--begin::Row-->
            <div class="row gy-0 mb-6 mb-xl-12">
                <!--begin::Col-->
                @foreach($data as $r)
                <div class="col-md-6 mb-5">
                    <!--begin::Card-->
                    <div class="card card-md-stretch me-xl-3 mb-md-0 mb-6">
                        <!--begin::Body-->
                        <div class="card-body p-10 p-lg-15">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-dark">{{ $r->name }}</h1>
                                <!--end::Title-->
                            </div>
                            <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordionExample7">
                                
                                @foreach(DB::table('help_articles')->where('category_id' , $r->id)->where('status' , 'Published')->orderby('order' , 'ASC')->get() as $a)
                                <div class="card">
                                    <div class="card-header" id="headingTwo7">
                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo{{ $a->id }}">
                                            <span class="svg-icon svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div class="card-label pl-4">{{ $a->tittle }}</div>
                                        </div>
                                    </div>
                                    <div id="collapseTwo{{ $a->id }}" class="collapse" data-parent="#accordionExample7">
                                        <div class="card-body pl-12">
                                            {{ $a->answer }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection