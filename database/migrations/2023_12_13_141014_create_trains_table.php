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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 30);
            $table->string('stazione_arrivo', 30);
            $table->date('giorno_partenza');
            $table->date('giorno_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->unsignedInteger('codice_treno')->unique();
            $table->unsignedTinyInteger('numero_carrozze');
            $table->unsignedTinyInteger('in_orario')->default(1);
            $table->unsignedTinyInteger('cancellato')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
