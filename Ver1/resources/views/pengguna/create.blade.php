@extends('master')
@section('content')
<h1>Create User</h1>
<form action="/user" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class=="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="nama" placeholder="Enter Name">
                        @error('nama')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype your Password">
                        @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="/user" class="btn btn-light"><< Back</a>
                        <button type="submit" class="btn btn-primary" style="border-radius: 3px">
                            <i class="nav-icon fas fa-plus-circle"></i>
                            Add User
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
