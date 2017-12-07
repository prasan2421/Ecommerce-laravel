@extends('layout.main')
@section('title')
    Shirt
    @yield('title')
    @stop
@section('body')
    <div class="row">



        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">

                        <img src="{{url('images',$products->image)}}"/>

                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="header">
                    <span class="price-tag">{{$products->name}}</span>
                </h3>
                <h3 class="subheader">
                    <span class="price-tag">{{$products->price}}</span> {{$products->description}}
                </h3>
                <div class="row">
                    <div class="large-12 columns">

                        <a href="{{route('cart.edit',$products->id)}}" class="button  expanded">Add to Cart</a>
                    </div>
                </div>


            </div>
        </div>

    </div>
    @stop