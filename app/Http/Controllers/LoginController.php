<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($user = Auth::user()) {
            if($user->level == 1){
                return redirect()->intended('home');
            }
        }
        return view('login.login');
    }

    // public function proses(Request $request)
    // {
    //     $request->validate([
    //         'email_pengelola' => 'required|email',
    //         'password_pengelola' => 'required',
    //     ],
    //     [
    //         'email_pengelola.required' => 'Email Tidak Boleh Kosong',
    //         'password_pengelola.required' => 'Password Tidak Boleh Kosong',
    //     ]);

    //     $credential = $request->only('email_pengelola', 'password_pengelola');

    //     if (Auth::attempt($credential)) {
    //         $request->session()->regenerate();
    //         $user = Auth::user();
    //         if($user->level == 1){
    //             return redirect()->intended('home');
    //         }

    //         return redirect()->intended('/');
    //     }

    //     return back()->withErrors([
    //         'email_pengelola' => 'Maaf Email Atau Password Anda Salah'
    //     ])->onlyInput('email_pengelola');

    // }

    public function proses(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "email_pengelola" => 'required|email',
            "password_pengelola" => 'required|min:6',
        ],[
            'email_pengelola.required' =>  'Email Tidak Boleh Kosong',
            'email_pengelola.email' => 'Alamat Email Tidak Valid',
            'password_pengelola.required' => 'Password Tidak Boleh Kosong',
            'password_pengelola.min' => 'Minimal Password 8 Karakter'
        ]);

        $credential = [
            'email_pengelola' => $request->email_pengelola,
            'password_pengelola' => $request->password_pengelola
        ];
        try {        
            // dd(Auth::user());
            Auth::attempt($credential);
            if (Auth::user()) {
                return redirect()->route('pengelola.home.index');
            }
            else {
                // dd('gakenek');
                return redirect()->back()->with('danger', 'Username / Password Salah !');
            }
        } catch (\Throwable $th) {
            return dd($th);
            return redirect()->back()->with('danger', $th);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
