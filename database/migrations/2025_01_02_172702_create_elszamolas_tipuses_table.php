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
        Schema::create('elszamolas_tipuses', function (Blueprint $table) {
            $table->id('elszamolas_tipus_id');
            $table->enum('elszamolas_elnevezese', ['bevonás', 'max.alapfokú végzettségű', 'képzettséget szerzett'])->default('bevonás');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elszamolas_tipus_ides');
    }
};
