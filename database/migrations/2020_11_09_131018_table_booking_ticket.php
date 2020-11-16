<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBookingTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingticket', function (Blueprint $table) {
            $table->bigIncrements('booking_ticket_id');
            $table->string('booking_ticket_name');
            $table->date('booking_ticket_time');
            $table->string('booking_ticket_status');
            $table->bigInteger('tour_id')->unsigned();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('staff_id')->unsigned();
            $table->foreign('tour_id')->references('tour_id')->on('tour');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('staff_id')->references('staff_id')->on('staff');
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
        Schema::dropIfExists('bookingticket');
    }
}
