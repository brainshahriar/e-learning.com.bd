@extends('layouts.admin-master')
@section('admin-content')
@section('categories')
active
@endsection    
<style>
#main {
margin: 50px 0;
}

#main #faq .card {
margin-bottom: 30px;
border: 0;
}

#main #faq .card .card-header {
border: 0;
-webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
border-radius: 2px;
padding: 0;
}

#main #faq .card .card-header .btn-header-link {
color: #fff;
display: block;
text-align: left;
background: #FFE472;
color: #222;
padding: 20px;
}

#main #faq .card .card-header .btn-header-link:after {
content: "\f107";
font-family: 'Font Awesome 5 Free';
font-weight: 900;
float: right;
}

#main #faq .card .card-header .btn-header-link.collapsed {
background: #A541BB;
color: #fff;
}

#main #faq .card .card-header .btn-header-link.collapsed:after {
content: "\f106";
}

#main #faq .card .collapsing {
background: #FFE472;
line-height: 30px;
}

#main #faq .card .collapse {
border: 0;
}

#main #faq .card .collapse.show {
background: #FFE472;
line-height: 30px;
color: #222;
}
</style>


<div class="sb2-2">
<!--== breadcrumbs ==-->
<div class="sb2-2-2">
<ul>
<button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddSection">Add New</button>
@include('admin.modals.section.add-section')
</ul>

</div>
<div class="sb2-2-3">
<div class="row">
<div class="col-md-12">
<div class="box-inn-sp">
<div class="inn-title">
<h4>Course Curricullum</h4>
</div>
@if(count($course->sections) > 0)
@foreach($course->sections as $section)
    <div class="col-md-12">
        <div class="accordion" id="accordionExample{{$section->id}}">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $section->serial }} : {{ $section->section_name }}
                </button>
                <a href="{{ url('admin/delete/'.$section->id) }}"  class="btn btn-danger pull-right" title="delete data" id="delete">Delete</a>
                <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddLession">Edit</button>
                <button type="button" class="btn btn-success pull-right"  data-toggle="modal" data-target="#AddLession{{ $section->id }}">ADD</button>
              </h2>
              @include('admin.modals.lesson.add-lesson')
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                @if(count($section->lessons) > 0)
                @foreach($section->lessons as $lesson)
                <div class="accordion-body">
                    <button class="btn">{{ $lesson->lesson_title }}</button>
                    <a href="{{ url('admin/delete-lesson/'.$lesson->id) }}"  class="btn btn-danger pull-right" title="delete data" id="delete">Delete</a>
                </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
            </div>
            @endforeach
            @endif
</div>
</div>
</div>
</div>





</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection


