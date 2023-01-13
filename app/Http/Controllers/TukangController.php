<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TukangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tukang')->get();
        return view('tukang.home', compact('data'));
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
    public function show($request)
    {
        $data = Tukang::findOrFail($request->get('id'));
        echo json_encode($data);
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
        $tukang = Tukang::find($id);

        if ($request->nama_tukang) {
            $tukang->nama_tukang = $request->nama_tukang;
        }
        if ($request->telepon_tukang) {
            $tukang->telepon_tukang = $request->telepon_tukang;
        }
        if ($request->alamat_tukang) {
            $tukang->alamat_tukang = $request->alamat_tukang;
        }
        if ($request->username_tukang) {
            $tukang->username_tukang = $request->username_tukang;
        }
        if ($request->keahlian_tukang) {
            $tukang->keahlian_tukang = $request->keahlian_tukang;
        }
        if ($request->tarif_tukang) {
            $tukang->tarif_tukang = $request->tarif_tukang;
        }
        if ($request->norek_tukang) {
            $tukang->norek_tukang = $request->norek_tukang;
        }
        if ($request->status_tukang) {
            $tukang->status_tukang = $request->status_tukang;
        }

        $tukang->save();
        return redirect()->route('pengelola.tukang.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tukang::find($id);
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
