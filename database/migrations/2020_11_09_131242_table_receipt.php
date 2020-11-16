<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableReceipt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->bigIncrements('receipt_id');
            $table->string('receipt_number');
            $table->string('receipt_name');
            $table->string('receipt_total');
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('booking_ticket_id')->unsigned();
            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->foreign('booking_ticket_id')->references('booking_ticket_id')->on('bookingticket');
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
        Schema::dropIfExists('receipt');
    }
}
