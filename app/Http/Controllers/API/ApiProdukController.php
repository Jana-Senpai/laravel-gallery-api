<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();

        Log::info('User sedang melakukan pengambilan semua data');

        return response()->json([
            'data' => $produks
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

        $newProduk = Produk::create($validatedData);

        Log::info("User sedang melakukan penambahan data baru");

        return response()->json([
            'status' => 'Berhasil',
            'data' => $newProduk
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::findOrFail($id);

        Log::info("User sedang melakukan pengambilan satu data", ["idProduk" => $id]);

        return response()->json([
            'data' => $produk
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $product = Produk::findOrFail($id);

        $product->update($validatedData);

        Log::info("User sedang melakukan update data", ['idProduk' => $id]);

        return response()->json([
            "status" => "Update Sukses"
        ]);
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Produk::findOrFail($id);

        $product->delete();

        Log::info("User sedang melakukan hapus data", ['idProduk' => $id]);

        return response()->json([
            "status" => "Hapus Sukses"
        ]);
    }
}
