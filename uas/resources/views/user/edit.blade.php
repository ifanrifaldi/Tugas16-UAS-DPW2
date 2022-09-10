@extends('template.base')

@section('content')
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url("public/$user->foto") }}" alt="" class="img-fluid">
                    </div>
                </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/user', $user->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')                       
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Foto</label>
                                <input type="file" class="form-control " name="foto" accept=".png">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Level</label>
                                <input type="text" class="form-control" name="level">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$user->username}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No Handphone</label>
                                <input type="text" class="form-control" name="no_handphone">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection