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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nip',10)->unique();
            $table->string('nama',20);
            $table->enum('jk',['L','P']);
            $table->string('spesialis',255);
            $table->string('tempat_praktek',255);
            $table->string('photo',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
