@extends('layouts.frontend-master')

@section('frontend-content')

<!-- SLIDER -->
@include('frontend.inc.mobile-menu')

<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                            </li>
                            <li><a href="#">Phone: +101-1231-1231</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>
                            @auth
                               <li>
                                <a href="{{ route('user.dashboard') }}">My Profile</a>   
                                
                                <a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Sign Out               
                                </a>
                               
                            </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        
                            
                            @else
                            <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                            </li>
                            <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                            </li>
                            @endauth
                        </ul>
                       
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    @include('auth.login')
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend') }}/images/logo.png" alt="" />
                        </a>
                    </div>
                    
                    <div class="main-menu">
                        
                        <ul>
                            <li><a href="index-2.html">Home</a>
                            </li>
                            <li class="about-menu">
                                <a href="about.html" class="mm-arr">All Categories</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="about-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay menu-about" href="admission.html">
                                                        <img src="{{ asset('frontend') }}/images/h-about.jpg" alt="">
                                                        <span>Academics</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mm1-com mm1-s2">
                                                <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                <a href="about.html" class="mm-r-m-btn">Read more</a>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <ul>
                                                    @foreach ($categories as $category)
                                                    <li><a href="course-details.html">{{ $category->category_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s4">
                                                <ul>
                                                    @foreach ($subcategories as $subcategory)
                                                    <li><a href="course-details.html">{{ $subcategory->subcategory_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="admi-menu">
                                <a href="#" class="mm-arr">Admission</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="admi-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="about.html">
                                                        <img src="{{ asset('frontend') }}/images/h-about1.jpg" alt="">
                                                        <span>Academics</span>
                                                    </a>
                                                </div>
                                                <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                <a href="about.html" class="mm-r-m-btn">Read more</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="admission.html">
                                                        <img src="{{ asset('frontend') }}/images/h-adm1.jpg" alt="">
                                                        <span>Admission</span>
                                                    </a>
                                                </div>
                                                <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                <a href="admission.html" class="mm-r-m-btn">Read more</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="awards.html">
                                                        <img src="{{ asset('frontend') }}/images/h-cam1.jpg" alt="">
                                                        <span>History & awards</span>
                                                    </a>
                                                </div>
                                                <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                <a href="awards.html" class="mm-r-m-btn">Read more</a>
                                            </div>
                                            <div class="mm2-com mm1-com mm1-s4">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay" href="seminar.html">
                                                        <img src="{{ asset('frontend') }}/images/h-res1.jpg" alt="">
                                                        <span>Seminar 2018</span>
                                                    </a>
                                                </div>
                                                <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                <a href="seminar.html" class="mm-r-m-btn">Read more</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="all-courses.html">All Courses</a></li>
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            <li class="cour-menu">
                                <a href="#!" class="mm-arr">All Pages</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="cour-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Frontend pages:1</h4>
                                                <ul>
                                                    <li><a href="index-2.html">Home</a></li>
                                                    <li><a href="index-1.html">Home - 1</a></li>
                                                    <li><a href="all-courses.html">All Courses</a></li>
                                                    <li><a href="course-details.html">Course Details</a></li>
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="admission.html">admission</a></li>
                                                    <li><a href="awards.html">awards</a></li>
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="contact-us.html">contact us</a></li>
                                                    <li><a href="departments.html">Departments</a></li>
                                                    <li><a href="events.html">events</a></li>
                                                    <li><a href="event-details.html">event details</a></li>
                                                    <li><a href="event-register.html">event register</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Frontend pages:2</h4>
                                                <ul>
                                                    <li><a href="facilities.html">facilities</a></li>
                                                    <li><a href="facilities-detail.html">facilities detail</a></li>
                                                    <li><a href="research.html">research</a></li>
                                                    <li><a href="seminar.html">seminar</a></li>
                                                    <li><a href="gallery-photo.html">gallery photo</a></li>
                                                </ul>
                                                <h4 class="ed-dr-men-mar-top">User Dashboard</h4>
                                                <ul>
                                                    <li><a href="dashboard.html">Student profile</a></li>
                                                    <li><a href="db-courses.html">Dashboard courses</a></li>
                                                    <li><a href="db-exams.html">Dashboard exams</a></li>
                                                    <li><a href="db-profile.html">Dashboard profile</a></li>
                                                    <li><a href="db-time-line.html">Dashboard timeline</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Admin panel:1</h4>
                                                <ul>
                                                    <li><a href="admin.html">admin</a></li>
                                                    <li><a href="admin-add-courses.html">Add new course</a></li>
                                                    <li><a href="admin-all-courses.html">All courses</a></li>
                                                    <li><a href="admin-student-details.html">Student details</a></li>
                                                    <li><a href="admin-user-add.html">Add new user</a></li>
                                                    <li><a href="admin-user-all.html">All users</a></li>
                                                    <li><a href="admin-panel-setting.html">Admin setting</a></li>
                                                    <li><a href="admin-event-add.html">event add</a></li>
                                                    <li><a href="admin-event-all.html">event all</a></li>
                                                    <li><a href="admin-setting.html">Admin Setting</a></li>
                                                    <li><a href="admin-slider.html">Slider setting</a></li>
                                                    <li><a href="admin-slider-edit.html">Slider edit</a></li>
                                                    <li><a href="admin-course-details.html">course details</a></li>
                                                    <li><a href="admin-login.html">admin login</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s3">
                                                <h4>Admin panel:2</h4>
                                                <ul>
                                                    <li><a href="admin-event-edit.html">event edit</a></li>
                                                    <li><a href="admin-exam-add.html">exam add</a></li>
                                                    <li><a href="admin-exam-all.html">exam all</a></li>
                                                    <li><a href="admin-exam-edit.html">exam edit</a></li>
                                                    <li><a href="admin-export-data.html">export data</a></li>
                                                    <li><a href="admin-import-data.html">import data</a></li>
                                                    <li><a href="admin-job-add.html">Add new jobs</a></li>
                                                    <li><a href="admin-job-all.html">All jobs</a></li>
                                                    <li><a href="admin-job-edit.html">Edit job</a></li>
                                                    <li><a href="admin-main-menu.html">main menu</a></li>
                                                    <li><a href="admin-page-add.html">Add new page</a></li>
                                                    <li><a href="admin-page-all.html">All pages</a></li>
                                                    <li><a href="admin-page-edit.html">Edit page</a></li>
                                                    <li><a href="admin-forgot.html">forgot password</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-cour-com mm1-s4">
                                                <h4>Admin panel:3</h4>
                                                <ul>
                                                    <li><a href="admin-quick-link.html">quick link</a></li>
                                                    <li><a href="admin-seminar-add.html">Add new seminar</a></li>
                                                    <li><a href="admin-seminar-all.html">All seminar</a></li>
                                                    <li><a href="admin-seminar-edit.html">Edit seminar</a></li>
                                                    <li><a href="admin-seminar-enquiry.html">Semester enquiry</a></li>
                                                    <li><a href="admin-all-enquiry.html">All enquiry</a></li>
                                                    <li><a href="admin-view-enquiry.html">All enquiry view</a></li>
                                                    <li><a href="admin-event-enquiry.html">event enquiry</a></li>
                                                    <li><a href="admin-admission-enquiry.html">Admission enquiry</a></li>
                                                    <li><a href="admin-common-enquiry.html">common enquiry</a></li>
                                                    <li><a href="admin-course-enquiry.html">course enquiry</a></li>
                                                    <li><a href="admin-all-menu.html">menu all</a></li>
                                                    <li><a href="admin-about-menu.html">Menu - About</a></li>
                                                    <li><a href="admin-admission-menu.html">Menu - admission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="events.html">Events</a>
                            </li>
                            <li><a href="dashboard.html">Student</a>
                            </li>
                            <li><a href="contact-us.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="all-drop-down-menu">

                </div>

            </div>
        </div>
    </div>
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form>
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                </div>
                                <div class="sf-list">
                                    <ul>
                                        <li><a href="course-details.html">Accounting/Finance</a></li>
                                        <li><a href="course-details.html">civil engineering</a></li>
                                        <li><a href="course-details.html">Art/Design</a></li>
                                        <li><a href="course-details.html">Marine Engineering</a></li>
                                        <li><a href="course-details.html">Business Management</a></li>
                                        <li><a href="course-details.html">Journalism/Writing</a></li>
                                        <li><a href="course-details.html">Physical Education</a></li>
                                        <li><a href="course-details.html">Political Science</a></li>
                                        <li><a href="course-details.html">Sciences</a></li>
                                        <li><a href="course-details.html">Statistics</a></li>
                                        <li><a href="course-details.html">Web Design/Development</a></li>
                                        <li><a href="course-details.html">SEO</a></li>
                                        <li><a href="course-details.html">Google Business</a></li>
                                        <li><a href="course-details.html">Graphics Design</a></li>
                                        <li><a href="course-details.html">Networking Courses</a></li>
                                        <li><a href="course-details.html">Information technology</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="Search Course">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slider1 active">
                <img src="{{ asset('frontend') }}/images/slider/1.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Welcome to <span>University</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend') }}/images/slider/2.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Admission open <span>2018</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend') }}/images/slider/3.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Education <span>Master</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
</section>

<!-- QUICK LINKS -->
<section>
    <div class="container">
        <div class="row">
            <div class="wed-hom-ser">
                <ul>
                    <li>
                        <a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{ asset('frontend') }}/images/icon/h-ic1.png" alt=""> Academy</a>
                    </li>
                    <li>
                        <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{ asset('frontend') }}/images/icon/h-ic2.png" alt=""> Admission</a>
                    </li>
                    <li>
                        <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{ asset('frontend') }}/images/icon/h-ic4.png" alt=""> Courses</a>
                    </li>
                    <li>
                        <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="{{ asset('frontend') }}/images/icon/h-ic3.png" alt=""> Seminar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- DISCOVER MORE -->
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Discover <span>More</span></h2>
                <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
            </div>
        </div>
        <div class="row">
            <div class="ed-course">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="about.html">
                            <img src="{{ asset('frontend') }}/images/h-about.jpg" alt="">
                            <span>Academics</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="admission.html">
                            <img src="{{ asset('frontend') }}/images/h-adm1.jpg" alt="">
                            <span>Admission</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="dashboard.html">
                            <img src="{{ asset('frontend') }}/images/h-cam.jpg" alt="">
                            <span>Students profile</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="research.html">
                            <img src="{{ asset('frontend') }}/images/h-res.jpg" alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="all-courses.html">
                            <img src="{{ asset('frontend') }}/images/h-about1.jpg" alt="">
                            <span>Couse</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="db-time-line.html">
                            <img src="{{ asset('frontend') }}/images/h-adm.jpg" alt="">
                            <span>Exam Time Line</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="seminar.html">
                            <img src="{{ asset('frontend') }}/images/h-cam1.jpg" alt="">
                            <span>Seminar 2018</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="events.html">
                            <img src="{{ asset('frontend') }}/images/h-res1.jpg" alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- POPULAR COURSES -->
<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Popular <span>Courses</span></h2>
                <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    @foreach ($courses as $course)
                        
               
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset($course->course_image) }}" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="{{ url('course-details/'.$course->id.'/'.$course->course_slug) }}">
                                <h3>{{ $course->course_name }}</h3>
                            </a>
                            <h4>{{ $course->subcategory->subcategory_name }}</h4>
                            <p>{!! $course->short_descp !!}</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-2.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Agriculture Courses</h3>
                            </a>
                            <h4>Technology / Space / Aerospace</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-3.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Marine Engineering</h3>
                            </a>
                            <h4>Technology / Ocean / Marine</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-4.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Building, Construction Management</h3>
                            </a>
                            <h4>Technology / Construction / Building</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-5.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Fashion Technology</h3>
                            </a>
                            <h4>Technology / Trends / Fashion</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-6.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Agriculture Courses</h3>
                            </a>
                            <h4>Technology / Space / Aerospace</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-7.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Marine Engineering</h3>
                            </a>
                            <h4>Technology / Ocean / Marine</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="{{ asset('frontend') }}/images/course/sm-8.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Building, Construction Management</h3>
                            </a>
                            <h4>Technology / Construction / Building</h4>
                            <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                    <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UPCOMING EVENTS -->
