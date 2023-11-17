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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->string('codestudiante',4)->primary();
            $table->string('nomestudiante',50);
            $table->smallInteger('edadestudiante');
            $table->date('fechaestudiante');
            $table->char('generoestudiante',1);
            $table->string('fk_codciudad',5);
            $table->string('fk_codbarrio',3);
            $table->string('fk_codprograma',2);
            $table->timestamps();
            $table->foreign('fk_codciudad')->references('codciudad')->on('ciudad');
            $table->foreign('fk_codbarrio')->references('codbarrio')->on('barrio');
            $table->foreign('fk_codprograma')->references('codprograma')->on('programa');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
