@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        Ganti password
                    </div>
                    <div class="card-body">
                        <form action="{{ url('setting') }}" method="post">
                            <strong>{{ $user->nama}}</strong>
                            <hr>
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Current password</label>
                                <input type="password" name="current" id="" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="" class="control-label">New password</label>
                                <input type="password" name="new" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Confirm password</label>
                                <input type="password" name="confirm" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection