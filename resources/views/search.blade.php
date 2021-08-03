@extends('master')
@section('content')
<div class="custom-product">
   
        <div class="trending-wrapper">
              <h3>Search Products</h3>
            @foreach ($products as $item)
              <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}" alt="Chania">
                <div class="">
                  <h2>{{$item['name']}}</h2>
                  <h4>{{$item['description']}}</h4>
                </div>
                </a>
              </div>
            @endforeach
        </div>

</div>

@endsection