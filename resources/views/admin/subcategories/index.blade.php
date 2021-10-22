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
            <li class="active-bre"><a href="#">Categories</a>
            </li>
            <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#AddSubcategory">Add New</button>
            @include('admin.modals.subcategories.add-subcategory')
        </ul>

    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-8">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Subategories</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover" id="datatable1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>SubCategory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)
              
                                    <tr>
                                        <td>{{$loop->index+1}}</span>
                                        </td>
                                        <td>{{ $subcategory->subcategory_name }}</td>
                                        <td>
                                            <a  class="btn btn-primary" title="Edit Data" data-toggle="modal" data-target="#EditSubategory{{ $subcategory->id }}">Edit</a>
                                            <a href="{{ url('admin/category/delete/'.$subcategory->id) }}" id="delete" class="btn btn-danger" title="delete data" id="delete">Delete</a>
                                        </td>
                                        @include('admin.modals.subcategories.edit-subcategory')
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Sub-Categories</h4>
                    </div>
                 <div class="tab-inn">
                        <form action="" method="POST">
                            @csrf
                <div class="row">
                    <div class="input-field col s12">
                <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
                    </div>
                </div>
                            <br>
                            <br>

        
            <div class="form-group">
                <input class="form-control" type="text" name="subcategory_name_en" value="{{ old('subcategory_name_en') }}" placeholder="Enter subcategory name en">
                @error('subcategory_name_en')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        
        
                            <div class="form-layout-footer">
                              <button type="submit" class="btn btn-info">Add New</button>
                            </div><!-- form-layout-footer -->
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 


</div>
@endsection


