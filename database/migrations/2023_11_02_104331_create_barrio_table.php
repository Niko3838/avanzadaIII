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
        Schema::create('barrio', function (Blueprint $table) {
            $table->string('codbarrio',3)->primary();
            $table->string('nombarrio',50);
            $table->smallInteger('estbarrio');
            $table->smallInteger('comuna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrio');
    }
};
