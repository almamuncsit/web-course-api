<?php

namespace WebCourse;

use Illuminate\Support\ServiceProvider;

class WebCourseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'course');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/course.php', 'course');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/course'),
            __DIR__.'/config/course.php' => config_path('course.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
