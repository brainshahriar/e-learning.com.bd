@extends('layouts.frontend-master')

@section('frontend-content') 

<!--SECTION START-->
<section>
    <div class="pro-cover">
    </div>
    <div class="pro-menu">
        <div class="container">
            <div class="col-md-9 col-md-offset-3">
                <ul>
                    <li><a href="dashboard.html" class="pro-act">My Dashboard</a></li>
                    <li><a href="db-profile.html">Profile</a></li>
                    <li><a href="db-courses.html">Courses</a></li>
                    <li><a href="db-exams.html">Exams</a></li>
                    <li><a href="db-time-line.html">Time Line</a></li>
                    <li><a href="#">Entry</a></li>
                    <li><a href="#">Notifications</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="stu-db">
        <div class="container pg-inn">
            <div class="col-md-3">
                <div class="pro-user">
                    <img src="{{ Auth::user()->image }}" class="profile_picture" alt="user">
                    <input type="file" name="image" id="image" style="opacity:0;height:1px;display:none">
                    <div class="text-center">
                        <a href="javascript:void(0)" class="btn btn-primary btn-lock" id="change_image"><b>Change Image</b></a>
                       <br><br>
                        <a href="javascript:void(0)" class="btn btn-danger"  data-toggle="modal" data-target="#ChangePassword"><b>Change Password</b></a>
                    </div>

                </div>
                @include('frontend.modals.change-password')

                <div class="pro-user-bio">
                    <ul>
                        <li>
                            <h4>{{ Auth::user()->name }}</h4>
                        </li>
                        <li>Student Id: {{ Auth::user()->id }}</li>
                        <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                        <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                        <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="udb">
                    <div class="udb-sec udb-cour">
                        <h4><img src="{{ asset('frontend') }}/images/icon/db2.png" alt="" /> My Courses</h4>
                        <div class="sdb-cours">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-mig-like-com com-mar-bot-30">
                                            <div class="list-mig-lc-img"> <img src="{{ asset('frontend') }}/images/course/3.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:150 Days</span> </div>
                                            <div class="list-mig-lc-con">
                                                <h5>Master of Science</h5>
                                                <p>Illinois City,</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-mig-like-com com-mar-bot-30">
                                            <div class="list-mig-lc-img"> <img src="{{ asset('frontend') }}/images/course/4.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:60 Days</span> </div>
                                            <div class="list-mig-lc-con">
                                                <h5>Java Programming</h5>
                                                <p>Illinois City,</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-mig-like-com com-mar-bot-30">
                                            <div class="list-mig-lc-img"> <img src="{{ asset('frontend') }}/images/course/5.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:30 Days</span> </div>
                                            <div class="list-mig-lc-con">
                                                <h5>Aeronautical Engineering</h5>
                                                <p>Illinois City,</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-mig-like-com com-mar-bot-30">
                                            <div class="list-mig-lc-img"> <img src="{{ asset('frontend') }}/images/course/3.jpg" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:20 Days</span> </div>
                                            <div class="list-mig-lc-con">
                                                <h5>Master of Science</h5>
                                                <p>Illinois City,</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->
@endsection
