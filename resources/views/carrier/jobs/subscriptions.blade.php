<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label font-weight-bolder text-dark">Subscriptions</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 post-content">
                <h2>How would you like to post your job?</h2>
                <p>We're examining your job posting and will publish it soon one of our administrators approves it.</p>
            </div>
            @foreach(DB::table('subscription_plans')->where('status' , 1)->orderby('price' , 'asc')->get() as $r)
            <input required type="hidden" id="plan_{{ $r->id }}" name="plan_id" value="{{ $r->id }}">
            <div class="col-md-6 ">
                <div class="card my-left card">
                    <div class="card-body post-jobs-titles">
                        <h2>{{ $r->name }} (${{$r->price}})</h2>
                        <div class="correct-pin">
                            @foreach(explode(',' , $r->key_points) as $k)
                            <div class="my-icon">
                                <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                            </div>
                            <div class="post-icon-title">
                                <p>{{$k}}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-12 text-right">
                            <button onclick="selectplan({{ $r->id }})" type="button" class="btn btn-primary mr-2">Select Plan</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>