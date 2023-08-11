<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Students;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function viewBeranda()
    {
        return view("beranda.beranda-ds");
    }
    public function viewBerandaMhs()
    {
        $students = Students::where('nim', auth()->user()->username)->firstOrFail();
        return view('beranda.beranda-mhs', compact('students'));
        
    }


}