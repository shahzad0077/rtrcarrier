<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Chat card is jga sy chat start ho rhi h, is sy next view py jab hm jaen gy to udr 
                    user k sath aik back ka button bi lga den gy tak wo back aa-->
                <div class="card card-custom rounded" id="all-users">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-8 py-4">
                        <div>
                            <div class="symbol symbol-circle symbol-40 mr-3">
                                @if(Auth::user()->profile_picture)
                                <img alt="Pic" src="{{ asset('public/') }}/images/{{ Auth::user()->profile_picture }}">
                                @else
                                <img alt="Pic" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">
                                @endif
                            </div>
                        </div>
                        <div class="text-left flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">{{ Auth::user()->name }}</div>
                            <div class="dropdown">
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Active <i class="fa fa-angle-down"></i></span>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-sm">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a onclick="statuschange('Available')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-success"></span>
                                                </span>
                                                <span class="navi-text">Available</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('In Meeting')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-info"></span>
                                                </span>
                                                <span class="navi-text">In Meeting</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('Do Not disturb')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-danger"></span>
                                                </span>
                                                <span class="navi-text">Do Not disturb</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('Away')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-warning"></span>
                                                </span>
                                                <span class="navi-text">Away</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <div>
                                    <ul class="nav nav-pills nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab-4" data-toggle="tab" href="#home-4">
                                                <span class="nav-icon"><i class="icon-xl la la-user"></i></span>
                                                <span class="nav-text">Users</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab-4" data-toggle="tab" href="#profile-4" aria-controls="profile">
                                                <span class="nav-icon"><i class="icon-xl la la-users"></i></span>
                                                <span class="nav-text">Groups</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent4">
                                        <div class="tab-pane fade show active" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                            <div class="input-group input-group-solid mb-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                                </div>
                                                <input type="text" class="form-control py-4 h-auto" placeholder="Search user">
                                            </div>
                                            <div id="user-indv" class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0)" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_11.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                                    <span class="label label-sm label-success">4</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                            <div class="input-group input-group-solid mb-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                                </div>
                                                <input type="text" class="form-control py-4 h-auto" placeholder="Search user">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_11.jpg">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                                    <span class="label label-sm label-success">4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>