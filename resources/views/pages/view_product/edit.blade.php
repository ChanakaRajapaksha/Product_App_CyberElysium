<form method="post" action="{{ route('product.update', $post->id) }}" enctype="multipart/form-data" role="form"> 
    {{ csrf_field() }}
    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="incomeid"><h5>Product Name</h5></label>
            <input class="form-control form-control-lg" type="text" class="form-control" name="name" value="{{ $post->name }}" required>
            <br>
        </div> 
    </div> 

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="monthlyincome"><h5> Product Price(Rs.)</h5></label>
            <input type="text" class="form-control form-control-lg" name="price" value="{{ $post->price }}" required>
             <br>
        </div>
    </div> 

    <br>

    <div class="col-md-12 text-center">
        <input type="submit" class="btn btn-warning btn-lg" value="UPDATE">
    </div>
</form> 