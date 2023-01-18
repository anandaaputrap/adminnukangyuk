<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Tukang;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    public function index()
    {
        return view('admin.home', [
            'pelanggan' => Pelanggan::get(),
            'tukang' => Tukang::get(),
            'pesan' => Pemesanan::get(),
            'bayar' => Pembayaran::get(),
            
        ]);
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
