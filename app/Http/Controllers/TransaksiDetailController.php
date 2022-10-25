<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_detail;
use DB;

class TransaksiDetailController extends Controller
{
    public function index($id){
         $transaksidetail = DB::table('transaksi_detail') 
        ->where('id_transaksi_detail',$id)
        ->get();

        return view('transaksidetail.index',compact('transaksidetail'));
    }

    }

