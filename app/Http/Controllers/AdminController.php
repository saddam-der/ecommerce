<?php

namespace App\Http\Controllers;

use App\tbl_makanan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $makanan = tbl_makanan::all();

        return view('admin.crud.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.crud.create');
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
        $validateData = $request->validate([
            'nama_makanan'      => 'required',
            'rincian_makanan'   => 'required',
            'harga_makanan'     => 'required',
            'stok'              => 'required',
            'gambar_makanan'    => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambar = $request->file('gambar_makanan')->store('img/menu');

        // dump($validateData);
        $tbl_makanan = new tbl_makanan();
        $tbl_makanan->nama_makanan = $validateData['nama_makanan'];
        $tbl_makanan->rincian_makanan = $validateData['rincian_makanan'];
        $tbl_makanan->harga_makanan = $validateData['harga_makanan'];
        $tbl_makanan->stok = $validateData['stok'];
        $tbl_makanan->gambar_makanan = $gambar;
        $tbl_makanan->save();

        return redirect()->route('admin.index')->with('success', 'Makanan Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_makanan $admin)
    {
        //
        return view('admin.detail', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_makanan $admin)
    {
        //
        return view('admin.crud.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_makanan $admin)
    {
        //
        $validateData = $request->validate([
            'nama_makanan'      => 'required',
            'rincian_makanan'   => 'required',
            'harga_makanan'     => 'required',
            'stok'              => 'required',
            'gambar_makanan'    => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->gambar_makanan) {
            Storage::delete($admin->gambar_makanan);
            $gambar = $request->file('gambar_makanan')->store('img/menu');
            $admin->gambar_makanan = $gambar;
        }

        $admin->nama_makanan = $validateData['nama_makanan'];
        $admin->rincian_makanan = $validateData['rincian_makanan'];
        $admin->harga_makanan = $validateData['harga_makanan'];
        $admin->stok = $validateData['stok'];
        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Makanan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_makanan $admin)
    {
        //
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Makanan Berhasil Dihapus');
    }
}
