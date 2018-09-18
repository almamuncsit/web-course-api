<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course__lessons', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('users_id');
            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->unsignedInteger('courses_id');
            $table->foreign('courses_id')
                ->references('id')->on('course__courses')
                ->onDelete('cascade');;

            $table->unsignedInteger('course_sections_id');
            $table->foreign('course_sections_id')
                ->references('id')->on('course__course_sections')
                ->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->string('youtube');
            $table->string('source_code');
            $table->text('description');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->integer('order');
            $table->integer('view');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course__lessons');
    }
}
