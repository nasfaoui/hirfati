<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisans', function (Blueprint $table) {
            $table->id('id_artiste');
            $table->string('nom');
            $table->string('description')->nullable();
            $table->string('photo_de_profil')->nullable();
            $table->float('tarif_horaire')->nullable();
            $table->integer('tele')->unique()->nullable();
            $table->string('ville');
            $table->string('email')->unique();
            $table->boolean('disponibilite')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('artisans');
    }
};
