<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Section;

class IndexController extends Controller
{
    //index page
    public function index()
    {
        $categories=Category::orderBy('category_name','ASC')->get();
        $subcategories=Subcategory::orderBy('subcategory_name','DESC')->get();
        $courses=Course::where('status',1)->orderBy('id','DESC')->get();
        return view('frontend.index',compact('categories','subcategories','courses'));
    }
    public function courseDetails($course_id,$slug)
    {
       
        $data=Lesson::where('course_id',$course_id)->sum('duration');
        $categories=Category::orderBy('category_name','ASC')->get();
        $courses=Course::findOrFail($course_id);
        $subcategories=Subcategory::where('subcategory_name',$courses->id)->get();
        $course= Course::with(['sections.lessons'])->where('id',$course_id)->first();
        return view('frontend.course.course-details',compact('categories','course','subcategories','courses','data'));
    }

}
