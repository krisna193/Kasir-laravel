<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use DB;

class BarangController extends Controller
{
    public function index()
    {
        $barang = DB::table('barang')
        ->join('jenis','barang.id_jenis','=','jenis.id_jenis')
        ->join('supplier','barang.id_supplier','=','supplier.id_supplier')
        ->get();
        return view('barang.index', compact('barang'));
    }
     public function tambah()
     {
         $supplier = DB::table('supplier')
        ->get();
        $jenis = DB::table('jenis')
        ->get();
        return view('barang.tambah',compact(['supplier','jenis'])); 
     }
      public function simpan(request $request)
     {
        $simpan = Barang::create([
           
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis' => $request->id_jenis,
            'id_supplier' => $request->id_supplier,
            'harga_jual' => $request->harga_jual,
            'barang_status' => $request->barang_status
        ]);
        echo $simpan->id_barang;
        return redirect('barang'); 
     }
      public function ubah($id)
     {
        $barang = Barang::find($id);
        return view('barang.ubah',compact(['barang'])); 
     }
      public function update($id, request $request)
     {
        $barang = Barang::find($id);
         $barang->update($request->except('_token','submit'));
       return redirect('barang');
     }
      public function hapus($id)
     {
        $hapus = Barang::find($id);
        $hapus->delete();
       return redirect('barang'); 
     }

}

