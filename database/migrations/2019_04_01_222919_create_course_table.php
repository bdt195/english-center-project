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
            $table->unsignedBigInteger('category_id');
            $table->string('code');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('schedule');
            $table->string('teachers');
            $table->integer('price');
            $table->string('sort_description');
            $table->text('description');
            $table->string('avatar')->nullable();
            $table->smallInteger('status')->default(0);
            $table->smallInteger('show_in_slider')->default(0);
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('course_category')
                ->onDelete('cascade');

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
