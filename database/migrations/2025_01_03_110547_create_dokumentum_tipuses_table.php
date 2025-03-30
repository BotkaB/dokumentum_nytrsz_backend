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
            $table->id('dokumentum_tipus_id');
            $table->foreignId('elszamolas_tipus_id')->references('elszamolas_tipus_id')->on('elszamolas_tipuses');
            $table->string('dokumentum_neve')->unique();
          

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
