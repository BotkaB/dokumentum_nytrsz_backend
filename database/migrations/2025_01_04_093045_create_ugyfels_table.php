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
            $table->unique(['szuletesi_nev', 'anyja_neve', 'szuletesi_hely', 'szuletesi_ido'], 'unique_szuletesi_nev_anyja_neve');
            $table->id('ugyfel_id');
            $table->string('nev');
            $table->string('szuletesi_nev');
            $table->string('anyja_neve');
            $table->string('szuletesi_hely');
            $table->date('szuletesi_ido');
            $table->string('telepules');
            $table->char('neme', 5);
            $table->bigInteger('ugyfelkod');
            $table->timestamps();
        });

        // Add the constraint after table creation
        DB::statement('ALTER TABLE ugyfels ADD CONSTRAINT chk_ferfi_vagy_no_lehet_csak_megadva CHECK (neme = \'ferfi\' OR neme = \'no\');');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the check constraint before dropping the table
        DB::statement('ALTER TABLE ugyfels DROP CONSTRAINT chk_ferfi_vagy_no_lehet_csak_megadva');

        // Drop the table
        Schema::dropIfExists('ugyfels');
    }
};
