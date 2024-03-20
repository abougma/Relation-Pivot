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
        Schema::create('seance_enseignant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id');
            $table->unsignedBigInteger('enseignant_id');
            $table->unsignedBigInteger('emargement_id');

            // Clés étrangères
            $table->foreign('seance_id')->references('id')->on('seance')->onDelete('cascade');
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade');
            $table->foreign('emargement_id')->references('id')->on('emargement')->onDelete('cascade');

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seance_enseignants');
    }
};
