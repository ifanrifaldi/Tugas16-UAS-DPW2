@extends('template.base')

@section('content')
    
    <div class="container">
                    <div class="card">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/pembeli', $pembeli->id)}}" method="post">
                            @csrf
                            @method('put')                       
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$pembeli->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$pembeli->username}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$pembeli->email}}">
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