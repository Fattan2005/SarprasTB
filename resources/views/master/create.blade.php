@extends('layout')
@section('judul','Tambah Barang')
@section('isi')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title text-center mb-3">Tambah Barang</h3>
            <form class="forms-sample" action="{{ url('barang') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Kode Barang</label>
                    <input type="text" placeholder="Masukkan Kode Barang" class="form-control" name="kode_barang" required>
                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Nama Barang</label>
                  <input type="text" placeholder="Masukkan Nama Barang" class="form-control" name="nama_barang" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Jenis Barang</label>
                  <select class="form-control" name="jenis_barang" required>
                      <option selected disabled>Jenis Barang</option>
                      <option value="1">Komputer</option>
                      <option value="1">Perlengkapan Komputer</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Foto Barang</label>
                  <input type="file" class="form-control" name="foto_barang" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Spesifikasi Barang</label>
                  <textarea class="form-control" required name="spesifikasi" placeholder="Spesifikasi Barang" style="height: 100px"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <a href="{{ url('barang') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
