<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tbl_makanan;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $mn = tbl_makanan::all();
        $pgn = DB::table('tbl_makanans')->paginate(3);

        if ($request->ajax()) {
            return view('parsial/menu', compact('pgn'));
        }

        return view('index', compact('pgn'));
    }

    public function cart()
    {
        return view('keranjang');
    }
}
