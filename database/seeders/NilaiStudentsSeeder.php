<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NilaiStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  ('12S0101', 'FIS1103', 'Fisika Dasar', 1, 4, 'D'),
    //  ('12S0101', 'KUS1101', 'Bahasa Inggris I', 1, 2, 'BC'),
    //  ('12S0101', 'MAS1101', 'Matematika Dasar I', 1, 4, 'D'),
    //  ('12S0101', '12S1101', 'Dasar Sistem Informasi', 1, 3, 'B'),
    //  ('12S0101', 'TIS1101', 'Inovasi Digital', 1, 2, 'AB'),
    //  ('12S0101', 'KUS1102', 'Pembentukan Karakter Del', 1, 2, 'AB'),
    //  ('12S0101', '12S1102', 'Pemrograman Visual', 1, 2, 'A');
    public function run()
    {
        DB::table('nilai_mahasiswa')->insert([
            [
                'nim' => '12S0101',
                'kode_matakuliah' => 'FIS1103',
                'nama_matakuliah' => 'Fisika Dasar',
                'semester' => 1,
                'sks' => 4,
                'nilai' => 'D'
            ],
            [
                'nim' => '12S0101',
                'kode_matakuliah' => 'KUS1101',
                'nama_matakuliah' => 'Bahasa Inggris I',
                'semester' => 1,
                'sks' => 2,
                'nilai' => 'BC'

            ],
            [
                'nim' => '12S0101',
                'kode_matakuliah' => 'MAS1101',
                'nama_matakuliah' => 'Matematika Dasar I',
                'semester' => 1,
                'sks' => 4,
                'nilai' => 'D'

            ],
            [
                'nim' => '12S0101',
                'kode_matakuliah' => '12S1101',
                'nama_matakuliah' => 'Dasar Sistem Informasi',
                'semester' => 1,
                'sks' => 3,
                'nilai' => 'B'

            ],
            [
                'nim' => '12S0101',
                'kode_matakuliah' => 'TIS1101',
                'nama_matakuliah' => 'Inovasi Digital',
                'semester' => 1,
                'sks' => 2,
                'nilai' => 'AB'

            ],
            [
                'nim' => '12S0101',
                'kode_matakuliah' => 'KUS1102',
                'nama_matakuliah' => 'Pembentukan Karakter Del',
                'semester' => 1,
                'sks' => 2,
                'nilai' => 'AB'

            ],
            [
                'nim' => '12S0101',
                'kode_matakuliah' => '12S1102',
                'nama_matakuliah' => 'Pemrograman Visual',
                'semester' => 1,
                'sks' => 2,
                'nilai' => 'A'

            ]

        ]);

    }
}