<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableStay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stay', function (Blueprint $table) {
            $table->bigInteger('tour_id')->unsigned();
            $table->bigInteger('hotel_id')->unsigned();
            $table->bigInteger('date_id')->unsigned();
            $table->bigInteger('location_id')->unsigned();
            $table->foreign('tour_id')->references('tour_id')->on('tour');
            $table->foreign('hotel_id')->references('hotel_id')->on('hotel');
            $table->foreign('date_id')->references('date_id')->on('date');
            $table->foreign('location_id')->references('location_id')->on('location');
            $table->primary(['tour_id','hotel_id','date_id','location_id']);
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
        Schema::dropIfExists('stay');
    }
}
