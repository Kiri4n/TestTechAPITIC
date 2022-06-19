<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->id('personnage_id');
            $table->string('pseudo');
            $table->integer('pv');
            $table->string('proprietaire');
            $table->timestamps();

            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('race_id')->on('race');

            $table->unsignedBigInteger('armure_id');
            $table->foreign('armure_id')->references('armure_id')->on('armure');

            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('classe_id')->on('class');

            $table->unsignedBigInteger('specialisation_id');
            $table->foreign('specialisation_id')->references('specialisation_id')->on('specialisation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
}
