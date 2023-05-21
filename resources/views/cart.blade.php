
@extends('master')
@section('content')

<div class="container">
    <div class="divTable div-hover">
        
            <div class="rowTable bg-primary text-white pb-2">
                <div class="divTableCol">Product</div>
                <div class="divTableCol">Authorized</div>
                <div class="divTableCol">Quantity</div>
                <div class="divTableCol">Price</div>
                <div class="divTableCol">Total</div>
                <div class="divTableCol">Actions</div>
            </div>
        
        
            @foreach($cart as $item)
            <div class="rowTable">
                <div class="divTableCol">
                    <div class="media">
                        <a class="thumbnail pull-left mr-2" href="#">
                            <img class="media-object" src="{{$item->image}}" style="width: 72px; height: 72px;" />
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">{{$item->name}}</a></h6>
                            <p class="media-heading"> <a href="#">{{$item->description}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="divTableCol"><strong class="label label-success">Authorized</strong></div>
                <div class="divTableCol">
                  <span>3</span>
                </div>
                <div class="divTableCol"><strong>${{$item->price}}</strong></div>
                <div class="divTableCol"><strong>${{$item->price}}</strong></div>
                <div class="divTableCol">
                    <button type="button" class="btn btn-danger"><span class="fa fa-remove"></span> Remove</button>
                </div>
            </div>

            @endforeach
     
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h5>Subtotal</h5></div>
                <div class="divTableCol">
                    <h5><strong>${{ $cart->pluck('price')->sum()}}</strong></h5>
                </div>
            </div>
       
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h3>Total</h3></div>
                <div class="divTableCol">
                    <h3><strong>${{ $cart->pluck('price')->sum()}}</strong></h3>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
            
                <div class="divTableCol">
                    <button type="button" class="btn btn-success">Proceed</span></button>
                </div>
            </div>        
    </div>
</div>
@endsection
