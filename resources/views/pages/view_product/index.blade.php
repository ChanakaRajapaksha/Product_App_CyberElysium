@extends('layouts.product_app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12 text-center">
            <h1 class="page-title">Products</h1>
        </div>

        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody> 
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->price }}</td>
                        <td><img src="{{ config('images.upload_path') }}/{{ $post->images->name }}" class="table-iamge"></td>
                        <td>
                            @if ($post->status == 0)
                                <span class="badge bg-danger">Inactive</span>
                            @else
                                <span class="badge bg-primary">Active</span> 
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm btn-block" href="{{ route('product.delete', $post->id) }}" role="button">DELETE</a>
                            @if ($post->status == 0)
                                <a class="btn btn-warning btn-sm btn-block" href="{{ route('product.done', $post->id) }}" role="button">PUBLISH</a>
                            @else
                                <a class="btn btn-warning btn-sm btn-block" href="{{ route('product.done', $post->id) }}" role="button">DRAFT</a>
                            @endif
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>

    </div>
</div>        
@endsection 

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            padding-bottom: 8vh;
            font-size: 60px;
            color: #1A237E;
        } 
        .table-iamge {
            width: 150px;
            height: 120px;
        }
    </style>
@endpush