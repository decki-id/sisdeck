<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisdeckStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sisdeck_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('sub_district');
            $table->string('district');
            $table->string('province');
            $table->string('nationality');
            $table->integer('post_code');
            $table->text('current_address')->nullable();
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->string('guardian_phone');
            $table->tinyInteger('status');
            $table->date('date_registered');
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('sisdeck_students');
    }
}