<header id="sticky-header" class="header-area">
    <!-- Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="col-md-12">
                <div class="header-top-list">
                    <ul class="top-contact-list">
                        <li><a href="#">Call Us: 011 222 3333</a></li>
                        <li><a href="#">Email: youremail@example.com</a></li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="logo"><a href="{{route('/')}}"><img src="{{asset('frontEndAssets')}}/images/logo/logo.png" alt="JobHere"></a></div>
            </div>
            <div class="col-sm-6 col-lg-9">
                <div class="pull-right header-menu">
                    <nav id="primary-menu">
                        <ul class="main-menu text-right">
                            <li><a href="{{route('/')}}">Home</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('/')}}">Home Version One</a></li>
                                    <li><a href="{{route('/')}}">Home Version Two</a></li>
                                    <li><a href="{{route('/')}}">Home Box Layout</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('job-board')}}">Jobs</a>
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="{{route('single-job')}}">Single Job</a></li>--}}
{{--                                    <li><a href="{{route('job-details')}}">Job Details</a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('job-board')}}">Job Board</a></li>
                                    <li><a href="{{route('single-job')}}">Single Job</a></li>
                                    <li><a href="candidates.html">Candidates</a></li>
                                    <li><a href="resume.html">Resume</a></li>
                                    <li><a href="{{route('blog')}}">Blog Page</a></li>
                                    <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="login-btn">
                        <a class="modal-view button" href="#" data-bs-toggle="modal" data-bs-target="#register">Register</a>
                        <a class="modal-view button" href="#" data-bs-toggle="modal" data-bs-target="#productModal">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{route('/')}}">HOME</a>
                                    <ul>
                                        <li><a href="{{route('/')}}">Home Version One</a></li>
                                        <li><a href="{{route('/')}}">Home Version Two</a></li>
                                        <li><a href="{{route('/')}}">Home Box Layout</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('job-board')}}">Job</a>
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="{{route('single-job')}}">Single Job</a></li>--}}
{{--                                        <li><a href="{{route('job-details')}}">Job Details</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="#">Page</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('job-board')}}">Job Board</a></li>
                                        <li><a href="{{route('single-job')}}">Single Job</a></li>
                                        <li><a href="candidates.html">Candidates</a></li>
                                        <li><a href="resume.html">Resume</a></li>
                                        <li><a href="{{route('blog')}}">Blog Page</a></li>
                                        <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('blog')}}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>
