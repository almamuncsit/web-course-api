<?php

namespace WebCourse\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'course__lessons';


    public function sections()
    {
    	return $this->belongsTo('WebCourse\Models\CourseSection', 'course_sections_id', 'id');
    }


    public function course()
    {
    	return $this->belongsTo('WebCourse\Models\Course', 'courses_id', 'id');
    }
}
