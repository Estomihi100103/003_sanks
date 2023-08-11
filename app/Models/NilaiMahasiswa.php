<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswa extends Model
{
    protected $table = 'nilai_mahasiswa';


    //is taken
    public function isTaken()
    {
        return (bool) $this->where('nim', $this->nim)
            ->where('kode_matakuliah', $this->kode_matakuliah)
            ->first();
    }
    
}