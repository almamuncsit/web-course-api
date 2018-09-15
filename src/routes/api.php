<?php


Route::group(['middleware' => ['api'], 'prefix' => 'course/api', 'namespace' => 'WebCourse\Http\Controllers'], function() {

    Route::get('/all-courses', 'CourseController@index');
    Route::post('/register', 'Auth\RegistrationController@create');

     Route::group(['middleware' => 'auth:api'], function() {
        Route::get('/course/{id}', 'CourseController@show');
        Route::get('/lesson/{id}', 'LessonController@show');
     });

});
