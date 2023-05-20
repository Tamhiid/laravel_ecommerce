@extends('master')
@section('content')


<div class="container">
    <div class="row">

   
    <div class="col-md-6">
    <img src="{{$product['image']}}" alt="">
    </div>
    <div class="col-md-6 mt-5">
        <h3>Product: {{$product['name']}}</h3>
        <h5>Price: {{$product['price']}}</h5>
        <h5>Description: {{$product['description']}} </h5>
    <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" id="" value="{{$product['id']}}">
    
        <button class="btn btn-primary">Add to cart</button>
        </form>
        <button class="btn btn-success">Buy Now</button>
    </div>
    </div>
</div>


@endsection