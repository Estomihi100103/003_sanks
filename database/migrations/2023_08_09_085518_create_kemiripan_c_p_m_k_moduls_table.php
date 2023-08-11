<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    //  id_kemiripan	INT (Primary Key)
    //  id_modul	INT (Foreign Key ke modul_proposals) 
    //  mata_kuliah	VARCHAR(255)
    //  kode	VARCHAR(255)
    //nilai mata kuliah

    public function up(): void
    {
        Schema::create('kemiripan_c_p_m_k_moduls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_modul')->constrained('modul_proposals');
            $table->string('mata_kuliah');
            $table->string('kode');
            $table->string('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kemiripan_c_p_m_k_moduls');
    }
};