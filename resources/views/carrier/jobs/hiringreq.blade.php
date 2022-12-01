<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">
                Hiring Requirements
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            <a href="{{ url('add-new-hiring-template') }}" class="btn btn-primary font-weight-bolder" >
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" cx="9" cy="15" r="6" />
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span> Add New Hiring Template
            </a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">Hiring Requirements Templates</label>
                    <select onchange="gettemplate(this.value)" required name="hiring_template" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects">
                        <option value="">Select Hiring Requirements Template</option>
                        @foreach($template as $r)
                        <option @if(DB::table('linktemplatewithjobs')->where('job_id' , $job->id)->where('template_id' , $r->id)->count() > 0) selected @endif value="{{ $r->id }}">{{ $r->name }}</option>
                        @endforeach
                    </select>
                    @error('hiring_template')
                        <span class="invalid-feedback" role="alert">
                            <strong>Hiring Template Is Required</strong>
                        </span>
                    @enderror
                </div>
            </div>
            @foreach($template as $r)
            <div style="display:none;" id="editbutton{{ $r->id }}" class="col-md-12 text-right editbutton">
                <a onclick="showtemplate({{$r->id}})" href="javascript::void(0)">Edit Template</a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        function gettemplate(id) {
            if(id =='')
            {
                $('.editbutton').hide();
            }else{
                $('#editbutton'+id).show();
            }
        }
        function showtemplate(id) {
            $('.alltemplate').hide();
            $('#shotemplate'+id).fadeIn();
        }
    </script>
@endsection