<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function viewPenilaian(){
        return view("koordinator.penilaian");
    }
    public function viewTinjau(){
        return view("koordinator.tinjau");
    }
    public function viewMapAsesor(){
        return view("koordinator.asesor");
    }
}