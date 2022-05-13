<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons',function(Blueprint $table){
            $table->id();
            $table->bigInteger('id_document')->nullable();
            $table->string('lesson','255')->nullable();
            $table->text('description')->nullable();
            $table->text('requiment')->nullable();
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
        Schema::dropIfExists('lessons');
    }
}
