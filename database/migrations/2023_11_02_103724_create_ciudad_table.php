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
        Schema::create('ciudad', function (Blueprint $table) {
            $table->string('codciudad',5)->primary();
            $table->string('nomciudad',50);
            $table->string('fk_coddepto',2);            
            $table->timestamps();
            $table->foreign('fk_coddepto')->references('coddepto')->on('departamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudad');
    }
};
