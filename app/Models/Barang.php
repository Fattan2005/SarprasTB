<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $guarded = [];

    public function keluarbarang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

    public function operatorkeluar(){
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    
}