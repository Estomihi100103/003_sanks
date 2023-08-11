<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    // id (Primary Key)
// id_modul	INT (Foreign Key ke modul_proposals)
// deskripsi_rumusan

    public function up(): void
    {
        Schema::create('rumusan_keterampilan_moduls', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_modul')->constrained('modul_proposals');
        $table->text('deskripsi_rumusan');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumusan_keterampilan_moduls');
    }
};