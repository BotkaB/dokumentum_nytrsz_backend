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
        Schema::create('ugyfels', function (Blueprint $table) {

            $table->id('ugyfel_id');
            $table->string('nev');
            $table->string('szuletesi_nev');
            $table->string('anyja_neve');
            $table->string('szuletesi_hely');
            $table->date('szuletesi_ido');
            $table->string('telepules');
            $table->enum('neme', ['férfi', 'nő'])->default('férfi');
            $table->bigInteger('ugyfelkod');
            $table->timestamps();
            $table->unique(['szuletesi_nev', 'anyja_neve', 'szuletesi_hely', 'szuletesi_ido'], 'unique_szuletesi_nev_anyja_neve');
       
            
        });
        DB::statement('ALTER TABLE ugyfels ADD CONSTRAINT check_neme CHECK (neme IN ("férfi", "nő"))');
        DB::statement('ALTER TABLE ugyfels ADD CONSTRAINT check_szuletesi_ido CHECK (szuletesi_ido >= "1900-01-01" AND szuletesi_ido <= "2025-01-01")');
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {


        // Drop the table
        Schema::dropIfExists('ugyfels');
    }
};
