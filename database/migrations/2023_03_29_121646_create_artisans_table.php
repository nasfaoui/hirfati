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
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->string('nom');
            $table->string('description');
            $table->string('photo_de_profil')->nullable();
            $table->float('tarif_horaire');
            $table->boolean('disponibilite');
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
