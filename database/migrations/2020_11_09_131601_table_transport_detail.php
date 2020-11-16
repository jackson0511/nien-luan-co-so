<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTransportDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_detail', function (Blueprint $table) {
            $table->bigInteger('transport_id')->unsigned();
            $table->bigInteger('tour_id')->unsigned();
            $table->bigInteger('location_id')->unsigned();
            $table->foreign('transport_id')->references('transport_id')->on('transport');
            $table->foreign('tour_id')->references('tour_id')->on('tour');
            $table->foreign('location_id')->references('location_id')->on('location');
            $table->primary(['transport_id','tour_id','location_id']);
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
        Schema::dropIfExists('transport_detail');
    }
}
