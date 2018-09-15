<?php


Route::group(['middleware'=> 'web', 'prefix' => 'course', 'namespace' => 'WebCourse\Http\Controllers'], function() {

//    Route::post('/registration', 'Auth\RegistrationController@create')->name('course.register');

    Route::get('set', function (){
        Redis::set('name', 'Mamun sarkar asdl');
    });

    Route::get('get', function (){
        return Redis::get('name');
    });

    Route::get('notification', function (){
//        dd(config('broadcasting.connections.pusher'));
        \WebCourse\Models\User::find(1)->notify((new \WebCourse\Notifications\RegistrationNotification())->delay(now()->addSeconds(10)));
    });

});
