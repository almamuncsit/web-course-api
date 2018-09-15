<?php

namespace WebCourse\Http\Controllers;

use Illuminate\Http\Request;
use WebCourse\Models\Course;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    public function index() {
        return Course::all();
    }

    public function show($id) {
        $course = Course::find($id); 
        $course->sections = $course->sections;

        foreach ($course->sections as $key => $section) {
        	$section->lessons = $section->lessons;
        }

        return $course;
    }

}
