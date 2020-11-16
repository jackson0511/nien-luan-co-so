<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePositionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_detail', function (Blueprint $table) {
            $table->date('pd_begin_date');
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('position_id')->unsigned();
            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->foreign('position_id')->references('position_id')->on('position');
            $table->primary(['staff_id', 'position_id']);
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
        Schema::dropIfExists('position_detail');
    }
}
