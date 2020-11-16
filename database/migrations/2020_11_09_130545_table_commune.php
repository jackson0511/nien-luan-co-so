<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCommune extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commune', function (Blueprint $table) {
            $table->bigIncrements('commune_id');
            $table->string('commune_name');
            $table->bigInteger('district_id')->unsigned();
            $table->foreign('district_id')->references('district_id')->on('district');
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
        Schema::dropIfExists('commune');
    }
}
