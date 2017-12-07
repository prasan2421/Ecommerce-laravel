@extends('layout.main')
@section('title')
    foundation
    @yield('title')
    @stop
@section('body')
    <div class="large-text-center"><h2>CART</h2></div>
<div class="row">


        <div class="small-2 columns">
            <div class="item-wrapper" >
               <b>Product name</b>


            </div>
        </div>
    <div class="small-2 columns">
        <div class="item-wrapper" >
            <b>Product Image</b>


        </div>
    </div>
        <div class="small-2 columns">
            <div class="item-wrapper" >

               <b>Price</b>



            </div>
        </div>
        <div class="small-2 columns">
            <div class="item-wrapper" >

                <b>Quantity</b>



            </div>
        </div>
    <div class="small-2 columns">
        <div class="item-wrapper" >

            <b>Delete</b>



        </div>
    </div>
        <div class="small-2 columns">
            <div class="item-wrapper" >

                <b>Total</b>



            </div>
        </div>



    @foreach($cartItems as $cartItem)

        <div class="small-2 columns">
            <div class="item-wrapper" style="height: 120px;">
                {{$cartItem->name}}


            </div>
        </div>
        <div class="small-2 columns">
            <div class="item-wrapper" style="height: 120px;width: 100%;">

                <img src="{{url('images',$cartItem->options->image)}}">


            </div>
        </div>
        <div class="small-2 columns">
            <div class="item-wrapper" style="height: 120px;" >

                Rs.{{$cartItem->price}}



            </div>
        </div>
        <div class="small-2 columns">
            <div class="item-wrapper" style="height: 120px;">
                <form class="form-horizontal" method="POST" action="{{ route('cart.update',[$cartItem->rowId]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}




                    <input class="small-6 " id="qty" type="number" class="form-control" name="qty" value="{{ $cartItem->qty }}"  required autofocus>
                    <input class="small-6 " type="submit" class="btn btn-sm btn-default" value="OK">




                </form>



            </div>
        </div>
        <div class="small-2 columns">
            <div class="item-wrapper" style="height: 120px;">
                <form class="form-horizontal" method="POST" action="{{route('cart.destroy',[$cartItem->rowId])}}">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                <input class="small-6 button" id="delete" type="submit" value="delete" name="delete">
                </form>


            </div>
        </div>
        <div class="small-2 columns">
            <div class="item-wrapper" style="height: 120px;">
               {{$cartItem->price*$cartItem->qty}}



            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="small-2 float-left">
            <div class="item-wrapper">
                <a class="btn button btn-success" href="{{route('checkout.index')}}" >Checkout</a>
            </div>
        </div>
        <div class="small-4 float-right">
            <div class="item-wrapper">
           Sub-total:- {{Cart::subtotal()}}<br>
            Tax:- {{Cart::tax()}}<br>
            Grand-total:- {{Cart::total()}}
                </div>
        </div>
    </div>

</div>


    @stop





