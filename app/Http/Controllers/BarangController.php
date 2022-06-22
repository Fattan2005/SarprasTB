<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Barang::latest()->paginate(4);
        return view('master.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pt = $request->foto_barang;
        $ptFile = $pt->getClientOriginalName();
        $pt->move(public_path().'/img',$ptFile);
        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'foto_barang' => $ptFile,
            'spesifikasi' => $request->spesifikasi,
        ]);

        return Redirect('barang')->with('success', 'Data Barang berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findorfail($id);
        return view('master.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::findorfail($id);
        $barang -> update($request->all());
        if($request->hasFile('foto_barang')){
            $request->file('foto_barang')->move('img/', $request->file('foto_barang')->getClientOriginalName());
            $barang->foto_barang = $request->file('foto_barang')->getClientOriginalName();
            $barang ->save();
        }
        return redirect('barang')->with('success', "Data Barang Berhasil Di Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Barang::findorfail($id);
        $delete->delete();
        return back()->with('destroy', "Data Barang Berhasil Di Delete");
    }
}
