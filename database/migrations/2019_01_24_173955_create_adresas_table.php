<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trgovina_id')->unsigned()->nullable();
            $table->string('slika')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('pbr');
            $table->string('street');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('adresas');
    }
}
