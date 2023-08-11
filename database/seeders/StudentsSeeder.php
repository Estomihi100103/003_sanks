<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    //      -- Memasukkan dummy data ke tabel "data_mahasiswa"
// INSERT INTO data_mahasiswa (nim, nama_lengkap, angkatan, email_akademik, program_studi, email_pribadi, pass_word, ipk)
// VALUES
//     ('12S0101', 'John Doe', 2020, 'john.doe@mbkm.edu', 'Teknik Informatika', 'john.doe@gmail.com', 'admin123', 3.75),
//     ('12S0102', 'Jane Smith', 2020, 'jane.smith@mbkm.edu', 'Sistem Informasi', 'jane.smith@gmail.com', 'admin123', 3.82),
//     ('12S0103', 'Michael Johnson', 2021, 'michael.johnson@mbkm.edu', 'Manajemen Bisnis', 'michael.johnson@gmail.com', 'admin123', 3.65),
//     ('12S0104', 'Emily Williams', 2021, 'emily.williams@mbkm.edu', 'Akuntansi', 'emily.williams@gmail.com', 'admin123', 3.95),
//     ('12S0105', 'David Brown', 2019, 'david.brown@mbkm.edu', 'Teknik Elektro', 'david.brown@gmail.com', 'admin123', 3.50),
//     ('12S0106', 'Sarah Davis', 2019, 'sarah.davis@mbkm.edu', 'Arsitektur', 'sarah.davis@gmail.com', 'admin123', 3.68),
//     ('12S0107', 'Christopher Wilson', 2022, 'christopher.wilson@mbkm.edu', 'Desain Grafis', 'christopher.wilson@gmail.com', 'admin123', 3.87),
//     ('12S0108', 'Jessica Anderson', 2022, 'jessica.anderson@mbkm.edu', 'Ilmu Komunikasi', 'jessica.anderson@gmail.com', 'admin123', 3.72),
//     ('12S0109', 'William Martinez', 2023, 'william.martinez@mbkm.edu', 'Teknik Industri', 'william.martinez@gmail.com', 'admin123', 3.58),
//     ('12S0110', 'Olivia Taylor', 2023, 'olivia.taylor@mbkm.edu', 'Psikologi', 'olivia.taylor@gmail.com', 'admin123', 3.90);



    public function run()
    {
        DB::table('students')->insert([
            [
                'nim' => '12S0101',
                'nama_lengkap' => 'John Doe',
                'angkatan' => 2020,
                'email_akademik' => 'john.doe@mbkm.edu',
                'program_studi' => 'Teknik Informatika',
                'email_pribadi' => 'john.doe@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.75,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0102',
                'nama_lengkap' => 'Jane Smith',
                'angkatan' => 2020,
                'email_akademik' => 'jane.smith@mbkm.edu',
                'program_studi' => 'Sistem Informasi',
                'email_pribadi' => 'jane.smith@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.82,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0103',
                'nama_lengkap' => 'Michael Johnson',
                'angkatan' => 2021,
                'email_akademik' => 'michael.johnson@mbkm.edu',
                'program_studi' => 'Manajemen Bisnis',
                'email_pribadi' => 'michael.johnson@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.65,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0104',
                'nama_lengkap' => 'Emily Williams',
                'angkatan' => 2021,
                'email_akademik' => 'emily.williams@mbkm.edu',
                'program_studi' => 'Akuntansi',
                'email_pribadi' => 'emily.williams@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.95,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0105',
                'nama_lengkap' => 'David Brown',
                'angkatan' => 2019,
                'email_akademik' => 'david.brown@mbkm.edu',
                'program_studi' => 'Teknik Elektro',
                'email_pribadi' => 'david.brown@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.50,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0106',
                'nama_lengkap' => 'Sarah Davis',
                'angkatan' => 2019,
                'email_akademik' => 'sarah.davis@mbkm.edu',
                'program_studi' => 'Arsitektur',
                'email_pribadi' => 'sarah.davis@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.68,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0107',
                'nama_lengkap' => 'Christopher Wilson',
                'angkatan' => 2022,
                'email_akademik' => 'christopher.wilson@mbkm.edu',
                'program_studi' => 'Desain Grafis',
                'email_pribadi' => 'christopher.wilson@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.87,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0108',
                'nama_lengkap' => 'Jessica Anderson',
                'angkatan' => 2022,
                'email_akademik' => 'jessica.anderson@mbkm.edu',
                'program_studi' => 'Ilmu Komunikasi',
                'email_pribadi' => 'jessica.anderson@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.72,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0109',
                'nama_lengkap' => 'William Martinez',
                'angkatan' => 2023,
                'email_akademik' => 'william.martinez@mbkm.edu',
                'program_studi' => 'Teknik Industri',
                'email_pribadi' => 'william.martinez@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.58,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '12S0110',
                'nama_lengkap' => 'Olivia Taylor',
                'angkatan' => 2023,
                'email_akademik' => 'olivia.taylor@mbkm.edu',
                'program_studi' => 'Psikologi',
                'email_pribadi' => 'olivia.taylor@gmail.com',
                'pass_word' => 'admin123',
                'ipk' => 3.90,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

}