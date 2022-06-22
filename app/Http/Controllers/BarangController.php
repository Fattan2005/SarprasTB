<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::paginate(5) ;
        
        return view('-', compact('data'));
    }
}
