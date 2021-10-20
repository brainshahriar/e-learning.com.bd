<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories,category_name',
        ]);
        Category::insert([
            'category_name'=>$request->category_name,
            'created_at'=>Carbon::now(),
        ]);
    }
}
