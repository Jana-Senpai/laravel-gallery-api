@extends('layouts.product')

@section('content')
    @if (session()->has('Success'))
        <div class="position-absolute start-50 top-50 translate-middle" style="z-index: 1">
            <div class="alert p-5 text-center text-white" role="alert" style="background-color: #212529;">
                <h3>{{ session('Success') }}</h3>
                <h4>(Kembali ke halaman data produk)</h4>
                
                <a href="{{ route('products') }}" class="btn btn-primary">OK</a>
            </div>
        </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2>Halaman Kelola Data Produk</h2>
                <a class="btn btn-success mb-3" href="{{ route('product.create') }}">Tambah Produk</a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>ID Produk</th>
                                <th>Judul Produk</th>
                                <th>Deskripsi Produk</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td align="center">{{ $product->idProduk }}</td>
                                    <td><strong>{{ $product->judulProduk }}</strong></td>
                                    <td>{{ $product->deskripsi }}</td>
                                    <td><strong>Rp. </strong>{{ $product->harga }}</td>
                                    <td class="text-center"><img width="100" src="image/{{ $product->gambar }}" alt="{{ $product->gambar }}"></td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('product.edit', $product->idProduk) }}">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('yakin dihapus nihh?')" href="{{ route('product.delete', $product->idProduk) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection