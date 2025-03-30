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
        Schema::create('dokumentumoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('megvalositasi_helyszin_id')->references('megvalositasi_helyszin_id')->on('megvalositasi_helyszins');
            $table->foreignId('elszamolas_id')->references('elszamolas_id')->on('elszamolas');
            $table->foreignId('dokumentum_tipus_id')->references('dokumentum_tipus_id')->on('dokumentum_tipuses');
            $table->string('eleresi_ut');
            $table->date('kitoltes_datuma');
            $table->dateTime('feltoltes_idopontja');  
            $table->enum('ellenorzes_statusza', ['nincs ellenőrizve', 'hiánypótlás', 'elfogadva'])->default('nincs ellenőrizve');
            $table->date('ellenorzes_datuma')->nullable();
            $table->date('rogzites_datuma')->nullable();
            $table->string('ESZA+_azonosito')->nullable();
            $table->timestamps();

           
        });

        DB::statement('ALTER TABLE dokumentumoks ADD CONSTRAINT check_ellenorzes_statusza CHECK (ellenorzes_statusza IN ("nincs ellenőrizve", "hiánypótlás", "elfogadva"))');
        DB::statement('ALTER TABLE dokumentumoks ADD CONSTRAINT check_kitoltes_datuma CHECK (kitoltes_datuma >= "2024-09-15" AND kitoltes_datuma <= "2045-01-01")');
        DB::statement('ALTER TABLE dokumentumoks ADD CONSTRAINT check_ellenorzes_datuma CHECK (ellenorzes_datuma IS NULL OR (ellenorzes_datuma >= "2024-09-15" AND ellenorzes_datuma <= "2045-01-01"))');    

    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentumoks');
    }
};
