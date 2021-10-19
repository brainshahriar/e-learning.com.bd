@extends('layouts.admin-master')
@section('admin-content')
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active-bre"><a href="#"> Dashboard</a>
                            </li>
                            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                            </li>
                        </ul>
                    </div>
                    <!--== DASHBOARD INFO ==-->
                    <div class="sb2-2-1">
                        <h2>Admin Dashboard</h2>
                        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
                        <div class="db-2">
                            <ul>
                                <li>
                                    <div class="dash-book dash-b-1">
                                        <h5>All Courses</h5>
                                        <h4>948</h4>
                                        <a href="#">View more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash-book dash-b-2">
                                        <h5>Admission</h5>
                                        <h4>672</h4>
                                        <a href="#">View more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash-book dash-b-3">
                                        <h5>Students</h5>
                                        <h4>689</h4>
                                        <a href="#">View more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash-book dash-b-4">
                                        <h5>Enquiry</h5>
                                        <h4>24</h4>
                                        <a href="#">View more</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
    

                    <!--== User Details ==-->
                    <div class="sb2-2-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Google Map</h4>
                                        <p>Education is about teaching, learning skills and knowledge.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi tab-map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection


