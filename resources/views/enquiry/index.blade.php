@extends('layouts.navs')
@section('content')
    <div class="main-wrapper">

        <!-- Preloader Start  -->
        {{-- <div class="preloader">
            <div class="loader"></div>
        </div> --}}
        <!-- Preloader End  -->

        <!-- Header Start  -->
        <div id="header" class="header section">

            <!-- Header Top Start  -->
            <div class="header-top">
                <div class="container">

                    <!-- Header Wrapper Start -->
                    <div class="header-wrapper">

                        <div class="header-inner">
                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="index.html"><img src="enquiry/assets/images/header-logo.png" alt="Logo"
                                        style="height: 6rem"></a>
                            </div>
                            <!-- Header Logo End -->

                            <!-- Header Search End -->

                            <!-- Header Search End -->
                        </div>

                        <!-- Header Meta Start -->
                        <div class="header-meta">



                            <div
                                class="header-login-02 d-none d-lg-flex
                                    align-items-center">
                                <a class="link"
                                    href="https://applications.federalpolyilaro.edu.ng/Security/Account/Login"><i
                                        class="fa
                                            fa-user-o"></i>
                                    Student</a>
                                <a class="link"
                                    href="https://applications.federalpolyilaro.edu.ng/Security/Account/Login"><i
                                        class="fa
                                            fa-user-o"></i> Staff</a>
                                <a class="btn btn-primary
                                        btn-hover-heading-color"
                                    href="https://applications.federalpolyilaro.edu.ng/">Portal</a>
                            </div>

                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>

                        </div>
                        <!-- Header Meta End -->

                    </div>
                    <!-- Header Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom d-none d-lg-block">
                <div class="container">
                    <!-- Header Wrapper Start -->
                    <div class="header-wrapper">

                        <!-- Header Menu Start -->
                        <div class="header-menu header-menu-02 d-none
                                d-lg-block">
                            <ul class="main-menu">
                                <li>
                                    <a class="active" href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://federalpolyilaro.edu.ng/about/about-fpi">About
                                                FPI</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/about/our-philosophy">Our
                                                Philosophy</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/about/objectives">Objectives</a>
                                        </li>
                                        <li><a href="https://federalpolyilaro.edu.ng/about/vision-mission">Vision
                                                and Mission</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/about/management">Management</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Academics</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://federalpolyilaro.edu.ng/calender/calendars">Calendars
                                                List</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/calender/academic-calendar">Academics
                                                Calendar</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Admission</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://federalpolyilaro.edu.ng/admission/admission-policy">
                                                Admission Policy</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/admission/entry-requirement">Entry
                                                requirement</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/admission/hnd-programme">HND
                                                Programme</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/admission/nd-programme">ND
                                                Programme</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Administration</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://federalpolyilaro.edu.ng/administration/rectory">
                                                Rectory</a></li>
                                        <li><a href="https://federalpolyilaro.edu.ng/administration/registry">Registry</a>
                                        </li>
                                        <li><a href="https://federalpolyilaro.edu.ng/administration/library">Library</a>
                                        </li>
                                        <li><a href="https://federalpolyilaro.edu.ng/administration/bursary">Bursary</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://federalpolyilaro.edu.ng/campus">Campus</a></li>
                            </ul>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Menu Start -->
                        <div class="header-social">
                            <a href="https://www.facebook.com/federalpolyilaro/?ti=as"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/PolyIlaro?s=08"><i class="fa fa-twitter"></i></a>
                            <a href="https://youtu.be/wu37iNkbMgk"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/polyilaro/"><i class="fa fa-instagram"></i></a>
                        </div>
                        <!-- Header Menu End -->

                    </div>
                    <!-- Header Wrapper End -->
                </div>
            </div>
            <!-- Header Bottom End -->

        </div>
        <!-- Header End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="enquiry/assets/images/logo.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li>
                            <a class="active" href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a class="active" href="index-3.html">Home
                                        03</a></li>
                                <li><a href="index-4.html">Home 04</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About 01</a></li>
                                <li><a href="about-2.html">About 02</a></li>
                                <li><a href="instructor.html">Instructor</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="login-register.html">Login &
                                        Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Courses</a>
                            <ul class="sub-menu">
                                <li><a href="course-list.html">Course List</a></li>
                                <li><a href="course-grid.html">Course Grid</a></li>
                                <li><a href="course-details.html">Course
                                        Details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Offcanvas End -->

        <!-- Slider Start -->
        <div class="slider-section-03">

            <!-- Single Slider Start -->
            <div class="single-slider animation-style-01"
                style="background-image: url(enquiry/assets/images/slider-1.jpg);">
                <div class="slider-bg"></div>

                <img class="slider-shape-01" src="enquiry/assets/images/shape/shape-13.svg" alt="Shape">
                <img class="slider-shape-02" src="enquiry/assets/images/shape/shape-14.png" alt="Shape">
                <img class="slider-shape-03" src="enquiry/assets/images/shape/shape-15.png" alt="Shape">

                <div class="container">
                    <!-- Slider Content Start -->
                    <div class="slider-content-02">
                        <p>BEST AND NUMBER 1 AMONG OTHER POLYTECHNIC IN
                            NIGERIA
                        </p>
                        <h2 class="title">FPI THE ROADMAP TO SUCCESS</h2>
                        <p>THE FEDERAL POLYTECHNIC ILARO
                        </p>
                        <div class="slider-btn">
                            <a href="https://federalpolyilaro.edu.ng/about/about-fpi"
                                class="btn btn-primary
                                    btn-hover-heading-color">About
                                FPI</a>
                            <img class="shape" src="enquiry/assets/images/shape/shape-16.png" alt="Shape">
                        </div>
                    </div>
                    <!-- Slider Content End -->
                </div>
            </div>
            <!-- Single Slider End -->

        </div>
        <!-- Slider End -->


        <!-- Banner Start -->
        <div class="section section-padding-02 banner-section py-5 my-5">
            <div class="container">
                <!-- Banner Start -->
                <div class="banner-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Single Banner Start -->
                            <div class="single-banner">
                                <div class="banner-images">
                                    <img src="enquiry/assets/images/banner-01.jpg" alt="Banner">
                                </div>
                                <div class="banner-content">

                                    <h3 class=""><a href="course-details.html">Best
                                            Polytechnic In Nigeria, Best
                                            Polytechnic In West Africa.</a></h3>
                                    <a href="course-details.html"
                                        class="btn
                                            btn-primary
                                            btn-hover-heading-color">Admission
                                        Enquiry</a>
                                </div>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single Banner Start -->
                            <div class="single-banner">
                                <div class="banner-images">
                                    <img src="enquiry/assets/images/banner-02.jpg" alt="Banner">
                                </div>
                                <div class="banner-content">
                                    <h3 class=""><a href="course-details.html">Orderly
                                            Conduct, Student Welfare,
                                            Service Delivery, Excellence Are
                                            Core Pursuits</a></h3>
                                    <a href="course-details.html"
                                        class="btn
                                            btn-primary
                                            btn-hover-heading-color">Admission
                                        Enquiry</a>
                                </div>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                </div>
                <!-- Banner End -->
            </div>
        </div>
        <!-- Banner End -->
        <!-- Call to ACtion Start -->
        <div class="section bg-color-2 call-to-action-bg my-5">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <!-- Call To Action Content Start -->
                        <div class="call-to-action-content-02
                                section-padding">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title">Welcome to <br> FEDERAL
                                    POLYTECHNIC ILARO </h2>
                            </div>
                            <p>
                                Welcome to the world of the Federal
                                Polytechnic, Ilaro. The institution was
                                established
                                by law on July 25, 1979 and opened her gates
                                to the public on November 15, 1979. The
                                Polytechnic has since then acquired the
                                reputation of a quintessential institution
                                educating and training students in five
                                schools or faculties. These are Engineering,
                                Environmental Studies, Communication and
                                Information Technology, Management Studies
                                and
                                Pure and Applied Sciences.
                            </p>
                            <a href="bootstrap-sidebar-01/apply.php"
                                class="btn btn-primary
                                    btn-hover-heading-color">Get
                                Started</a>
                        </div>
                        <!-- Call To Action Content End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Call To Action Content Start -->
                        <div
                            class="call-to-action-images-02 text-center
                                text-lg-end d-none d-md-block">

                            <div class="call-to-images-shape-01"></div>

                            <img class="call-to-images-shape-02 parallaxed" src="enquiry/assets/images/shape/shape-12.svg"
                                alt="">

                            <div class="image">
                                <div class="call-to-action-shape-01"></div>
                                <img src="enquiry/assets/images/aluko.jpg"
                                    alt="Call
                                        To Action">
                            </div>
                        </div>
                        <!-- Call To Action Content End -->
                    </div>
                </div>
            </div>

            <div class="call-to-action-shape-01">
                <svg id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0, 0, 400,370.35681610247025">
                    <g id="svgg">
                        <path class="shape-path" id="path0"
                            d="M249.954 0.635 C 240.575 3.389,233.929
                                9.074,230.209 17.528 C 221.671 36.930,201.468
                                54.980,166.331 74.599 C 150.321 83.539,133.886
                                91.550,97.896 107.960 C 60.753 124.895,46.948
                                131.724,33.211 139.957 C 2.314 158.477,-5.531
                                173.697,7.558 189.731 C 8.181 190.495,11.285
                                193.759,14.456 196.984 C 38.336 221.280,50.229
                                238.507,53.680 253.797 C 54.907 259.234,55.006
                                266.165,53.979 274.748 C 51.984 291.423,54.149
                                301.599,62.854 316.468 C 72.588 333.095,83.951
                                343.673,97.896 349.088 C 107.191 352.698,115.551
                                354.028,136.688 355.260 C 160.933
                                356.672,172.530 358.640,186.647 363.738 C
                                199.456 368.363,216.007 367.283,240.657 360.214
                                C 277.351 349.690,331.341 324.707,386.917
                                292.536 C 397.502 286.408,398.745
                                285.641,398.645 285.304 C 398.595
                                285.134,396.907 276.638,394.895 266.423 C
                                371.016 145.183,358.578 74.176,357.552 53.239 C
                                357.423 50.608,357.277 49.322,356.993 48.307 C
                                352.156 31.013,314.465 7.243,281.287 0.562 L
                                278.494 0.000 265.276 0.009 L 252.059 0.017
                                249.954 0.635 "
                            stroke="none" fill-rule="evenodd"></path>
                    </g>
                </svg>
            </div>

            <div class="call-to-action-shape-02 animate-05"></div>

            <div class="call-to-action-shape-03 "></div>
        </div>
        <!-- Call to ACtion End -->

        <!-- Feature Category Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2 class="title"><span>Academics Awards</span> </h2>
                </div>
                <!-- Section Title End -->

                <!-- Feature Category Wrapper Start -->
                <div class="feature-category-wrapper
                        feature-category-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Single Feature Category Start -->
                                <div class="single-feature-category">
                                    <div class="feature-category-box">
                                        <div class="shape-1"></div>
                                        <div class="box-icon">
                                            <a href="course-grid.html"><img src="enquiry/assets/images/icon-4.png"
                                                    alt="Icon"></a>
                                        </div>
                                        <img class="shape-2" src="enquiry/assets/images/shape/shape-10.svg"
                                            alt="Shape">
                                    </div>
                                    <div class="box-content">
                                        <h5 class=""><a href="course-grid.html">Best
                                                Polytechnic In Nigeria, Best
                                                Polytechnic In West Africa.</a></h5>
                                    </div>
                                </div>
                                <!-- Single Feature Category End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Feature Category Start -->
                                <div class="single-feature-category">
                                    <div class="feature-category-box">
                                        <div class="shape-1"></div>
                                        <div class="box-icon">
                                            <a href="course-grid.html"><img src="enquiry/assets/images/icon-5.png"
                                                    alt="Icon"></a>
                                        </div>
                                        <img class="shape-2" src="enquiry/assets/images/shape/shape-10.svg"
                                            alt="Shape">
                                    </div>
                                    <div class="box-content">
                                        <h5 class=""><a href="course-grid.html">Most
                                                Sought After Polytechnic By
                                                Jamb Candidates</a></h5>
                                    </div>
                                </div>
                                <!-- Single Feature Category End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Feature Category Start -->
                                <div class="single-feature-category">
                                    <div class="feature-category-box">
                                        <div class="shape-1"></div>
                                        <div class="box-icon">
                                            <a href="course-grid.html"><img src="enquiry/assets/images/icon-6.png"
                                                    alt="Icon"></a>
                                        </div>
                                        <img class="shape-2" src="enquiry/assets/images/shape/shape-10.svg"
                                            alt="Shape">
                                    </div>
                                    <div class="box-content">
                                        <h5 class=""><a href="course-grid.html">Orderly
                                                Conduct, Student Welfare,
                                                Service Delivery, Excellence
                                                Are Core Pursuits</a></h5>
                                    </div>
                                </div>
                                <!-- Single Feature Category End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Feature Category Start -->
                                <div class="single-feature-category">
                                    <div class="feature-category-box">
                                        <div class="shape-1"></div>
                                        <div class="box-icon">
                                            <a href="course-grid.html"><img src="enquiry/assets/images/icon-7.png"
                                                    alt="Icon"></a>
                                        </div>
                                        <img class="shape-2" src="enquiry/assets/images/shape/shape-10.svg"
                                            alt="Shape">
                                    </div>
                                    <div class="box-content">
                                        <h5 class=""><a href="course-grid.html">Awards:
                                                (Just A Few), Best
                                                Polytechnic In Nigeria, Best
                                                Rector In Nigeria, Best
                                                Polytechnic In West Africa</a></h5>
                                    </div>
                                </div>
                                <!-- Single Feature Category End -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-pagination"></div>
                </div>
                <!-- Feature Category End -->

            </div>
        </div>
        <!-- Feature Category End -->

        <!-- Feature Start -->
        <div class="section section-padding bg-color-2 feature-section-02">
            <div class="feature-shape-01"></div>
            <img class="feature-shape-02" src="enquiry/assets/images/shape/shape-11.svg" alt="Shape">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title text-center">
                            <h2 class="title">Whether you want to learn ,
                                you???ve come to the right place</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <!-- Feature Wrapper Start -->
                <div class="feature-wrapper-02">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Single Feature Start -->
                            <div class="single-feature-02">
                                <div class="feature-icon">
                                    <img src="enquiry/assets/images/f-icon-1.png" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">Best Lecturers</h4>
                                    <p>Whether you want to learn or to share
                                        what you know, you???ve come to the
                                        right place. </p>
                                </div>
                            </div>
                            <!-- Single Feature End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Single Feature Start -->
                            <div class="single-feature-02">
                                <div class="feature-icon">
                                    <img src="enquiry/assets/images/f-icon-2.png" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">Secured Lecture Room</h4>
                                    <p>Whether you want to learn or to share
                                        what you know, you???ve come to the
                                        right place. </p>
                                </div>
                            </div>
                            <!-- Single Feature End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Single Feature Start -->
                            <div class="single-feature-02">
                                <div class="feature-icon">
                                    <img src="enquiry/assets/images/f-icon-3.png" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">Best Resources for
                                        learning</h4>
                                    <p>Whether you want to learn or to share
                                        what you know, you???ve come to the
                                        right place. </p>
                                </div>
                            </div>
                            <!-- Single Feature End -->
                        </div>
                    </div>
                </div>
                <!-- Feature Wrapper End -->
            </div>
        </div>
        <!-- Feature End -->

        <!-- Event Start -->
        <div class="section section-padding event-section">

            <img class="event-patan" src="enquiry/assets/images/patan-1.png" alt="patan">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title text-center">
                            <h2 class="title">ADMISSION NOTIFICATION</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <!-- Event Wrapper Start -->
                <div class="evenet-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Single Event Start -->
                            <div class="single-event">
                                <div class="event-image">
                                    <img src="enquiry/assets/images/notificationImage.jpeg" alt="Event"
                                        style="height:8rem ;">
                                </div>
                                <div class="event-content">
                                    <span class="date"> 2022-09-12 08:13:39</span>
                                    <h4 class="title"><a
                                            href="https://federalpolyilaro.edu.ng/news/20222023-provisional-list-of-admissions-highernational-diploma-hnd-full-time-first-list">2022/2023
                                            PROVISIONAL LIST OF ADMISSIONS:
                                            HIGHERNATIONAL DIPLOMA (HND FULL
                                            ???TIME) FIRST LIST</a></h4>
                                </div>
                            </div>
                            <!-- Single Event End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single Event Start -->
                            <div class="single-event">
                                <div class="event-image">
                                    <img src="enquiry/assets/images/notificationImage.jpeg" alt="Event"
                                        style="height:8rem ;">
                                </div>
                                <div class="event-content">
                                    <span class="date">2022-09-07 16:48:30</span>
                                    <h4 class="title"><a
                                            href="https://federalpolyilaro.edu.ng/news/hnd-screening-result">HND
                                            SCREENING RESULT</a></h4>

                                </div>
                            </div>
                            <!-- Single Event End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single Event Start -->
                            <div class="single-event">
                                <div class="event-image">
                                    <img src="enquiry/assets/images/notificationImage.jpeg" alt="Event"
                                        style="height:8rem ;">
                                </div>
                                <div class="event-content">
                                    <span class="date">2022-08-19 09:31:04</span>
                                    <h4 class="title"><a
                                            href="https://federalpolyilaro.edu.ng/news/hnd-screening-exam-date">HND
                                            SCREENING EXAM DATE</a></h4>
                                </div>
                            </div>
                            <!-- Single Event End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single Event Start -->
                            <div class="single-event">
                                <div class="event-image">
                                    <img src="enquiry/assets/images/notificationImage.jpeg" alt="Event"
                                        style="height:8rem ;">
                                </div>
                                <div class="event-content">
                                    <span class="date"> 2022-08-31 18:41:07</span>
                                    <h4 class="title"><a
                                            href="https://federalpolyilaro.edu.ng/news/disclaimer">DISCLAIMER</a></h4>
                                </div>
                            </div>
                            <!-- Single Event End -->
                        </div>
                    </div>
                </div>
                <!-- Event Wrapper End -->

            </div>
        </div>
        <!-- Event End -->

        <!-- Testimonial Start -->
        <div class="section section-padding bg-color-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 d-none d-lg-block">
                        <!-- Testimonial Image 01 Start -->
                        <div class="testimonial-image-01">
                            <div class="testimonial-shape"></div>
                            <div class="image">
                                <img src="enquiry/assets/images/testimonial-1.jpg" alt="Testimonial">
                            </div>
                        </div>
                        <!-- Testimonial Image 01 End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Testimonial Wrapper Start -->
                        <div class="testimonial-wrapper-03
                                testimonial-active-03">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Testimonial Start -->
                                        <div class="testimonial-content-03">
                                            <div class="testimonial-quote">
                                                <i class="flaticon-left-quotes-sign"></i>
                                            </div>
                                            <p>World-class training and
                                                development programs
                                                developed by top teachers
                                                Connect Fellow to the tools
                                                you love.</p>
                                            <div class="meta-content">
                                                <h5 class="name">Martney
                                                    Holder</h5>
                                                <p class="designation">IT
                                                    Specailist</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Testimonial Start -->
                                        <div class="testimonial-content-03">
                                            <div class="testimonial-quote">
                                                <i class="flaticon-left-quotes-sign"></i>
                                            </div>
                                            <p>World-class training and
                                                development programs
                                                developed by top teachers
                                                Connect Fellow to the tools
                                                you love.</p>
                                            <div class="meta-content">
                                                <h5 class="name">Martney
                                                    Holder</h5>
                                                <p class="designation">IT
                                                    Specailist</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Testimonial Start -->
                                        <div class="testimonial-content-03">
                                            <div class="testimonial-quote">
                                                <i class="flaticon-left-quotes-sign"></i>
                                            </div>
                                            <p>World-class training and
                                                development programs
                                                developed by top teachers
                                                Connect Fellow to the tools
                                                you love.</p>
                                            <div class="meta-content">
                                                <h5 class="name">Martney
                                                    Holder</h5>
                                                <p class="designation">IT
                                                    Specailist</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial End -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Testimonial Wrapper End -->
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <!-- Testimonial Image 01 Start -->
                        <div class="testimonial-image-02">
                            <div class="testimonial-shape"></div>
                            <div class="image">
                                <img src="enquiry/assets/images/testimonial-2.jpg" alt="Testimonial">
                            </div>
                        </div>
                        <!-- Testimonial Image 01 End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



        <!-- Footer Start -->
        <div class="footer-section-03 section">
            <div class="container">

                <!-- Footer Copyright End -->
                <div class="footer-copyright footer-copyright-white
                        text-center">
                    <p>&copy; The Federal Polytechnic, Ilaro 2022
                    </p>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top End -->
        <button class="back-btn" id="backBtn"><i class="fa fa-angle-up"></i></button>
        <!-- Back to Top End -->

        <!-- course hover Start -->
        <div id="course-hover">
            <div class="course-hover">
                <div class="courses-content">
                    <div class="top-meta"><a class="tag" href="#">Beginner</a><span class="price"><span
                                class="sale-price">Free</span></span></div>
                    <h3 class="title"><a href="course-details.html">Design
                            101: Product & Web Design Course</a></h3>
                </div>
                <div class="courses-meta">
                    <p class="student"><i class="fa fa-file-text-o"></i> 10
                        Lessons</p>
                    <p class="student"><i class="fa fa-file-text-o"></i> 03
                        Hours</p>
                </div>
                <p>World-class training and development programs developed
                    by top teachers</p>
                <div class="courses-key-future">
                    <h4 class="title">Whats Included</h4>
                    <ul class="future-list">
                        <li>World-class training teacher</li>
                        <li>Bench has zero learning curve</li>
                        <li>We handle the rest.</li>
                    </ul>
                </div>
                <div class="courses-btn"><a class="btn btn-primary
                            btn-hover-heading-color"
                        href="course-details.html">Course
                        Full Details</a></div>
            </div>
        </div>
        <!-- course hover End -->

    </div>

    <!-- JS
            ============================================ -->
@endsection
