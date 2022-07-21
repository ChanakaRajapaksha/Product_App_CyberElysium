@extends('layouts.product_app')

@section('content')
    <div class="container">
    <div class="row">

        <div class="col-md-12 text-center">
            <h1 class="page-title">Product Details</h1>
        </div>

        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form"> 
            {{ csrf_field() }}
            <div class="row justify-content-around">
                <div class="col-md-8 mb-4">
                    <label for="incomeid"><h5>Product Name</h5></label>
                    <input class="form-control form-control-lg" type="text" class="form-control" name="name">
                    <br>
                </div> 
            </div> 

            <div class="row justify-content-around">
                <div class="col-md-8 mb-4">
                    <label for="monthlyincome"><h5> Product Price(Rs.)</h5></label>
                    <input type="text" class="form-control form-control-lg" name="price">
                     <br>
                </div>
            </div>

            <br>

            <div class="col-md-12 text-center">
                <p><input type="submit" class="btn btn-warning btn-lg" value="ADD PRODUCT">
                    <a class="btn btn-warning btn-lg btn-block" href="/view" role="button">VIEW PRODUCT</a></p>
            </div>
        </form>            
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
    </style>
@endpush