<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Students extends Model
{
    use HasFactory;
    protected $guarded = [''];


    public function nilai_mahasiswa(){
        return $this->hasMany(NilaiMahasiswa::class, 'nim', 'nim');
    }
}