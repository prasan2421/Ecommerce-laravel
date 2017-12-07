@extends('layout.main')
@section('title')
    Shirts
    @yield('title')
    @stop
@section('body')

    <div class="row">
        @foreach($shirts as $shirt)
            <div class="small-4 columns">
                <div class="item-wrapper" >
                    <div class="img-wrapper" style="height: 150px; background-size: cover; ">
                        <a class="button expanded add-to-cart" href="{{route('cart.edit',$shirt->id)}}">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt',$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                       Rs.{{$shirt->price}}
                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    @stop