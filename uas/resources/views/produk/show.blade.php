@extends('template.base')

@section('content')

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9 ">
                <div class="card">
                    <div class="card-header">
                        Data Product
                        <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <h1>{{$produk->nama}}</h1>
                        <hr>
                        <p>
                            {{$produk->harga}} |
                            Stok : {{$produk->stok}} | 
                            Berat : {{$produk->berat}} gr
                            Seller : {{$produk->seller->nama}}
                            Ditambahkan : {{$produk->created_at->format("d F Y")}} |
                            Diedit : {{$produk->updated_at->diffForHumans()}}
                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection