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
        Schema::create('dokumentumoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('megvalositasi_helyszin_id')->references('megvalositasi_helyszin_id')->on('megvalositasi_helyszins');
            $table->foreignId('elszamolas_id')->references('elszamolas_id')->on('elszamolas');
            $table->foreignId('dokumentum_tipus_id')->references('dokumentum_tipus_id')->on('dokumentum_tipuses');
            $table->string('eleresi_ut');
            $table->date('kitoltes_datuma');
            $table->dateTime('feltoltes_idopontja');  
            $table->string('ellenorzes_statuszat');
            $table->date('ellenorzes_datuma');
            $table->date('rogzites_datuma');
            $table->string('ESZA+_azonosito')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentumoks');
    }
};
