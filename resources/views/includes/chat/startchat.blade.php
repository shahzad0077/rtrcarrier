<div class="card card-custom rounded" id="user-messages">
    <!--begin::Header-->
    <div class="card-header align-items-center px-8 py-4">
        <div>
            <div class="symbol symbol-circle symbol-40 mr-3">
                <img alt="Pic" src="assets/media/users/300_12.jpg">
            </div>
        </div>
        <div class="text-left flex-grow-1">
            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
            <div class="dropdown">
                <span class="label label-dot label-success"></span>
                <span class="font-weight-bold text-muted font-size-sm">Active</span>
            </div>
        </div>
        <div class="text-right flex-grow-1">
            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md">
               <i class="fa fa-light fa-arrow-left"></i>
            </button>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Scroll-->
        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
            <!--begin::Messages-->
            <div class="messages">
                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-40 mr-3">
                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                        </div>
                        <div>
                            <!-- <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a> -->

                            <div class="mt-2 rounded-full p-5 bg-light-secondary text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                How likely are you to recommend our company
                                to your friends and family?
                            </div>
                            <span class="text-muted font-size-sm">2 Hours</span>
                        </div>
                    </div>
                    
                </div>
                <!--end::Message In-->
                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="mt-2 rounded-full-alt p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                Hey there, we’re just writing to let you know
                                that you’ve been subscribed to a repository on GitHub.
                            </div>
                            <span class="text-muted text-right font-size-sm">3 minutes</span>
                        </div>
                        <div class="symbol symbol-circle symbol-40 ml-3">
                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                        </div>
                    </div>
                </div>
                <!--end::Message Out-->
                
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Scroll-->
    </div>
    <!--end::Body-->
    <!--begin::Footer-->
    <div class="card-footer align-items-center">
        <!--begin::Compose-->
        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
        <div class="d-flex align-items-center justify-content-between mt-5">
            <div class="mr-3">
                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                    <label for="file-input">
                        <i class="flaticon2-file icon-lg"></i>
                    </label>
                </a>
                <input id="file-input" type="file" />

                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                    <label for="file-input">
                        <i class="flaticon2-photo-camera icon-lg"></i>
                    </label>
                </a>
                <input id="file-input" type="file" />
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
            </div>
        </div>
        <!--begin::Compose-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Card-->