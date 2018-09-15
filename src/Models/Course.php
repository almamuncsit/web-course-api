<?php

namespace WebCourse\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course__courses';

    public function sections()
    {
    	return $this->hasMany('WebCourse\Models\CourseSection', 'courses_id', 'id');
    }
}
