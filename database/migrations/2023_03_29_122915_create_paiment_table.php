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
        Schema::create('paiment', function (Blueprint $table) {
            $table->id('id_paiement');
            $table->foreignId('id_commande')->constrained('commandes', 'id_commande')->onDelete('cascade');
            $table->float('montant');
            $table->date('datee');
            $table->enum('statut_de_paiement',['terminer','en cour','annuler'])->default('en cour');
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
        Schema::dropIfExists('paiment');
    }
};
