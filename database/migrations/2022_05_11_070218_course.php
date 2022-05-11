<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Course extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();
            $table->string('avatar')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->timestamps();
            $table->bigInteger('id_course_tag')->nullable();
            $table->bigInteger('id_review')->nullable();
            $table->bigInteger('id_lesson')->nullable();
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
        Schema::dropIfExists('course');
    }
}
