@extends('layouts.frontend-master')

@section('frontend-content')

<!-- SLIDER -->
@include('frontend.inc.mobile-menu')

<!--HEADER SECTION-->
@include('frontend.inc.header')

@php
$total_duration = $data;
$H = floor($total_duration / 3600);
$i = ($total_duration / 60) % 60;
$s = $total_duration % 60; 
@endphp 

@php
if($H==NULL)
{
echo sprintf("%02d:%02d", $i, $s);
}
else
{
echo sprintf("%02d:%02d:%02d", $H, $i, $s);
}
@endphp
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-3">
                        <div class="cor-top-deta cor-side-com">
                            <div class="cor-top-deta">
                                <div class="ho-st-login cor-apply field-com">
                                    <div class="col s12">
                                        <form class="col s12">
                                            <div class="cor-left-app-tit">
                                                <h4>Apply This Course</h4>
                                                <p>Nulla at velit convallis lectus.</p>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate">
                                                    <label>Full Name</label>
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
                                                    <input type="text" class="validate">
                                                    <label>Phone</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
									  <option value="" disabled selected>Select Course</option>
									  <option value="1">Option 1</option>
									  <option value="2">Option 2</option>
									  <option value="3">Option 3</option>
									</select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" value="APPLY NOW" class="waves-effect waves-light light-btn">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cor-side-com">
                            <div class="">
                                <div class="de-left-tit">
                                    <h4>Upcoming Event</h4>
                                </div>
                            </div>
                            <div class="ho-event">
                                <ul>
                                    <li>
                                        <div class="ho-ev-link ho-ev-link-full">
                                            <a href="#">
                                                <h4>Workshop PHP</h4>
                                            </a>
                                            <p>Nulla at velit convallis venenatis.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-link ho-ev-link-full">
                                            <a href="#">
                                                <h4>Workshop PHP</h4>
                                            </a>
                                            <p>Nulla at velit convallis venenatis.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-link ho-ev-link-full">
                                            <a href="#">
                                                <h4>Workshop PHP</h4>
                                            </a>
                                            <p>Nulla at velit convallis venenatis.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-link ho-ev-link-full">
                                            <a href="#">
                                                <h4>Workshop PHP</h4>
                                            </a>
                                            <p>Nulla at velit convallis venenatis.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="cor-mid-img">
                            <img src="{{ asset($courses->course_image) }}" alt="">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>{{ $courses->course_name }}</h2>
                               <span>{{ $courses->subcategory->subcategory_name }}</span>
                                <div class="share-btn">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <h3>Course Details:</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going
                                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                                    this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem
                                    Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="cor-p5">
                                <h3>Course Syllabus</h3>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">
									<img src="images/icon/cor4.png" alt=""> <span>Requirements</span></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#menu1"><img src="images/icon/cor3.png" alt=""><span>Fees</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor1.png" alt=""><span>Student Profile</span></a></li>
                                    <li><a data-toggle="tab" href="#menu2"><img src="images/icon/cor5.png" alt=""><span>How to Apply</span></a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h4>Home</h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h4>Menu 1</h4>
                                        <p>Some content in menu 1.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h4>Menu 2</h4>
                                        <p>Some content in menu 2.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cor-p6">
                                <div class="row">
                                    
                           <div class="col-md-8">

                       
                                <h3>Lessons:</h3>
                                @if(count($course->sections) > 0)
                                @foreach($course->sections as $section)
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header active">{{$section->section_name}}</div>
                                        @if(count($section->lessons) > 0)
                                        @foreach($section->lessons as $lesson)
                                        @if($lesson->preview==1)
                                        @if($lesson->video_type=="youtube")
                                        <?php
                                        $video_url=$lesson->video_id;
                                         $api_key='AIzaSyCTmNKu-BRSEPoU_4lpG6NYnLo_MS5vc2w';
                                         preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match);
                                            $video_url = $match[1];
                                            $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.$video_url.'&key='.$api_key;

                                            $data=json_decode(file_get_contents($api_url));

                                            $time=$data->items[0]->contentDetails->duration;

                                        ?>
                                        <div class="collapsible-body cor-tim-tab">

                                            <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{ $lesson->video_id }}" data-gall="myNewGallery">
                                                <strong><i class="fa fa-play-circle"></i> {{$lesson->lesson_title}}</strong>
                              
                                                </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        @php
                                        $timeFormat = new DateTime('1970-01-01');
                                       $timeFormat->add(new DateInterval($time));
                                       if (strlen($time)>8)
                                       {
                                           echo $timeFormat->format('H:i:s');
                                   }   else {
                                       echo $timeFormat->format('i:s');
                                   }
                                   @endphp
                                    </div>
                                        @endif
                                        @endif
                                        @endforeach
                                        @endif
                                    </li>
                                </ul>
                                @endforeach
                                @endif

                                </div>
                            </div>
                            <div class="cor-p6">
                                <h3>Student Reviews</h3>
                                <div class="cor-p6-revi">
                                    <div class="cor-p6-revi-left">
                                        <img src="images/4.jpg" alt="">
                                    </div>
                                    <div class="cor-p6-revi-right">
                                        <h4>Rachel Britain</h4>
                                        <span>Date: 12may, 2017</span>
                                        <p>Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus, lacinia blandit mi tincidunt at. Vivamus vitae interdum felis. Pellentesque congue mollis erat in imperdiet.</p>
                                    </div>
                                </div>
                                <div class="cor-p6-revi">
                                    <div class="cor-p6-revi-left">
                                        <img src="images/4.jpg" alt="">
                                    </div>
                                    <div class="cor-p6-revi-right">
                                        <h4>Rachel Britain</h4>
                                        <span>Date: 12may, 2017</span>
                                        <p>Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus, lacinia blandit mi tincidunt at. Vivamus vitae interdum felis. Pellentesque congue mollis erat in imperdiet.</p>
                                    </div>
                                </div>
                                <div class="cor-p6-revi">
                                    <div class="cor-p6-revi-left">
                                        <img src="images/4.jpg" alt="">
                                    </div>
                                    <div class="cor-p6-revi-right">
                                        <h4>Rachel Britain</h4>
                                        <span>Date: 12may, 2017</span>
                                        <p>Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus, lacinia blandit mi tincidunt at. Vivamus vitae interdum felis. Pellentesque congue mollis erat in imperdiet.</p>
                                    </div>
                                </div>
                                <div class="cor-p6-revi">
                                    <div class="cor-p6-revi-left">
                                        <img src="images/4.jpg" alt="">
                                    </div>
                                    <div class="cor-p6-revi-right">
                                        <h4>Rachel Britain</h4>
                                        <span>Date: 12may, 2017</span>
                                        <p>Mauris elementum et libero ac pharetra. Proin tristique dapibus tellus, lacinia blandit mi tincidunt at. Vivamus vitae interdum felis. Pellentesque congue mollis erat in imperdiet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cor-p6">
                                <h3>Write Reviews</h3>
                                <div class="cor-p7-revi">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" class="validate">
                                                <label>Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" class="validate">
                                                <label>Email id</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"></textarea>
                                                <label>Message</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Submit" class="waves-effect waves-light btn-book">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-3">
                                <div class="ho-lat-ev">
                                    <h4>Student Login</h4>
                                    <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                                </div>
                            </div>
                            <div class="ho-st-login">
                                <div class="col s12">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" class="validate">
                                                <label>Student user name</label>
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
                                                <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-2">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Job Vacants</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Job Vacants</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Job Vacants</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
