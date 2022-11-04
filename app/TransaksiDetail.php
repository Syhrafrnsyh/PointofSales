<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    //
    protected $guarded = [];

    protected $fillable = ['transaksi_id', 'produk_id', 'total_item', 'catatan',
    'kode_promo', 'harga_asli', 'total_harga'];
    //Model relationships ke 
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function produk(){
        return $this->belongsTo(Product::class);
    }

    
}
