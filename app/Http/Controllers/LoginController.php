<?php

namespace App\Http\Controllers;

use App\Models\Students;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome.index');
    }


    //authenticate
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);



        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'cordinator') {
                return redirect()->intended('beranda-ds');
            } else if (auth()->user()->role == 'student') {

                return redirect()->intended('beranda-mhs');
            } else if (auth()->user()->role == 'dosen') {
                return redirect()->intended('beranda-ds');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}