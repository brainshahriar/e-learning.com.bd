@extends('layouts.admin-master')
@section('admin-content')
@section('course')
active
@endsection    



<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#">Course</a>
            </li>
            <a href="{{ route('create') }}" type="button" class="btn btn-primary pull-right">Add New</a>
        </ul>

    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Course</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover" id="datatable1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>SubCategory Name</th>
                                        <th>Course Name</th>
                                        <th>Selling Price</th>
                                        <th>Discount Price</th>
                                        <th>Description</th>
                                        <th>Course Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td>{{$loop->index+1}}</span>
                                        </td>
                                        <td>{{ $course->category->category_name }}</td>
                                        <td>{{ $course->subcategory->subcategory_name }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->selling_price }}</td>
                                        <td>{{ $course->discount_price }}</td>
                                        <td>{!! $course->short_descp  !!}</td>
                        
                                          <td>
                                            <img src="{{ asset($course->course_image) }}" alt="" style="width: 80px">
                                         </td>
                                         <td>
                                            @if($course->status==1)
                  
                                            <span class="label label-success">Active</span>
                  
                                            @else
                  
                                            <span class="label label-danger">Inactive</span>
                  
                                            @endif
                                          </td>

                                        <td>
                                            @if($course->status==1)

                                            <a href="{{ url('admin/inactive/'.$course->id) }}" class="btn btn-sm btn-danger" title="inactive">Inactive</a>
                  
                                            @else
                  
                                            <a href="{{ url('admin/active/'.$course->id) }}" class="btn btn-sm btn-success" title="active">Active</a>
                  
                                          @endif
                                            <a  href="{{ url('admin/edit/'.$course->id) }}" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="{{ url('admin/delete/'.$course->id) }}" id="delete" class="btn btn-danger" title="delete data" id="delete">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 


</div>
@endsection


