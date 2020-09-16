<?php

namespace App\Http\Controllers;

use App\tbl_detail_pesanan;
use App\tbl_pesanan;
use App\tbl_makanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(Request $request)
    {
        $mn = tbl_makanan::all();
        $pgn = DB::table('tbl_makanans')->paginate(3);
        $psn = tbl_pesanan::all();

        if ($request->ajax()) {
            return view('parsial/menu', compact('pgn', 'psn'));
        } else {
            return view('index', compact('pgn', 'psn'));
        }
    }

    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'id_pesanan'         => 'required',
            'id_makanan'         => 'required',
            'nama_makanan'       => 'required',
            'harga_makanan'      => 'required',
            'jumlah_makanan'     => 'required',
        ]);

        // dump($validateData);
        $tbl_detail_pesanan = new tbl_detail_pesanan();
        $tbl_detail_pesanan->id_pesanan = $validateData['id_pesanan'];
        $tbl_detail_pesanan->id_makanan = $validateData['id_makanan'];
        $tbl_detail_pesanan->nama_makanan = $validateData['nama_makanan'];
        $tbl_detail_pesanan->harga_makanan = $validateData['harga_makanan'];
        $tbl_detail_pesanan->jumlah = $validateData['jumlah_makanan'];
        $tbl_detail_pesanan->subtotal = $validateData['jumlah_makanan'] * $validateData['harga_makanan'];
        $tbl_detail_pesanan->save();
        return redirect()->route('order.index');
    }

    public function cart()
    {
        $dn = tbl_detail_pesanan::all();
        $psn = tbl_pesanan::all();
        return view('keranjang', compact('dn', 'psn'));
    }
}
