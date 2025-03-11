{{-- @extends('layout.main')
@section('mainsection')
    <h1>products Page</h1><hr/>
    <div class="row">
        @forelse ($products as $product)
        <div class="col-3 mb-3">  
            <div class="card">
                <img src="{{$product['image']}}" class="card-img-top" height="200px">
                <div class="card-body">
                    <h5 class="card-title">{{$product["name"]}}</h5>
                    <p class="card-text">{{$product['category']}}</p>
                    <p class="card-text">&#8377;{{$product['price']}}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>  </div></div>
        @empty
            <h1>No Product Found</h1>
        @endforelse


          
    </div>
@endsection --}}



@extends('layout.main')
@section('mainsection')
    <h1>products Page</h1><hr/>
    <div class="row">
        @forelse ($products as $product)
                <x-products :product="$product"></x-products>
        @empty
            <h1>No Product Found</h1>
        @endforelse
    </div>
@endsection