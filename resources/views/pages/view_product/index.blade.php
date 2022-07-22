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
                                <a class="btn btn-warning btn-sm btn-block" href="javascript:void(0)" role="button" onclick="productEditModal({{ $post->id }})">EDIT</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>

    </div>
</div> 

<!-- Modal -->
<div class="modal fade" id="productEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="productEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productEditLabel">Product Details Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="productEditContent">
            
        </div>
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

@push('js')
    <script>
        function productEditModal(post_id) {
            var data = {
                post_id: post_id,
            };
            $.ajax({
                url: "{{ route('product.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                type: 'GET',
                dataType: '',
                data: data,
                success:  function (response) {
                    $('#productEdit').modal('show');
                    $('#productEditContent').html(response);
                }

            });
        }
    </script>
@endpush