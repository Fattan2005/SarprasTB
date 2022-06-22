@extends('layout')
@section('judul','Edit Barang')
@section('isi')
<div class="card">
    <div class="card-body">
        <h3 class="card-title mb-5 text-center">Edit Barang</h3>
        <form action="{{ url('barang',$barang->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" placeholder="Masukkan Kde Barang" class="form-control" name="kode_barang"
                    value="{{ $barang->kode_barang }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" placeholder="Masukkan Nama Barang" class="form-control" name="nama_barang"
                    value="{{ $barang->nama_barang }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Barang</label>
                <select class="form-control" name="jenis_barang" required>
                    <option disabled>Jenis Barang</option>
                    <option value="{{ $barang->jenis_barang }}" selected>{{ $barang->jenis_barang }}</option>
                    <option value="1">Komputer</option>
                    <option value="2">Perlengkapan Komputer</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Barang</label>
                <input type="file" class="form-control" name="foto_barang">
                <img src="{{ asset('img/'.$barang->foto_barang) }}" alt="" style="width: 30%" class="mt-3">
            </div>
            <div class="mb-3">
                <label class="form-label">Spesifikasi</label>
                <textarea class="form-control" required name="spesifikasi" placeholder="Spesifikasi Barang"
                    style="height: 100px">{{ $barang->spesifikasi }}</textarea>
            </div>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
