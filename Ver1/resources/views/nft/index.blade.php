@extends('master')
@section('content')
    <h1>NFT List</h1>
    <div class="row">
        @foreach ($nfts as $nft)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $nft->image_link }}" alt="{{ $nft->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $nft->name }}</h5>
                        <p class="card-text">{{ $nft->description }}</p>
                    </div>
                    <div class="card-footer">
                        Owner: {{ $nft->pengguna->name }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-12 mt-4">
        <a href="/nft/create" class="btn btn-primary btn-create">
            Create NFT
        </a>
    </div>
@endsection
