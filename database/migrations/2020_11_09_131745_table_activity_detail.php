<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableActivityDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_detail', function (Blueprint $table) {
            $table->date('ad_begin');
            $table->date('ad_end');
            $table->bigInteger('tour')->unsigned();
            $table->bigInteger('activity')->unsigned();
            $table->bigInteger('location')->unsigned();
            $table->bigInteger('date')->unsigned();
            $table->bigInteger('session')->unsigned();
            $table->foreign('tour')->references('tour_id')->on('tour');
            $table->foreign('activity')->references('activity_id')->on('activity');
            $table->foreign('location')->references('location_id')->on('location');
            $table->foreign('date')->references('date_id')->on('date');
            $table->foreign('session')->references('session_id')->on('session');
            $table->primary(['tour','activity','location','date','session']);
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
        Schema::dropIfExists('activity_detail');
    }
}
