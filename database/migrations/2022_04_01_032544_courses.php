<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses',function(Blueprint $table){
            $table->id();
            $table->bigInteger('id_courses_tags')->nullable();
            $table->bigInteger('id_review')->nullable();
            $table->bigInteger('id_lesson')->nullable();
            $table->string('courses','255')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('avatar','255')->nullable();
            $table->integer("time")->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
