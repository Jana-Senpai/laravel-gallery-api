<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Produk::all();

        return view('Products.index', ['products' => $products]);
    }

    public function create(){
        return view('Products.tambah');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|file|mimes:png,jpg,jpeg|max:2048'
        ]);

        $gambar = $request->file('gambar');

        $fileName = uniqid(). '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('image'), $fileName);
        $validatedData['gambar'] = $fileName;

        Produk::create($validatedData);

        return redirect()->route('products');
    }

    public function edit($id){
        $product = Produk::find($id);

        return view('Products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'idProduk' => 'required',
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $product = Produk::find($id);

        $product->update($validatedData);

        return redirect()->route('products');
    }

    public function destroy($id){
        $product = Produk::find($id);

        $product->delete();

        return redirect()->route('products')->with('Success', "Produk Berhasil Dihapus");
    }
}
