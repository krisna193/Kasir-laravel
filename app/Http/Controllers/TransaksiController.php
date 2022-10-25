<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Barang;
use DB;

class TransaksiController extends Controller
{
    public function index()
    {
         $transaksi = DB::table('transaksi')
        
        ->get();
        return view('transaksi.index',compact('transaksi'));
    }
     public function tambah()
     {
         $barang = DB::table('barang')
        
        ->get();

        return view('transaksi.tambah',compact(['barang']));

         
     }

      public function simpan(request $request)
     {
        $simpan = Transaksi::create([
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status,
        ]);
        echo $simpan->id_transaksi;

          $simpan = Transaksi_detail::create([
            'id_transaksi' => $request->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status,
        ]);
        echo $simpan->id_transaksi_detail;
        return redirect('transaksi');
      }  
         public function ubah($id)
     {
        $transaksi = Transaksi::find($id);
        return view('transaksi.ubah',compact(['transaksi'])); 
     }
      public function update($id, request $request)
     {
        $transaksi = Transaksi::find($id);
         $transaksi->update($request->except('_token','submit'));
       return redirect('transaksi');
     }
      public function hapus($id)
     {
        $hapus = Transaksi::find($id);
        $hapus->delete();
       return redirect('transaksi'); 
     }
}