<section>
    <div class="container com-sp pad-bot-0">
        <div class="row">
            <div class="col-md-4">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>Upcoming Event</h4>
                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <li>
                            <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Latinoo College Expo 2018</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Training at Team Fabio Clemente</h4>
                                </a>
                                <p>Nulla at velit convallis venenatis.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Nulla at velit convallis</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Admissions Information Session and Tour</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-2">
                    <div class="ho-lat-ev">
                        <h4>Job Vacants</h4>
                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <li>
                            <div class="ho-ev-img"><img src="{{ asset('frontend') }}/images/event/1.jpg" alt="">
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Almost before we knew it, we had left the ground</h4>
                                </a>
                                <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
                                <span>Location: New York</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-img"><img src="{{ asset('frontend') }}/images/event/2.jpg" alt="">
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Then came the night of the first falling star.</h4>
                                </a>
                                <p>Vestibulum sollicitudin sem arcu</p>
                                <span>Location: Los Angeles</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-img"><img src="{{ asset('frontend') }}/images/event/3.jpg" alt="">
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Educate to Empower NYE Party</h4>
                                </a>
                                <p>Vestibulum sollicitudin sem arcu, eget ullamcorper purus hendrerit</p>
                                <span>Location: Chennai</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-img"><img src="{{ asset('frontend') }}/images/event/4.jpg" alt=""></div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Then came the night of the first falling star.</h4>
                                </a>
                                <p>Venenatis lacus lectus.</p>
                                <span>Location: Chicago</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-3">
                    <div class="ho-lat-ev">
                        <h4>Register & Login</h4>
                        <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                    </div>
                </div>
                <div class="ho-st-login">
                    <ul class="tabs tabs-hom-reg">
                        <li class="tab col s6"><a href="#hom-vijay">Register</a>
                        </li>
                        <li class="tab col s6"><a href="#hom_log">Login</a>
                        </li>
                    </ul>
                    <div id="hom-vijay" class="col s12">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>User name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Email id</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" class="validate">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" class="validate">
                                    <label>Confirm password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="hom_log" class="col s12">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Student user name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWS AND EVENTS -->
