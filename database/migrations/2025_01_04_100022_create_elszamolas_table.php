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
        Schema::create('elszamolas', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('megvalositashelyszin_azon')->references('azon')->on('megvalositasi_helyszins');
            $table->foreignId('ugyfel_belsokod')->references('belso_kod')->on('ugyfels'); 
            $table->foreignId('ugyfeltipus_azon')->references('id')->on('ugyfel_tipuses'); 
            $table->date('bevonas_datum'); 
            $table->integer('kotelezo_dokumentumok_szama')->default(0); 
            $table->integer('opcionalis_dokumentumok_szama')->default(0);
            $table->boolean('elszamolhatosag_allapota')->default(0);
            $table->date('elszamolhatosag_datum')->nullable(); 
            $table->date('elszamolas_datum')->nullable(); 
            $table->timestamps(); 
    });
}
        


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elszamolas');
    }
};
