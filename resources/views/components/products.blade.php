{{-- anonymous comp --}}

<div class="col-3 mb-3">  
    <div class="card">
        <img src="{{$product['image']}}" class="card-img-top" height="200px">
        <div class="card-body">
            <h5 class="card-title">{{$product["name"]}}</h5>
            <p class="card-text">{{$product['category']}}</p>
            <p class="card-text">&#8377;{{$product['price']}}</p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>  </div></div>