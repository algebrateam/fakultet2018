<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobitelTrgovinaPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobitel_trgovina', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobitel_id')->unsigned();
            $table->integer('trgovina_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobitel_trgovina');
    }
}
