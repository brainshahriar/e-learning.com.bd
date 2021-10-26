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

    <div class="col-md-12">

  @foreach ($sections as $section)

        <div class="accordion" id="faq">
            <div class="card">
                <div class="card-header" id="faqhead1">
                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                    aria-expanded="true" aria-controls="faq1">
                {{ $section->serial }} : {{ $section->section_name }}
                </a>
            
                <a href="{{ url('admin/delete/'.$section->id) }}"  class="btn btn-danger pull-right" title="delete data" id="delete">Delete</a>
                <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddLession">Edit</button>
                <button type="button" class="btn btn-success pull-right"  data-toggle="modal" data-target="#AddLession{{ $section->id }}">ADD</button>
                </div>
                @include('admin.modals.lesson.add-lesson')
                @foreach ($lessons as $lesson)
                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                    <div class="card-body">
                        <div class="card-header" id="faqhead1">
                            <a href="#" class="btn btn-success" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">
                        
                        
                               {{ $lesson->lesson_title }}
                       

                        </a>
                        <button type="button" class="btn btn-danger pull-right"  data-toggle="modal" data-target="#AddLession">Delete</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
                    
  @endforeach
            </div>

</div>
</div>
</div>
</div>





</div>
@endsection


