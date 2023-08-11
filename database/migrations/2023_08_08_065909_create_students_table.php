<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */


    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('nim', 50)->primary();
            $table->string('nama_lengkap', 255);
            $table->integer('angkatan');
            $table->string('email_akademik', 100);
            $table->string('program_studi', 100);
            $table->string('email_pribadi', 100);
            $table->string('pass_word', 255);
            $table->float('ipk');
            $table->timestamps();

            // $table->unsignedBigInteger('user_id')->unique(); // foreign key ke tabel users
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};