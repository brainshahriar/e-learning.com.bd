<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;


class CategoryController extends Controller
{
    public function indexCategory()
    {
        $categories=Category::latest()->get();
        return view('admin.categories.index',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories,category_name',
        ]);
        Category::insert([
            'category_name'=>$request->category_name,
            'category_slug'=>strtolower(str_replace('','-',$request->category_name)),
            'created_at'=>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Category Created',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function update(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories,category_name',
        ]);
        $category_id = $request->id;
        Category::findOrFail($category_id)->Update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
            'updated_at' => Carbon::now(),
           ]);

           $notification=array(
            'message'=>'Catetory Update Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function delete($category_id){
        Category::findOrFail($category_id)->delete();
            $notification=array(
            'message'=>'Category Delete Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //subcategory
    public function indexSubcategory()
    {
        $subcategories=Subcategory::latest()->get();
        return view('admin.subcategories.index',compact('subcategories'));
    }

}
