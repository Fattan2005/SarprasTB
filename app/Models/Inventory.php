<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kodebarang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'kode_barang');
    }
}
