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
        Schema::create('regnota', function (Blueprint $table) {
            $table->string('fk_codestudiante',4);
            $table->string('fk_codmateria',2);
            $table->string('fk_codprofesor',2);
            $table->decimal('parcial1', 5,2)->unsigned();
            $table->decimal('parcial2', 5,2)->unsigned();
            $table->decimal('efinal', 5,2)->unsigned();
            $table->decimal('nfinal', 5,2)->unsigned();
            $table->char('estado', 1);
            $table->timestamps();
            $table->foreign('fk_codestudiante')->references('codestudiante')->on('estudiante');
            $table->foreign('fk_codmateria')->references('codmateria')->on('materia');
            $table->foreign('fk_codprofesor')->references('codprofesor')->on('profesor');
            $table->primary(['fk_codestudiante', 'fk_codmateria', 'fk_codprofesor']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regnota');
    }
};
