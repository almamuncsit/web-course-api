<?php

namespace WebCourse\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use WebCourse\Models\Course;
use WebCourse\Models\Lesson;

class LessonController extends Controller
{


    public function show($id) {
    	$data = new \stdClass();
        $data->lesson = Lesson::find($id); 
        $course = Course::find($data->lesson->courses_id);
        $course->sections = $course->sections;

        foreach ($course->sections as $key => $section) {
        	$section->lessons = $section->lessons;
        }
        
        $data->course = $course;

        return response()->json($data);
    }

}
