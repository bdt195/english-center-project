<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code');
            $table->string('name');
            $table->date('start_date');
            $table->string('schedule');
            $table->string('teachers');
            $table->integer('price');
            $table->text('description');
            $table->string('avatar');
            $table->smallInteger('status')->default(0);
            $table->smallInteger('show_on_slider')->default(0);
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
        Schema::dropIfExists('course');
    }
}
