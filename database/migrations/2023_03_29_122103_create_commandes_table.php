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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('id_commande');
            $table->foreignId('id_service')->constrained('services', 'id_service')->onDelete('cascade');
            $table->foreignId('id_client')->constrained('users', 'id_user')->onDelete('cascade');
            $table->date('date_commande');
            $table->float('montant');
            $table->enum('statut',['terminer','en cour','annuler']);
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
        Schema::dropIfExists('commandes');
    }
};
