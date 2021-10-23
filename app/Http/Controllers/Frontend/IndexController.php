<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Course;

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
}
