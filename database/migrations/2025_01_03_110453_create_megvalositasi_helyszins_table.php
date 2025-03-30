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
        Schema::create('megvalositasi_helyszins', function (Blueprint $table) {
            $table->bigIncrements('megvalositasi_helyszin_id');
            $table->unsignedBigInteger('intezet')->nullable()->default(null);
            $table->string('nev');
            $table->tinyInteger('agglomeracio')->nullable()->default(null);
            $table->string('regio')->nullable()->default(null);
            $table->string('tipus')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('intezet')->references('megvalositasi_helyszin_id')->on('megvalositasi_helyszins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('megvalositasi_helyszins');
    }
};
