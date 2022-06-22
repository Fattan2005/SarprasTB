<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $data = Inventory::select('inventories.*', 'barangs.*', 'inventories.id as id_inventory')
            ->leftJoin('barangs', 'barangs.id', 'inventories.barang_id')
            ->paginate(5);
        return view('-', ['data' => $data]);
    }
}
