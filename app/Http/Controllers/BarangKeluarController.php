<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index(){
        $data = Inventory::select('barangkeluar.*', 'barangs.*', 'barangkeluar.id as id_barangkeluar')
            ->leftJoin('barangs', 'barangs.id', 'barangkeluar.barang_id')
            ->paginate(5);
        return view('-', ['data' => $data]);
    }
}
