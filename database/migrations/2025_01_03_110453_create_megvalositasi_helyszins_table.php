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
        Schema::create('megvalositasi_helyszins', function (Blueprint $table) {
            $table->id('azon');
            $table->integer('intézet')->nullable()->default(null);
            $table->string('név');
            $table->tinyInteger('agglomeráció')->nullable()->default(null);
            $table->string('régió')->nullable()->default(null);
            $table->string('típus')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('megvalositasi_helyszins');
    }
};
