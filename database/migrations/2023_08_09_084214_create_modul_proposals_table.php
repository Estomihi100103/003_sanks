<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// id_modul	INT (Primary Key)
// id	INT (Foreign Key ke event_proposals)
// nama_modul	VARCHAR(255)
// deskripsi_modul	TEXT
// sasaran_pengembangan_skill	TEXT
// detil_pembelajaran	TEXT
// metode_asesmen	TEXT


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modul_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_event_proposal')->constrained('event_proposals');
            $table->string('nama_modul');
            $table->text('deskripsi_modul');
            $table->text('sasaran_pengembangan_skill');
            $table->text('detil_pembelajaran');
            $table->text('metode_asesmen');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_proposals');
    }
};