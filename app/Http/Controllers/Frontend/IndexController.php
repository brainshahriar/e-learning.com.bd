<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class IndexController extends Controller
{
    //index page
    public function index()
    {
        $categories=Category::all();
        $subcategories=Subcategory::all();
        return view('frontend.index',compact('categories','subcategories'));
    }
}
