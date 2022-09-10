<?php

namespace App\Http\Controllers;


use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{

    function ShowTemplate(){
        return view ('template.base1');
    }
    function ShowIndex(){
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(4)->get();
        return view ('index', $data);
    }
    function ShowShop(){
        return view ('shop');
    }
    function ShowContact(){
        return view ('contact');
    }
    
    function ShowHome(){
        return view ('home');
    }
    function ShowProduk(){
        return view ('produk');
    }
    function ShowSupplier(){
        return view ('Supplier');
    }

    public function showAlamat()
    {
      $data['list_provinsi'] = Provinsi::all();
      return view('alamat',$data);
    }
    

    public function showCheckout(Produk $produk){
        $data['list_provinsi'] = Provinsi::all();
        $data['produk'] = $produk;
        return view ('checkout',  $data);
    }

    // public function checkProvinsi(Produk $produk){
    //     $data['list_provinsi'] = Provinsi::all();
    //     $data['produk'] = $produk;
    //     return view ('checkout', $data);
    // }


    // public function showCheckoutt()
    // {
    //   $data['list_provinsi'] = Provinsi::all();
    //   return view('checkout',$data);
    // }
}