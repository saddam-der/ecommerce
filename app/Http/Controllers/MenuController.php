<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tbl_makanan;
use App\tbl_pesanan;

class MenuController extends Controller
{
    // public function index(Request $request)
    // {
    //     $mn = tbl_makanan::all();
    //     $pgn = DB::table('tbl_makanans')->paginate(3);
    //     $psn = tbl_pesanan::all();

    //     if ($request->ajax()) {
    //         return view('parsial/menu', compact('pgn', 'psn'));
    //     }

    //     return view('index', compact('pgn', 'psn'));
    // }
}
