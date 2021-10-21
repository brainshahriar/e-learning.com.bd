<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="index-2.html"><img src="{{ asset('frontend') }}/images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>Categories</h4>
                      

                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="course-details.html">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>
                                                    
                     
                        <h4>User Account</h4>
                        <ul>
                            <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                            <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                        </ul>
                        <h4>All Pages</h4>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="admission.html">Admission</a></li>
                            <li><a href="all-courses.html">All courses</a></li>
                            <li><a href="course-details.html">Course details</a></li>
                            <li><a href="awards.html">Awards</a></li>
                            <li><a href="seminar.html">Seminar</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="event-details.html">Event details</a></li>
                            <li><a href="event-register.html">Event register</a></li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                        <h4>User Profile</h4>
                        <ul>
                            <li><a href="dashboard.html">User profile</a></li>
                            <li><a href="db-courses.html">Courses</a></li>
                            <li><a href="db-exams.html">Exams</a></li>
                            <li><a href="db-profile.html">Prfile</a></li>
                            <li><a href="db-time-line.html">Time line</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>