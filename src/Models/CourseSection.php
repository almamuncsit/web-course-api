<?php

namespace WebCourse\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    protected $table = 'course__course_sections';


    public function course()
    {
    	return $this->belongsTo('WebCourse\Models\Course', 'courses_id', 'id');
    }


    public function lessons() 
    {
    	return $this->hasMany('WebCourse\Models\Lesson', 'course_sections_id', 'id');
    }

}
