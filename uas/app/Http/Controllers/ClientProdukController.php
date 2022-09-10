<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Http\Controllers\API\AlamatResource;
use Illuminate\Support\Facades\Route;

class ClientProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('home', $data);
    }
    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('detail', $data);
    }
    function prod(){
        $data['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::simplePaginate(8);
        return view('product', $data);
    }

    function seller(){
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('template.frontview.seller', $data);
    }

    function ShowCheckout(Produk $produk){
        $data['list_provinsi'] = Provinsi::all();
        $data['produk'] = $produk;
        return view ('checkout', $data);
    }

    public function getKabupaten($id_provinsi)
    {
      return Kabupaten::where("id_provinsi", $id_provinsi)->get()->toJson();
    }

    public function getKecamatan($id_kabupaten)
    {
      return Kecamatan::where("id_kabupaten", $id_kabupaten)->get()->toJson();
    }

    public function getDesa($id_kecamatan)
    {
      return Desa::where("id_kecamatan", $id_kecamatan)->get()->toJson();
    }

}


