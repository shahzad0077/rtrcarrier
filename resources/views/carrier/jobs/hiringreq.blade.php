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
                    <select id="selecthiringtemplateforaddingjob" onchange="gettemplate(this.value)" required name="hiring_template" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" >
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
            <div style="display: none;" id="hiringreqspinner" class="col-md-12 text-center">
                <i style="font-size: 40px;" class="fa fa-spin fa-spinner"></i>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        function gettemplate(id) {
            $('#hiringreqspinner').show();
            $('.previewcard').css('display' , 'none');
            $('.alltemplate').css('display' , 'none');
            setTimeout(function() { 
                $('#hiringreqspinner').hide();
                $('#preview'+id).show();
            }, 2000);
        }
        function edittemplate(id) {
            $('#hiringreqspinner').show();
            $('.previewcard').css('display' , 'none');
            $('.alltemplate').css('display' , 'none');
            setTimeout(function() { 
                $('#hiringreqspinner').hide();
                $('#showtemplatecard'+id).show();
            }, 2000);

        }
    </script>
    @foreach($template as $r)
    <script type="text/javascript">
        $('#hiringreqajaxform{{ $r->id }}').on('submit',(function(e) {
            $('.savehiringreqform').html('<i class="fa fa-spin fa-spinner"></i>');
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: $(this).attr('action'),
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data){
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    $('.savehiringreqform').html('Update Template');
                    var templateid = '{{$r->id}}';
                    showpreviewofhiringreq(templateid);      
                }
            });
        }));
    </script>
@endforeach
@endsection