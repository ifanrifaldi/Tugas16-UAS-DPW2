@extends('template.base')

@section('content')
    
        <div class="container">
                <div class="card">
                    <div class="card-header">
                        Detail Data User Pembeli
                        <a href="{{url('admin/pembeli', $pembeli->id)}}/edit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Edit Data </a>
                    </div>
                    <div class="card-body">
                        <h3>{{$pembeli->nama}}</h3>
                        <hr>
                        <p>
                            Username : {{"@".$pembeli->username}} <br>
                            Email : {{$pembeli->email}} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection