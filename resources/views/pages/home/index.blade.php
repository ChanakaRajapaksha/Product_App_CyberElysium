@extends('layouts.product_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">Home Page</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($posts as $post)
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ config('images.upload_path') }}/{{ $post->images->name }}" alt="Product Image" class="product-image" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->name }}</h5>
                          <h5 class="card-title">RS. {{ $post->price }}</h5>
                        </div>
                      </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <h2 class="text-danger">No Image Found!</h2>
                </div>
            @endforelse
        </div>
    </div>
@endsection 

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            padding-bottom: 10vh;
            font-size: 60px;
            color: #1A237E;
        }
        .product-image {
            max-height: 20rem;
        }
    </style>
@endpush