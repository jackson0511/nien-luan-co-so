<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->bigIncrements('tour_id');
            $table->string('tour_name');
            $table->integer('tour_price');
            $table->integer('tour_seat');
            $table->string('tour_start_location');
            $table->string('tour_end_location');
            $table->date('tour_begin');
            $table->date('tour_end');
            $table->string('tour_picture');
            $table->string('tour_avatar');
            $table->longText('tour_description');
            $table->longText('tour_policies');
            $table->bigInteger('tour_type_id')->unsigned();
            $table->foreign('tour_type_id')->references('tour_type_id')->on('tourtype');
            // $table->bigInteger('promo_id')->unsigned();
            // $table->foreign('promo_id')->references('promo_id')->on('promo');
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
        Schema::dropIfExists('tour');
    }
}
