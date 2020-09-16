<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_detail_pesanan extends Model
{
    //
    public $timestamps = false;

    protected $primaryKey = 'id_detail_pesanan';

    protected $fillable = [
        'id_pesanan', 'id_makanan', 'harga_makanan', 'jumlah', 'subtotal'
    ];

    // public function id_pesan()
    // {
    //     return $this->belongsTo('App\tbl_pesanan', 'id_pesanan', 'id_pesanan');
    // }
}
