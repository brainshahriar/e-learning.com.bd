@extends('layouts.admin-master')
@section('admin-content')
@section('course')
active
@endsection    



<div class="sb2-2">
    <!--== breadcrumbs ==-->

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit Courses</h4>
                    </div>
                 <div class="tab-inn">
                        <form action="{{ route('course-update') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="course_id" value={{ $courses->id }}>
                <div class="row">
                    <div class="input-field col s12">
                <select class="form-control select2-show-search" data-placeholder="Select Category" name="category_id" data-validation="required">
                  <option label="Choose one"></option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ $category->id == $courses->category_id ? 'selected': '' }}>{{ ucwords($category->category_name) }}</option>
                  @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
              @enderror
                    </div>
                </div>
                <br>   
                    <div class="row">
                        <div class="input-field col s12">
                    <select class="form-control select2-show-search" data-placeholder="Select Sub-Category" name="subcategory_id" data-validation="required">
                        <option label="Choose one"></option>
              
                    </select>
                    @error('subcategory_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                            </div>
                         <br>
                         <br>
        
            <div class="form-group">
                <input class="form-control" type="text" name="course_name" placeholder="Enter Course Name " data-validation="required" value="{{ $courses->course_name }}">
                @error('course_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="selling_price" placeholder="Enter Selling Price " data-validation="required" value="{{ $courses->selling_price }}">
                @error('selling_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="discount_price" placeholder="Enter Discount Price " value="{{ $courses->discount_price }}">
                @error('discount_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Enter Short Description : </label>
                <textarea name="short_descp" id="summernote" placeholder="Enter Short Description" required>
                    {{ $courses->short_descp }}
                </textarea>
                @error('short_descp')
                <span class="text-danger">{{ $message }}</span>
              @enderror
              </div>
              {{-- <div class="form-group">
                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                <input class="form-control" type="file" name="course_image"  onchange="CourseImage(this)" data-validation="required">
                @error('course_image')
                <span class="text-danger">{{ $message }}</span>
              @enderror
              <img src="" id="mainThmb">
              </div> --}}
                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info">Update</button>
                </div><!-- form-layout-footer -->
                    </form>
                    <br>
                    <form action="{{ route('image-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="course_id" value={{ $courses->id }}>
                        <input type="hidden" name="old_img" value={{ $courses->course_image }}>
                        
                      <div class="row md-sm" style="margin-top=30px">           
                          <div class="col-md-3">
                          <div class="card">
                            <img style="height:50px" src="{{ asset($courses->course_image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">
                                <div class="form-group">
                                    <label class="form-control-label">Change Image: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="file" name="course_image"  onchange="CourseImage(this)" data-validation="required">
                                  <img src="" id="mainThmb">
                                  </div>
                              </p>
                            </div>
                
                          </div>
                        </div>
                                             
                      </div>
                      <div class="form-layout-footer mt-3">
                        <button class="btn btn-info mg-r-5" type="submit" style="cursor: pointer;">Update Image</button>      
                      </div>        
                      </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

 


</div>
<script src="{{asset('backend')}}/lib/jquerysubsubcategory/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="category_id"]').on('change', function(){
        var category_id = $(this).val();
        if(category_id) {
            $.ajax({
                url: "{{  url('/admin/subcategory/ajax') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                   var d =$('select[name="subcategory_id"]').empty();
                      $.each(data, function(key, value){
                          $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                      });
                },
            });
        } else {
            alert('danger');
        }
    });
});
</script>
<script>
    function CourseImage(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
            $('#mainThmb').attr('src',e.target.result).width(80)
                  .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
@endsection


