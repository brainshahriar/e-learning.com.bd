<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class UserEnrollController extends Controller
{
    public function index()
    {
        $users=User::all();
        $courses=Course::all();
        return view('admin.user.user-list',compact('courses','users'));
    }
}
