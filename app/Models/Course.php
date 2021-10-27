<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Section;
use App\Models\Lesson;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
    public function sections(){

        return $this->hasMany(Section::class);
       }
       public function lessons(){
   
        return $this->hasMany(Lesson::class,'course_id','id');
       }
}
