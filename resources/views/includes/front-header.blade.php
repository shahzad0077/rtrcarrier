<header class="header-two">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-tranparent px-0">
                    <a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('public/front/assets/images/logo.png') }}" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto my-main-menu-two">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="#">For Drivers</a></li>
                            <li><a href="#">For Carriers</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="{{ url('job/add') }}">Post a job</a></li>
                            @if(Auth::check())
                            <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            @else
                            <li><a href="{{ url('') }}">Login / Sign up</a></li>
                            @endif
                            <!-- <li>
                                <div class="main-header-contact">
                                    <div class="head-contact-icon">
                                        <img src="assets/images/phone.svg" />
                                    </div>
                                    <div class="contact-info">
                                        <p>For Inquiry</p>
                                        <p>877-743-7888</p>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header> 