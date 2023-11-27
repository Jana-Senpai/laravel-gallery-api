@extends('layouts.product')

@section('content')
    <div class="container mt-5">
      <h3 class="text-center">Selamat Datang dihalaman Dashboard gallery SMKN 2 Banjarmasin</h3>
      
      <div class="row mt-5">
        <h5>Jumlah Data Produk</h5>
        <div class="col-md-2">
                <div class="card shadow text-bg-primary">
                  <div class="card-body text-center">
                    <p class="fw-bold fs-2">{{ $totalProduk }}</p>
                    <h5>Produk</h5>
                  </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection