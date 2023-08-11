<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $students = DB::table('students')->get();

        foreach ($students as $student) {
            User::create([
                'name' => $student->nama_lengkap,
                'username' => $student->nim,
                // saya asumsikan username adalah nim
        
                'password' => 'admin123', // password defaultnya adalah 'password'
                // karena password di tabel students sudah di-hash
                'role' => 'student', // karena ini berdasarkan data students
                // 'email_verified_at' => now(), // opsional, jika Anda ingin semua user ini terverifikasi
                // Anda juga bisa menambahkan kolom lain jika perlu
            ]);
        }

    }
}