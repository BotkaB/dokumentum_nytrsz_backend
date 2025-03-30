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
        Schema::create('ugyfel_tipuses', function (Blueprint $table) {
            $table->bigIncrements('ugyfel_tipus_id');
            $table->unsignedBigInteger('fotipus')->nullable()->default(null);
            $table->string('elnevezes');
            $table->timestamps();

            $table->foreign('fotipus')->references('ugyfel_tipus_id')->on('ugyfel_tipuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugyfel_tipuses');
    }
};
