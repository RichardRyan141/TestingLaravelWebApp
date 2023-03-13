@extends('master')
@section('content')
<h1>Create NFT</h1>
<form action="/nft" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
    </div>

    <div class="form-group">
        <label for="image_link">Image Link</label>
        <input type="text" class="form-control" name="image_link" placeholder="Enter Image Link" required>
        @error('image_link')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Owner</label>
        <select name="owner_id" class="form-control">
            @foreach ($penggunas as $pengguna)
                <option value="{{ $pengguna->id }}">{{ $pengguna->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="d-flex justify-content-between">
        <a href="/nft" class="btn btn-light"><< Back</a>
        <button type="submit" class="btn btn-primary" style="border-radius: 3px">
            <i class="nav-icon fas fa-plus-circle"></i>
            Add NFT
        </button>
    </div>
</form>
@endsection
