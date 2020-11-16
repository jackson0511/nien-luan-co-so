<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableEat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eat', function (Blueprint $table) {
            $table->integer('price');
            $table->bigInteger('restaurant_id')->unsigned();
            $table->bigInteger('menu_id')->unsigned();
            $table->bigInteger('dish_id')->unsigned();
            $table->bigInteger('session_id')->unsigned();
            $table->foreign('restaurant_id')->references('restaurant_id')->on('restaurant');
            $table->foreign('menu_id')->references('menu_id')->on('menu');
            $table->foreign('dish_id')->references('dish_id')->on('dish');
            $table->foreign('session_id')->references('session_id')->on('session');
            $table->primary(['restaurant_id','menu_id','dish_id','session_id']);
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
        Schema::dropIfExists('eat');
    }
}
