<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Section;
use App\Models\Lesson;
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
    public function editCourse($course_id)
    {
        $courses=Course::findOrFail($course_id);
        $categories = Category::latest()->get();
        $subcategories=Subcategory::all();
        return view('admin.course.edit',compact('courses','categories','subcategories'));
        
    }
    //update course
    public function updateCourse(Request $request)
    {
        $course_id = $request->course_id;
        Course::findOrFail($course_id)->Update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'course_name' => $request->course_name,
            'course_slug' => strtolower(str_replace(' ','-',$request->course_name)),
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'status' => 1,
            'updated_at' => Carbon::now(),
           ]);

           $notification=array(
            'message'=>'Course Update Success',
            'alert-type'=>'success'
        );
        return Redirect()->route('course')->with($notification);
    }
    //image update
    public function updateImage(Request $request)
    {
        $course_id=$request->course_id;
        $old_img=$request->old_img;
        unlink($old_img);
        $image = $request->file('course_image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('uploads/course/image/'.$name_gen);
        $save_url = 'uploads/course/image/'.$name_gen;

        Course::findOrFail($course_id)->update([
            'course_image'=>$save_url,
            'updated_at'=>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Course Thambnail Update Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //active inactive
    public function inactive($id)
    {
        Course::findOrFail($id)->update(['status'=>0]);
        $notification=array(
            'message'=>'Inactivated',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function active($id)
    {
        Course::findOrFail($id)->update(['status'=>1]);
        $notification=array(
            'message'=>'Ativated',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function deleteCourse($course_id)
    {
        $courses = Course::findOrFail($course_id);
        unlink($courses->course_image);
        Course::findOrFail($course_id)->delete();
        $notification=array(
            'message'=>'Course Deleted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function lesson($course_id)
    {
        //$lessons=Lesson::where('section_id',$course_id)->get();
      //$sections=Section::where('course_id',$course_id)->get();
        $course= Course::with(['sections.lessons'])->where('id',$course_id)->first();
        return view('admin.course.add-curriculum',compact('course'));
    }
    public function sectionStore(Request $request)
    {
        Section::insert([
            'course_id'=>$request->course_id,
            'serial'=>$request->serial,
            'duration'=>$request->duration,
            'section_name'=>$request->section_name,
            'created_at'=>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Section Created',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function deleteSection($section_id){
        Section::findOrFail($section_id)->delete();
            $notification=array(
            'message'=>'Section Delete Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //store lesson
    public function lessonStore(Request $request)
    {

        function ISO8601ToSeconds($ISO8601){
            $interval = new \DateInterval($ISO8601);
        
            return ($interval->d * 24 * 60 * 60) +
                ($interval->h * 60 * 60) +
                ($interval->i * 60) +
                $interval->s;
        }

        $course_id = $request->course_id;
        $section_id = $request->section_id;
    
    
        $video_type=$request->video_type;
        $lesson_title=$request->lesson_title;
        $video_id=$request->video_id;
        $preview=$request->preview;


           $video_url=$request->video_id;
           $api_key='AIzaSyCTmNKu-BRSEPoU_4lpG6NYnLo_MS5vc2w';
           parse_str( parse_url( $video_url, PHP_URL_QUERY ), $my_array_of_vars );
           $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.$my_array_of_vars['v'].'&key='.$api_key;
           $data=json_decode(file_get_contents($api_url));
           $time=$data->items[0]->contentDetails->duration;
            $x=ISO8601ToSeconds($time);  
        // $duration=$request->$time;
         

            $course = new Lesson();
            $course->course_id = $course_id;
            $course->section_id =$section_id;

            $course->video_type=$video_type;
            $course->lesson_title=$lesson_title;
            $course->video_id=$video_id;
            $course->preview=$preview;
            $course->duration = $x;
            $course->save();

           $notification=array(
            'message'=>'Sub Catetory Added Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function deleteLesson($id){
        Lesson::findOrFail($id)->delete();
            $notification=array(
            'message'=>'Lesson Delete Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

}
