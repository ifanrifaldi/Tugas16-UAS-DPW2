<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;


class PembeliController extends Controller {
    function index(){
        $data['list_pembeli'] = Pembeli::all();
        return view('pembeli.index', $data);

    }
    function create(){
        return view('pembeli.create');
    }

    function store(){
        $pembeli = new Pembeli;
        $pembeli->nama = request('nama');
        $pembeli->username = request('username');
        $pembeli->email = request('email');
        $pembeli->password = request('password');
        $pembeli->save();

        return redirect('admin/pembeli')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Pembeli $pembeli){
        $data['pembeli'] = $pembeli;
        return view('pembeli.show', $data);
    }

    function edit(Pembeli $pembeli){
        $data['pembeli'] = $pembeli;
        return view('pembeli.edit', $data);
        
    }
    function update(Pembeli $pembeli){
        $pembeli->nama = request('nama');
        $pembeli->username = request('username');
        $pembeli->email = request('email');
        if(request('password')) $pembeli->password = request('password');
        $pembeli->save();
        
        return redirect('admin/pembeli')->with('warning', 'Data Berhasil Diedit');
    }

    function destroy(Pembeli $pembeli){
        $pembeli->delete();

        return redirect('admin/pembeli')->with('danger', 'Data Berhasil Dihapus');
    }
}