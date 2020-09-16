<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_pesanan extends Model
{
    //
    public $timestamps = false;

    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_user', 'tanggal_pesan',
    ];
}
