<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $bayar = [];
        $bayar = Pembayaran::all();
        if ($request->all() != null) {
            // dd($request->all());
            // $bayar = $this->seacrhData($request,$bayar);

            if ($request->ahli != "") {
                $bayar = Pembayaran::where('keahlian_tukang', $request->ahli)->get();
            }
    
            // if ($request->pelanggan != "") {
            //     $bayar =  Pembayaran::whereHas('pelanggan', function (Builder $query) use($request){
            //         $query->where('nama_pelanggan','LIKE','%'. $request->pelanggan.'%')->get();
            //     });
            // }
    
            if ($request->total != "") {
                $bayar =  Pembayaran::where('total','LIKE','%'.$request->total.'%')->get();
            }
    
            if ($request->status != "") {
                $bayar =  Pembayaran::where('status','LIKE','%'.$request->status.'%')->get();
            }
    
            // if ($request->awal ) {
            //     $bayar =  Pembayaran::whereDate('tgl_mulai', ">", $request->awal)->whereDate('tgl_selesai', "<", $request->end_date)->get();
            // }

        }

        return view('pembayaran.home', compact('bayar'));
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
        return view('pembayaran.edit')->with([
            'pembayaran' => Pembayaran::find($id),
        ]);
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
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($request->all());
        return redirect()->route('pengelola.bayar.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pembayaran::find($id);
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
