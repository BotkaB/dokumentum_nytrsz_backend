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
        Schema::create('dokumentum_tipuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ügyfél_főtípus')->references('id')->on('ugyfel_tipuses');;
            $table->string('elnevezés');
            $table->boolean('opcionalis_e')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentum_tipuses');
    }
};
