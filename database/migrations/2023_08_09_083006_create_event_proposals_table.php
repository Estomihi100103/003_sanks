<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

//      id	INT (Primary Key)
// nama_kegiatan	VARCHAR(255)
// penyelenggara	VARCHAR(255)
// alamat	TEXT
// batas_akhir_pendaftaran	DATE
// bentuk_kegiatan	VARCHAR(255)
// kredit	INT
// rekognisi	INT
// model_pelaksanaan	VARCHAR(255)
// periode_pelaksanaan	VARCHAR(255)
// metode_pelaksanaan	VARCHAR(255)
// deskripsi_umum	TEXT
//ProfilLulusan
//Pengalaman Pendukung
//Motivation Video

    public function up(): void
    {
        Schema::create('event_proposals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('penyelenggara');
            $table->text('alamat');
            $table->date('batas_akhir_pendaftaran');
            $table->string('bentuk_kegiatan');
            $table->string('kredit');
            $table->string('rekognisi');
            $table->string('model_pelaksanaan');
            $table->string('periode_pelaksanaan');
            $table->string('metode_pelaksanaan');
            $table->text('deskripsi_umum');
            $table->text('profil_lulusan');
            $table->text('pengalaman_pendukung');
            $table->text('motivation_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_proposals');
    }
};
