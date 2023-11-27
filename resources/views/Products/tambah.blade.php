@extends('layouts.product')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="text-center mb-5">Halaman Tambah Produk</h2>
            <div class="col-md-10">
                <div class="card border-dark shadow px-5">
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="judulProduk" class="form-label fw-bold">Judul Produk</label>
                              <input type="text" class="form-control" id="judulProduk" name="judulProduk">
                            </div>
                            <div class="mb-3">
                              <label for="deskripsi" class="form-label fw-bold">Deskripsi Produk</label>
                              <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                            </div>
                            <div class="mb-3">
                              <label for="harga" class="form-label fw-bold">Harga Produk</label>
                              <input type="number" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="mb-3">
                              <label for="gambar" class="form-label fw-bold">Upload Gambar</label>
                              <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            
                            <div class="row">
                              <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                              <div class="col-md-3">
                                <a href="{{ route('products') }}" class="btn btn-danger">Kembali</a>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection