<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'fcm'
    ];
    
    protected $guarded = [];
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

}
