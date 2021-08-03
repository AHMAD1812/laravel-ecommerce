@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail_img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href='/laravel-ecommerce/public/'>Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>{{$product['description']}}</h4>
            <h4>{{$product['catagory']}}</h4>
            <br>
            <button class="btn btn-primary">Add To Cart</button>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>

@endsection