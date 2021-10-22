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
        </ul>

    </div>

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-8">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>All Sub-Categories</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover" id="datatable1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category</th>
                                        <th>SubCategory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)
              
                                    <tr>
                                        <td>{{$loop->index+1}}</span>
                                        </td>
                                        <td>{{ $subcategory->category->category_name }}</td>
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
            <div class="col-md-4">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Add Sub-Categories</h4>
                    </div>
                 <div class="tab-inn">
                        <form action="{{ route('subcategory-store') }}" method="POST">
                            @csrf
                <div class="row">
                    <div class="input-field col s12">
                <select class="form-control select2-show-search" data-placeholder="Select One" name="category_id">
                  <option label="Choose one"></option>
                  @foreach ($categories as $category)    
                  <option value="{{ $category->id }}">{{ ucwords($category->category_name) }}</option>
                  @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
              @enderror
                    </div>
                </div>
                            <br>
                            <br>

        
            <div class="form-group">
                <input class="form-control" type="text" name="subcategory_name" value="{{ old('subcategory_name') }}" placeholder="Enter subcategory name ">
                @error('subcategory_name')
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