<section>
    <div class="container com-sp">
        <div class="row">
            <div class="con-title">
                <h2>News and <span>Events</span></h2>
                <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="bot-gal h-gal ho-event-mob-bot-sp">
                    <h4>Photo Gallery</h4>
                    <ul>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/8.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/9.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/10.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/11.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/1.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/2.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/3.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/4.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/5.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/6.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/7.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="{{ asset('frontend') }}/images/ami/8.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bot-gal h-vid ho-event-mob-bot-sp">
                    <h4>Video Gallery</h4>
                    <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                    <h5>Maecenas sollicitudin lacinia</h5>
                    <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                    <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bot-gal h-blog ho-event">
                    <h4>News & Event</h4>
                    <div class="ho-event">
                        <ul>
                            <li>
                                <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Latinoo College Expo 2018</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Training at Team Fabio Clemente</h4>
                                    </a>
                                    <p>Nulla at velit convallis venenatis.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Nulla at velit convallis</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                            <li>
                                <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events.html">
                                        <h4>Admissions Information Session and Tour</h4>
                                    </a>
                                    <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    <span>9:15 am – 5:00 pm</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER COURSE BOOKING -->
<section>
    <div class="full-bot-book">
        <div class="container">
            <div class="row">
                <div class="bot-book">
                    <div class="col-md-2 bb-img">
                        <img src="{{ asset('frontend') }}/images/3.png" alt="">
                    </div>
                    <div class="col-md-7 bb-text">
                        <h4>therefore always free from repetition</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                    <div class="col-md-3 bb-link">
                        <a href="course-details.html">Book This Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
