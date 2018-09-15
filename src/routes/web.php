<?php


Route::group(['middleware'=> 'web', 'prefix' => 'course', 'namespace' => 'WebCourse\Http\Controllers'], function() {

    Route::post('/registration', 'Auth\RegistrationController@create')->name('course.register');

});
