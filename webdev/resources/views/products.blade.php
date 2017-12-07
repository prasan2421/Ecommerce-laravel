@extends('layout.main')
@section('title')
    Shirts
    @yield('title')
    @stop
@section('body')
    <div class="row text-center">
        <h2>{{$category->name}}</h2>
    </div>

    <div class="row">
        @foreach($category->products as $product)
            <div class="small-4 columns">
                <div class="item-wrapper" >
                    <div class="img-wrapper" style="height: 150px; background-size: cover; ">

                        <a class="button expanded add-to-cart" href="{{route('cart.edit',$product->id)}}">
                            Add to Cart
                        </a>

                        <a href="#">
                            <img src="{{url('images',$product->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt',$product->id)}}">
                        <h3>
                            {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                       Rs.{{$product->price}}
                    </h5>
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    @stop