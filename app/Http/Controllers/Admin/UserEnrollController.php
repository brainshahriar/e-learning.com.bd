<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Enroll;
use Carbon\Carbon;

class UserEnrollController extends Controller
{
    public function index()
    {
        $enrolls=Enroll::all();
        return view('admin.user.user-list',compact('enrolls'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'course_id'=>'required|unique:courses,course_name',
        ]); 
        Enroll::insert([
            'user_id'=>$request->user_id,
            'course_id'=>$request->course_id,
            'price'=>$request->price,
            'access'=>$request->access,
            'created_at'=>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Enrolled',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
