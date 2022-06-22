<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = Peminjaman::select('peminjaman.*', 'barangs.*', 'peminjaman.id as id_peminjaman')
            ->leftJoin('barangs', 'barangs.id', 'peminjaman.barang_id')
            ->paginate(5);
        return view('-', ['data' => $data]);
    }
}
