<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisdeckCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisdeck_courses', function (Blueprint $table) {
            $table->bigIncrements('course_id');
            $table->string('course_code')->unique();
            $table->string('course_name');
            $table->longText('course_description');
            $table->tinyInteger('course_status');
            $table->softDeletes();
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
        Schema::dropIfExists('sisdeck_courses');
    }
}
