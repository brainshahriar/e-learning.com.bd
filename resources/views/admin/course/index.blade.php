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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $subcategory)
              
                                    <tr>
                                        <td>{{$loop->index+1}}</span>
                                        </td>
                                        {{-- <td>{{ $subcategory->category->category_name }}</td> --}}
                                        <td>{{ $subcategory->subcategory_name }}</td>
                                        <td>
                                            <a  href="{{ url('admin/subcategory/edit/'.$subcategory->id) }}" class="btn btn-primary" title="Edit Data">Edit</a>
                                            <a href="{{ url('admin/subcategory/delete/'.$subcategory->id) }}" id="delete" class="btn btn-danger" title="delete data" id="delete">Delete</a>
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


