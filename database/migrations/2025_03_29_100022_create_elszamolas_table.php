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
            $table->id('elszamolas_id');
            $table->foreignId('megvalositasi_helyszin_id')->references('megvalositasi_helyszin_id')->on('megvalositasi_helyszins');
            $table->foreignId('ugyfel_id')->references('ugyfel_id')->on('ugyfels'); 
            $table->foreignId('elszamolas_tipus_id')->references('elszamolas_tipus_id')->on('elszamolas_tipuses');  
            $table->foreignId('ugyfeltipus_id')->references('ugyfel_tipus_id')->on('ugyfel_tipuses'); 
            $table->date('bevonas_datum'); 
            $table->date('elszamolhatosag_datum')->nullable(); 
            $table->string('elszamolhatosag_allapota');          
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
