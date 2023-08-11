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
        Schema::create('nilai_mahasiswa', function (Blueprint $table) {
            $table->string('nim', 50);
            $table->string('kode_matakuliah', 20);
            $table->string('nama_matakuliah', 255);
            $table->integer('semester');
            $table->integer('sks');
            $table->string('nilai', 10);
            $table->primary(['nim', 'kode_matakuliah']);
            $table->foreign('nim')->references('nim')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mahasiswa');
    }
};
