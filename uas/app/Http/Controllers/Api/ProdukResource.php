<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{

    public function index()
    {
        return Produk::all();
    }


    public function store()
    {
        if (request('nama') && request('harga') && request('berat') && request('deskripsi') && request('stok')) {

            $produk = new Produk();
            $produk->nama = request('nama');
            $produk->harga = request('harga');
            $produk->berat = request('berat');
            $produk->deskripsi = request('deskripsi');
            $produk->stok = request('stok');
            $produk->save();
            return collect([
                'respond' => 200,
                'message' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "field ada yang kosong"
            ]);
        }
    }


    public function show($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return collect([
                'respond' => 200,
                'message' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }



    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga')?? $produk->harga;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->deskripsi = request('deskripsi')?? $produk->deskripsi;
            $produk->stok = request('stok')?? $produk->stok;
            $produk->save();
            return collect([
                'respond' => 200,
                'message' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }


    public function destroy($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return collect([
                'respond' => 200,
                'message' => "produk berhasil dihapus"
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }
}