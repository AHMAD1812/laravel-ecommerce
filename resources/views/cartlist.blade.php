@extends('master')
@section('content')
<div class="custom-product">
       <div class="col-sm-10">
        <div class="trending-wrapper">
              <h3>Cart Products</h3>
            @foreach ($products as $item)
              <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" alt="Chania">
                    
                    </a>
                </div>
                <div class="col-sm-3">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h4>{{$item->description}}</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-warning">Remove From Cart</button>
                </div>
              </div>
              
            @endforeach
        </div>
       </div>

</div>

@endsection