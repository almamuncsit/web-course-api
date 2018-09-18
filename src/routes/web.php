<?php


Route::group(['middleware'=> 'web', 'prefix' => 'course', 'namespace' => 'WebCourse\Http\Controllers'], function() {

    // Set redis to check is it working or not
    Route::get('set', function (){
        Redis::set('name', 'Mamun sarkar');
    });

    // Get value from redis to check is it working or not
    Route::get('get', function (){
        return Redis::get('name');
    });

    // Check if a notification with broadcasting working or not
    Route::get('notification', function (){
        \WebCourse\Models\User::find(1)->notify((new \WebCourse\Notifications\RegistrationNotification())->delay(now()->addSeconds(10)));
    });

});
