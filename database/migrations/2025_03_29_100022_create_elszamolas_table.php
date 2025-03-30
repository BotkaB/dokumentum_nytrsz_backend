<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->foreignId('ugyfel_tipus_id')->references('ugyfel_tipus_id')->on('ugyfel_tipuses');
            $table->date('bevonas_datum');
            $table->date('elszamolhatosag_datum')->nullable();
            $table->enum('elszamolhatosag_allapota', ['nem elszámolható', 'korábban elszámolt', 'elszámolható']);
            $table->date('elszamolas_datum')->nullable();
            $table->timestamps();
          
            });

            DB::statement('ALTER TABLE elszamolas ADD CONSTRAINT check_elszamolhatosag_allapota CHECK (elszamolhatosag_allapota IN ("nem elszámolható", "korábban elszámolt", "elszámolható"))');
            DB::statement('ALTER TABLE elszamolas ADD CONSTRAINT check_bevonas_datum CHECK (bevonas_datum >= "2024-09-15" AND bevonas_datum <= "2045-01-01")');
            DB::statement('ALTER TABLE elszamolas ADD CONSTRAINT check_elszamolhatosag_datum CHECK (elszamolhatosag_datum IS NULL OR (elszamolhatosag_datum >= "2024-09-15" AND elszamolhatosag_datum <= "2045-01-01"))');
            DB::statement('ALTER TABLE elszamolas ADD CONSTRAINT check_elszamolas_datum CHECK (elszamolas_datum IS NULL OR (elszamolas_datum >= "2024-09-15" AND elszamolas_datum <= "2045-01-01"))');

            
    }        
            /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elszamolas');
    }
};
