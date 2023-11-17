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
        Schema::create('decano', function (Blueprint $table) {
            $table->string('coddecano',2)->primary();
            $table->string('nomdecano',100);
            $table->string('fk_facultad',2);
            $table->timestamps();
            $table->foreign('fk_facultad')->references('codfacultad')->on('facultad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decano');
    }
};
