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
            $table->unsignedBigInteger('ugyfel_fotipus')->nullable()->default(null);
            $table->string('elnevezés');
            $table->timestamps();

            $table->foreign('ugyfel_fotipus')->references('ugyfel_tipus_id')->on('ugyfel_tipuses');
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
