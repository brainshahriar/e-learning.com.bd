<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Subcategory;
use Image;
use Carbon\Carbon;

class CourseController extends Controller
{
    public function indexCourse()
    {
        $courses=Course::latest()->get();
        return view('admin.course.index',compact('courses'));
    }
    public function create()
    {
        $subcategories=Subcategory::orderBy('subcategory_name','ASC')->get();
        $categories=Category::orderBy('category_name','ASC')->get();
        return view('admin.course.create',compact('subcategories','categories'));
    }
    //ajax subcategory
    public function getSubCategory($category_id)
    {
        $subcategories=Subcategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcategories);
    }
    //course store
    public function storeCourse(Request $request){

        $image = $request->file('course_image');
                $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(917,1000)->save('uploads/course/image/'.$name_gen);
                $save_url = 'uploads/course/image/'.$name_gen;
    
                    Course::insert([
                    'category_id' => $request->category_id,
                    'subcategory_id' => $request->subcategory_id,
                    'course_name' => $request->course_name,
                    'course_slug' => strtolower(str_replace(' ','-',$request->course_name)),
                    'selling_price' => $request->selling_price,
                    'discount_price' => $request->discount_price,
                    'short_descp' => $request->short_descp,
                    'course_image' => $save_url,
                    'status' => 1,
                    'created_at' => Carbon::now(),
    
    
        ]);
    
    
        $notification=array(
            'message'=>'Course Added',
            'alert-type'=>'success'
        );
        return Redirect()->route('course')->with($notification);
    }
}
