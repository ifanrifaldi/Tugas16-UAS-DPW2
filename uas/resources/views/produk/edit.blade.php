@extends('Template.base')

@section('content')
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-3">
                          <div class="card">
                          <div class="card-body">
                        <img src="{{ url("public/$produk->foto") }}" alt="" class="img-fluid">
                    </div>
                </div>
                </div>
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header">
                        Edit Data Produk
                    </div>
                  <div class="card-body">
                <form action="{{url('admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method("PUT")
                  <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Berat</label>
                            <input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Foto</label>
                            <input type="file" class="form-control " name="foto" accept=".png">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                  </div>
                  <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection