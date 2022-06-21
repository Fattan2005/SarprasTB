@extends('layout')
@section('judul','Edit Inventory')
@section('isi')
<div class="card">
    <div class="card-body">
        <h3 class="card-title mb-5 text-center">Edit Inventory</h3>
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
                <input type="text" placeholder="Masukkan Nama Barang" class="form-control" name="nama_barang" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="text" placeholder="Masukkan Stok" class="form-control" name="stock" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Rusak</label>
                <textarea class="form-control" required name="spesifikasi" placeholder="Spesifikasi Barang"
                    style="height: 100px"></textarea>
            </div>
            {{-- <fieldset disabled> --}}
                <div class="mb-3">
                    <label class="form-label">Jumlah Terpinjam</label>
                    <input required type="number" placeholder="Jumlah Barang Terpinjam" name="jumlah_pinjam" class="form-control">
                </div>
            {{-- </fieldset> --}}
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection