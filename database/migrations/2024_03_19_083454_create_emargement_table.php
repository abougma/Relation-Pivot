<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emargement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id');
            $table->foreign('seance_id')->references('id')->on('seance')->onDelete('cascade');
            $table->string('objet_type');
            $table->string('objet_id');
            $table->datetime('date_emargement');
            $table->string('statut_presence');
            $table->string('commentaire')->nullable();
            $table->datetime('date_debut_com')->nullable();
            $table->datetime('date_fin_com')->nullable();
            $table->string('chemin_sign')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emargement');
    }
};
