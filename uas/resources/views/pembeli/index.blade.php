@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data User Pembeli
                        <a href="{{url('admin/pembeli/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No </th>
                                <th>Aksi</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach($list_pembeli as $pembeli)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/pembeli', $pembeli->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('admin/pembeli', $pembeli->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('template.utils.delete', ['url' => url('admin/pembeli', $pembeli->id)])
                                        </div>
                                    </td>
                                    <td>{{$pembeli->username}}</td>
                                    <td>{{$pembeli->nama}}</td>
                                    <td>{{$pembeli->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection