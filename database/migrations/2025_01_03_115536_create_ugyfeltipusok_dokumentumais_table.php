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
        Schema::create('ugyfel_tipusok_dokumentumai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ugyfel_tipus_id')->references('ugyfel_tipus_id')->on('ugyfel_tipuses');
            $table->foreignId('dokumentum_tipus_id')->references('dokumentum_tipus_id')->on('dokumentum_tipuses'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugyfel_tipusok_dokumentumai');
    }
};
