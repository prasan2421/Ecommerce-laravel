@extends('layout.main')
@section('title')
    Shirts
    @yield('title')
    @stop
@section('body')
    @foreach($content as $key=>$contents)
    <div class="row" style="height: auto;width: 100%;">
        @if($key%2==0)
            <div class="small-4 columns text-center float-left" style="background-color: #e8e8e8; height: auto; "><h2>{{$contents->heading}}</h2><br>{{$contents->text}}</div>

            <div class="small-8 columns text-center float-right" style="height: auto; overflow: hidden; "><img src="{{url('content',$contents->image)}}"/></div>

            @endif

            @if($key%2==1)
                <div class="small-8 columns text-center float-left" style=" height: auto; overflow: hidden; "><img src="{{url('content',$contents->image)}}"/></div>

                <div class="small-4 columns text-center float-right" style="background-color: #e8e8e8; height: auto; "><h2>{{$contents->heading}}</h2><br>{{$contents->text}}</div>


            @endif

    </div>
    <br/>


{{----}}


    {{--<div class="row">--}}
        {{--<div class="small-8 columns text-center">left</div>--}}
        {{--<div class="small-4 columns text-center">right</div>--}}
    {{--</div>--}}
    @endforeach





    {{--<div class="row">--}}
        {{--@foreach($shirts as $shirt)--}}
            {{--<div class="small-4 columns">--}}
                {{--<div class="item-wrapper" >--}}
                    {{--<div class="img-wrapper" style="height: 150px; background-size: cover; ">--}}
                        {{--<a class="button expanded add-to-cart" href="{{route('cart.edit',$shirt->id)}}">--}}
                            {{--Add to Cart--}}
                        {{--</a>--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('images',$shirt->image)}}"/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<a href="{{route('shirt',$shirt->id)}}">--}}
                        {{--<h3>--}}
                            {{--{{$shirt->name}}--}}
                        {{--</h3>--}}
                    {{--</a>--}}
                    {{--<h5>--}}
                       {{--Rs.{{$shirt->price}}--}}
                    {{--</h5>--}}
                    {{--<p>--}}
                        {{--{{$shirt->description}}--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
    @stop