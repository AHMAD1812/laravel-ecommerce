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
            <form action="{{ url('add_to_cart') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button type="submit" class="btn btn-primary">Add To Cart</button>
            </form>
            <br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>

@endsection