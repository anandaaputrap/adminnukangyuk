<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengelolaController extends Controller
{
    public function indexlogin()
    {
        if ($user = Auth::user()) {
            if($user->level == 1){
                return redirect()->intended('home');
            }
        }
        return view('login.login');
    }
    
    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
        [
            'username.required' => 'Username Tidak Boleh Kosong'
        ]
    );

        $credential = $request->only('username', 'password');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == 1){
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf Username Atau Password Anda Salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function index()
    {
        return view('admin.home');
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
