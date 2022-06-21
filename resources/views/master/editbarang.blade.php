@extends('main')
@section('judul','Edit Barang')
@section('isi')
<div class="card">
    <div class="card-body">
        <h3 class="card-title mb-5 text-center">Edit Barang</h3>
        <form action="/" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" placeholder="Masukkan Kde Barang" class="form-control"
                    {{--value="{{ $barang->kode_barang }}"--}} name="kode_barang" required>
                {{--@error('kode_barang')
                <div class="text-warning">{{ $message }}</div>
                @enderror--}}
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" placeholder="Masukkan Nama Barang" class="form-control"
                    {{--value="{{ $barang->nama_barang }}"--}} name="nama_barang" required>
                {{--@error('nama_barang')
                <div class="text-warning">{{ $message }}</div>
                @enderror--}}
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Barang</label>
                <select class="form-control" name="jenis_barang" required>
                    <option disabled>Jenis Barang</option>
                    <option value="option" selected>option</option>
                    <option value="1">Laptop</option>
                    <option value="2">Kunci</option>
                    <option value="3">Proyektor</option>
                    <option value="4">Perlengkapan Komputer</option>
                    <option value="5">Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Spesifikasi</label>
                <textarea class="form-control" required name="spesifikasi" placeholder="Spesifikasi Barang"
                    style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Foto Barang</label>
                <input type="file" class="form-control" name="foto_barang">
                <img src="/" alt="" style="width: 30%" class="mt-3">
            </div>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection