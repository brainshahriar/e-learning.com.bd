@extends('layouts.admin-master')
@section('admin-content')
@section('categories')
active
@endsection    



<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Categories</a>
            </li>
            <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddCategory">Add New</button>
            @include('admin.modals.categories.add-category')
        </ul>

    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Categories</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover" id="datatable1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
              
                                    <tr>
                                        <td>{{$loop->index+1}}</span>
                                        </td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            <a  class="btn btn-primary" title="Edit Data" data-toggle="modal" data-target="#EditCategory{{ $category->id }}">Edit</a>
                                            <a href="{{ url('admin/category/delete/'.$category->id) }}" id="delete" class="btn btn-danger" title="delete data" id="delete">Delete</a>
                                        </td>
                                        @include('admin.modals.categories.edit-category')
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


