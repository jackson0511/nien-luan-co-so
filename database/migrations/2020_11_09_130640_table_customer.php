<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->string('customer_name');
            $table->string('customer_tel');
            $table->text('customer_address');
            $table->string('customer_email');
            $table->integer('customer_age');
            $table->string('customer_gender');
            $table->string('username');
            $table->string('password');
            $table->string('avatar');
            $table->bigInteger('nation_id')->unsigned();
            $table->foreign('nation_id')->references('nation_id')->on('nation');
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
        Schema::dropIfExists('customer');
    }
}
