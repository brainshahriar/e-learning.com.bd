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

            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Sub-Categories</h4>
                    </div>
                 <div class="tab-inn">
                        <form action="{{ route('subcategory-update') }}" method="POST">
                            @csrf
                    <input type="hidden" name="id" value="{{ $subcategories->id }}">
                <div class="row">
                    <div class="input-field col s12">
                <select class="form-control select2-show-search" data-placeholder="Select One" name="category_id">
                  <option label="Choose one"></option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ $category->id == $subcategories->category_id ? 'selected': '' }}>{{ ucwords($category->category_name) }}</option>
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
                <input type="text" data-ng-model="name"  name="subcategory_name" value="{{ $subcategories->subcategory_name}}">
                @error('subcategory_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            
                            <div class="form-layout-footer">
                              <button type="submit" class="btn btn-info">Update</button>
                            </div><!-- form-layout-footer -->
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 


</div>



@endsection