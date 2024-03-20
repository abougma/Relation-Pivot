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
        Schema::create('seance', function (Blueprint $table) {
            $table->id();
            $table->string('matiere_id');
            $table->string('intitule');
            $table->dateTime('date_debut_seance');
            $table->dateTime('date_fin_seance');
            $table->dateTime('duration');
            $table->string('seance_id_externe');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seance');
    }
};
