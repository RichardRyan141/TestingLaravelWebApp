@extends('master')
@section('content')
    <h1>Users List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>UID</th>
                <th>Name</th>
                <th>Number of NFTs Owned</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penggunas as $pengguna)
                <tr>
                    <td>{{ $pengguna->uid }}</td>
                    <td>{{ $pengguna->name }}</td>
                    <td>{{ $pengguna->nft->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/user/create" class="btn btn-primary mb-2">Create User</a>
@endsection
