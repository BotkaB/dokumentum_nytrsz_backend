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
            $table->id('belso_kod');
            $table->string('név');
            $table->string('születési név');
            $table->string('anyja neve');
            $table->string('születési hely');
            $table->date('születési idő');
            $table->string('lakcím');
            $table->char('neme',5);
            $table->bigInteger('ügyfélkód');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE ugyfels ADD CONSTRAINT chk_férfi_vagy_nő_lehet_csak_megadva CHECK (neme = "férfi" or neme = "nő");');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugyfels');
    }
};
