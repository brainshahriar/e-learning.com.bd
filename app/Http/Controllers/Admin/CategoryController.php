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
        $categories=Category::orderBy('category_name','ASC')->get();
        return view('admin.subcategories.index',compact('subcategories','categories'));
    }
    public function storeSubcategory(Request $request)
    {
       
            $request->validate([
                'subcategory_name' => 'required',
                'category_id' => 'required',
            ],[
                'category_id.required' => 'Select any category',
            ]);
    
            Subcategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),
                'created_at' => Carbon::now(),
               ]);
    
               $notification=array(
                'message'=>'Sub Catetory Added Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        public function editSubcategory($subcategory_id)
        {
            $subcategories = Subcategory::findOrFail($subcategory_id);
            $categories = Category::orderBy('category_name','ASC')->get();
            return view('admin.subcategories.edit',compact('subcategories','categories'));
        }
        public function updateSubcategory(Request $request)
        {
            $request->validate([
                'subcategory_name'=>'required',
                //'category_id'=>'required|unique:categories,category_name',

            ]);
            $subcategory_id = $request->id;
            Subcategory::findOrFail($subcategory_id)->Update([
                'subcategory_name' => $request->subcategory_name,
                'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),
                'updated_at' => Carbon::now(),
               ]);
    
               $notification=array(
                'message'=>'Catetory Update Success',
                'alert-type'=>'success'
            );
            return Redirect()->route('subcategories')->with($notification);
        }
        public function deleteSubcategory($subcategory_id){
            Subcategory::findOrFail($subcategory_id)->delete();
                $notification=array(
                'message'=>'Category Delete Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    

}
