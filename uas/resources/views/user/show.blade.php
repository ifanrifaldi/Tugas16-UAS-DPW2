@extends('template.base')

@section('content')
    
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card">
                    <div class="card-body">
                    <img src="{{ url("public/$user->foto") }}" alt="{{$user->foto}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9 ">
                <div class="card">
                    <div class="card-header">
                        Detail Data User
                        <a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Edit Data </a>
                    </div>
                    <div class="card-body">
                        <h3>{{$user->nama}}</h3>
                        <hr>
                        <p>
                            Username : {{"@".$user->username}} <br>
                            Email : {{$user->email}} <br>
                            Level : {{$user->level_string}} <br>
                            Jenis Kelamin : {{$user->jenis_kelamin_string}} <br>
                            No Handphone : {{$user->detail->no_handphone}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection