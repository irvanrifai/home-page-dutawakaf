 <!-- Topbar Start -->
 <div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i>08112833638</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>dutawakaf@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="https://www.facebook.com/dutawakaf.id" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="https://twitter.com/dutawakaf" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-2" href="#" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2" href="https://www.instagram.com/dutawakaf.id/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2" href="#" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="#" class="navbar-brand ml-lg-3">
            <img src="{{ asset('landing/img/duta-wakaf-institute.png') }}" alt="" width="170">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }} nav-item nav-link">Home</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/about') }}" class="dropdown-item">Backgorund</a>
                        <a href="#" class="dropdown-item">Vision & Mission</a>
                        <a href="#" class="dropdown-item">License</a>
                    </div>
                </div> --}}
                <a href="{{ url('about') }}" class="{{ Request::is('about') ? 'active' : '' }} nav-item nav-link">About</a>
                <a href="{{ url('program') }}" class="{{ Request::is('program*') ? 'active' : '' }} nav-item nav-link">Program</a>
                <a href="{{ url('beasiswa') }}" class="{{ Request::is('beasiswa*') ? 'active' : '' }} nav-item nav-link">Scholarship</a>
                <a href="{{ url('student') }}" class="{{ Request::is('student*') ? 'active' : '' }} nav-item nav-link">Student</a>
                <a href="{{ url('instructor') }}" class="{{ Request::is('instructor') ? 'active' : '' }} nav-item nav-link">Instructor</a>
                <a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }} nav-item nav-link">Contact</a>
            </div>
            <div>
                <a href="{{ url('/login') }}" class="{{ Request::is('login') ? 'active' : '' }} btn btn-success py-2 px-4">Login</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
