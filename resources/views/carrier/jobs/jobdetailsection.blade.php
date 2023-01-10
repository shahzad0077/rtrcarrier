<div style="display: none;" class="detailsection{{ $job->job_id }} mt-10">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column nav-pills jobdetailsidebar">
                <li class="nav-item mb-2">
                    <a class="nav-link active" id="overview-tab-{{$job->job_id}}" data-toggle="tab" href="#overview-{{$job->job_id}}" aria-controls="overview">
                        <span class="nav-text">Overview</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" id="sellingpoints-tab-{{$job->job_id}}" data-toggle="tab" href="#sellingpoints-{{$job->job_id}}" aria-controls="sellingpoints">
                        <span class="nav-text">Top Selling Points</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="description-tab-{{$job->job_id}}" data-toggle="tab" href="#description-{{$job->job_id}}" aria-controls="description">
                        <span class="nav-text">Job Description</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="equipment-tab-{{$job->job_id}}" data-toggle="tab" href="#equipment-{{$job->job_id}}" aria-controls="equipment">
                        <span class="nav-text">Equipment</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="requirements-tab-{{$job->job_id}}" data-toggle="tab" href="#requirements-{{$job->job_id}}" aria-controls="requirements">
                        <span class="nav-text">Requirements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="maps-tab-{{$job->job_id}}" data-toggle="tab" href="#maps-{{$job->job_id}}" aria-controls="maps">
                        <span class="nav-text">Maps</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="benifits-tab-{{$job->job_id}}" data-toggle="tab" href="#benifits-{{$job->job_id}}" aria-controls="benifits">
                        <span class="nav-text">Benifits</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="orientation-tab-{{$job->job_id}}" data-toggle="tab" href="#orientation-{{$job->job_id}}" aria-controls="orientation">
                        <span class="nav-text">Orientation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="leaseinformation-tab-{{$job->job_id}}" data-toggle="tab" href="#leaseinformation-{{$job->job_id}}" aria-controls="leaseinformation">
                        <span class="nav-text">Lease Infomation</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="myTabContent{{$job->job_id}}">
                <div class="tab-pane fade active show" id="overview-{{$job->job_id}}" role="tabpanel" aria-labelledby="overview-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Oveview</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Overview of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <h4><a target="_blank" class="text-black" href="{{url('job-detail')}}/{{ $job->url }}">{{ $job->job_tittle }}</a></h4>
                                </div>
                                <div>
                                    <span class="job-type ml-5">{{ $job->job_status }}</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-2">
                                    <div class="job-detail">
                                        <p class="mr-2">Freight type:</p>
                                        <b>{{ $job->freight_type }}</b>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="job-detail">
                                        <p class="mr-2">Home time:</p>
                                        <b>{{ $job->home_time }}</b>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="job-detail">
                                        <p class="mr-2">Experience:</p>
                                        <b>{{ $job->hirring->minimum_expereince }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="d-flex job-detail flex-row">
                                        <b class="mr-2">Salary:</b>
                                        <b>$1200 - $1600</b>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex job-detail flex-row">
                                        <b class="mr-2">Driver Type:</b>
                                        <b>{{ $job->driver_type }}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h4>Job Description</h4>
                                    <br>
                                    {{ $job->job_description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sellingpoints-{{$job->job_id}}" role="tabpanel" aria-labelledby="sellingpoints-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Top Selling Points</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Top Selling Points of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="description-{{$job->job_id}}" role="tabpanel" aria-labelledby="description-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Job Description</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Job Description of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            {{ $job->job_description }}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="equipment-{{$job->job_id}}" role="tabpanel" aria-labelledby="equipment-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Equipment</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Equipment of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Equipment & Freight</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="job-details p-4">
                                        <b class="mr-2">Freight Type:</b>
                                        {{ $job->freight_type_equipment }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="job-details p-4">
                                        <b class="mr-2">Drop and Hook:</b>
                                        {{ $job->drop_and_hook }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="job-details p-4">
                                        <b class="mr-2">Live Load/Unload:</b>
                                        {{ $job->live_load }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="job-details p-4">
                                        <b class="mr-2">Driver Load/Unload:</b>
                                        {{ $job->driver_load }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="requirements-{{$job->job_id}}" role="tabpanel" aria-labelledby="requirements-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Requirements</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Requirements of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="maps-{{$job->job_id}}" role="tabpanel" aria-labelledby="maps-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Maps</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Maps of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="benifits-{{$job->job_id}}" role="tabpanel" aria-labelledby="benifits-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Benifits</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Benifits of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="orientation-{{$job->job_id}}" role="tabpanel" aria-labelledby="orientation-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Orientation</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Orientation of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="leaseinformation-{{$job->job_id}}" role="tabpanel" aria-labelledby="leaseinformation-tab-{{$job->job_id}}">
                    <div class="jobdetailsidebar">
                        <div class="card-header align-items-center border-0 mt-4 p-4">
                            <h3 class="align-items-start">
                                <span class="font-weight-bolder text-dark">Lease Infomation</span>
                            </h3>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Here you Can See Lease Infomation of the Job</span>
                            <hr>
                        </div>
                        <div class="job-details p-4">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.img-thumbnail-for-icons {
    border-radius: 33px;
    width: 61px;
    height: 61px;
}

.fab:before {
    position: relative;
    top: 13px;
}
.smd {
    width: 200px;
    font-size: small;
    text-align: center;
}
</style>
 <div class="modal fade" id="sharejobmodal{{$job->job_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content col-12">
            <div class="modal-header ">
                <h5 class="modal-title">Share</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="icon-container1 d-flex">
                    <div class="smd">
                        <a href="" class="img-thumbnail-for-icons fab fa-twitter fa-2x"
                            style="color:#4c6ef5;background-color: aliceblue"></a>
                        <p>Twitter</p>
                    </div>
                    <div class="smd">
                        <a href="" class="img-thumbnail-for-icons fab fa-facebook fa-2x"
                            style="color: #3b5998;background-color: #eceff5;"></a>
                        <p>Facebook</p>
                    </div>
                    <div class="smd">
                        <a href="" class="img-thumbnail-for-icons fab fa-reddit-alien fa-2x"
                            style="color: #FF5700;background-color: #fdd9ce;"></a>
                        <p>Reddit</p>
                    </div>
                    <div class="smd">
                        <a href="" class="img-thumbnail-for-icons fab fa-discord fa-2x "
                            style="color: #738ADB;background-color: #d8d8d8;"></a>
                        <p>Whatsapp</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="input-group">
                  <input value="{{url('job-detail')}}/{{ $job->url }}" id="maplink" style="border-right: none;" type="text" class="form-control" placeholder="Search" name="search">
                  <div class="input-group-btn">
                    <button  data-toggle="tooltip" title="sadsadsadsad" data-original-title="Delete" onclick="coppymaplink()" style="height:47px;" class="btn btn-default" type="submit"><i class="far fa-clone"></i></button>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>