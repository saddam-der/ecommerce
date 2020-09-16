<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_makanan extends Model
{
    //
    protected $primaryKey = 'id_makanan';

    protected $fillable = [
        'nama_makanan', 'rincian_makanan', 'harga_makanan', 'stok', 'gambar_makanan'
    ];
}
