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

    //  public function seacrhData($request, $data)
    //  {
    //      if ($request->ahli != "") {
    //          $data = $data->where('keahlian_tukang', $request->ahli);
    //      }

    //      if ($request->pelanggan != "") {
    //          $data = $data->whereHas('pelanggan', function (Builder $query) use($request){
    //              $query->where('nama_pelanggan','LIKE','%'. $request->pelanggan.'%');
    //          });
    //      }

    //      if ($request->total != "") {
    //          $data = $data->where('total','LIKE','%'.$request->total.'%');
    //      }

    //      if ($request->status != "") {
    //          $data = $data->where('status','LIKE','%'.$request->status.'%');
    //      }

    //      if ($request->awal && $request->akhir != "") {
    //          $data = $data->where('tgl_mulai', ">=", $request->awal)->where('tgl_selesai', "<=", $request->akhir);
    //      }

    //      return $data;
    // }
    // public function index(Request $request)
    // {

    //     if ($request->all() != null) {
    //         $data = Pembayaran::with('pelanggan');
    //         // dd($request->all());
    //         $data = $this->seacrhData($request,$data);
    //         $data->get();
    //     }else{
    //         $data = Pembayaran::with('pelanggan')->get();
    //     }
    //     // dd($data);
    //     $data = DB::table('pelanggan')->get();
    //     return view('pembayaran.home', compact('data'));
    // }

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
            if ($request->total != "") {
                $bayar =  Pembayaran::where('total','LIKE','%'.$request->total.'%')->get();
            }
            if ($request->status != "") {
                $bayar =  Pembayaran::where('status','LIKE','%'.$request->status.'%')->get();
            }

            if ($request->pelanggan != "") {
                $bayar = Pembayaran::whereHas('pelanggan', function (Builder $query) use($request){
                    $query->where('nama_pelanggan','LIKE','%'. $request->pelanggan.'%');
                })->get();
            }
            if ($request->awal && $request->akhir != "") {
                $bayar = Pembayaran::where('tgl_mulai', ">=", $request->awal)->where('tgl_selesai', "<=", $request->akhir)->get();
            }
        }
        return view('pembayaran.home', compact('bayar'));
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
