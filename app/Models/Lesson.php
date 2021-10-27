<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function course(){
        return $this->belongsTo(Course::class, 'course_id','id');
      }
  
      public function section(){
        return $this->belongsTo(Section::class);
      }
}
