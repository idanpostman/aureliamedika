<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('rekam_medis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('no_telpon');
        $table->string('poli');
        $table->string('no_rekam_medis')->unique();
        $table->string('diagnosa')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
