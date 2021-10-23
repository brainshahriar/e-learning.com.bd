<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;

use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Frontend\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[IndexController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin routes
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'Admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //categories
    Route::get('categories',[CategoryController::class,'indexCategory'])->name('categories');
    Route::post('category/store',[CategoryController::class,'store'])->name('category-store');
    Route::post('category/update',[CategoryController::class,'update'])->name('category-update');
    Route::get('category/delete/{category_id}',[CategoryController::class,'delete']);
    //subcategory
    Route::get('subcategories',[CategoryController::class,'indexSubcategory'])->name('subcategories');
    Route::post('subcategory/store',[CategoryController::class,'storeSubcategory'])->name('subcategory-store');
    Route::get('subcategory/edit/{subcategory_id}',[CategoryController::class,'editSubcategory']);
    Route::post('subcategory/update',[CategoryController::class,'updateSubcategory'])->name('subcategory-update');
    Route::get('subcategory/delete/{subcategory_id}',[CategoryController::class,'deleteSubcategory']);
    //course
    Route::get('course',[CourseController::class,'indexCourse'])->name('course');
    Route::get('create',[CourseController::class,'create'])->name('create');

    Route::get('subcategory/ajax/{category_id}',[CourseController::class,'getSubCategory']);

    Route::post('store',[CourseController::class,'storeCourse'])->name('course-store');
    Route::get('edit/{course_id}',[CourseController::class,'editCourse']);
    Route::post('course/update',[CourseController::class,'updateCourse'])->name('course-update');
    Route::post('course/image/update',[CourseController::class,'updateImage'])->name('image-update');
    Route::get('delete/{course_id}',[CourseController::class,'deleteCourse']);

    //active inactive
    Route::get('/inactive/{id}',[CourseController::class,'inactive']);
    Route::get('/active/{id}',[CourseController::class,'active']);


});


//user routes
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');

    Route::post('change-profile-picture',[UserController::class,'updatePicture'])->name('profile-picture-update');
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');

});

//frontend routes