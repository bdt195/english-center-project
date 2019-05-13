<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacilityConstrain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->unsignedBigInteger('facility_id')->after('id');

            $table->foreign('facility_id')
                ->references('id')->on('facility')
                ->onDelete('cascade');
        });

        Schema::table('test', function (Blueprint $table) {
            $table->unsignedBigInteger('facility_id')->after('id');

            $table->foreign('facility_id')
                ->references('id')->on('facility')
                ->onDelete('cascade');
        });

        Schema::table('recruitment', function (Blueprint $table) {
            $table->unsignedBigInteger('facility_id')->after('id');

            $table->foreign('facility_id')
                ->references('id')->on('facility')
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
        //
    }
}
