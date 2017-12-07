@extends('admin.layout.admin')
@section('content')
    <h3>Orders</h3><br>
    <div class="row">


    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="">


                <div class="panel-body">
                    <div class="col-md-2"><b>Customer</b></div>
                    <div class="col-md-2"><b>E-mail</b></div>
                    <div class="col-md-2"><b>Product</b></div>
                    <div class="col-md-1"><b>QTY</b></div>
                    <div class="col-md-2"><b>Address line</b></div>
                    <div class="col-md-2"><b>City</b></div>
                    <div class="col-md-1"><b>Total</b></div>

                </div>
                <div class="panel-body">

                    @foreach($checkout as $checkouts)
                        <div class="row">
                            <div class="col-md-2">
                                {{$checkouts->client->name}}
                            </div>
                            <div class="col-md-2">
                                {{$checkouts->client->email}}
                            </div>
                            <div class="col-md-2">

                                {{$checkouts->product_name}}
                            </div>
                            <div class="col-md-1">
                                {{$checkouts->qty}}
                            </div>
                            <div class="col-md-2">
                                {{$checkouts->addressline}}
                            </div>
                            <div class="col-md-2">
                                {{$checkouts->city}}
                            </div>

                            <div class="col-md-1">
                                {{$checkouts->total_price}}
                            </div>


                            {{--<div class="col-md-2">--}}
                                {{--<a class="btn btn-lg btn-primary mar-top-20px " style="float: left; width: 70px; " href="{{route('products.edit',[$product->id])}}" role="button"><b style="font-size: 13px;">Edit</b></a>--}}
                                {{--<a class="btn btn-lg btn-danger mar-top-20px " style="float: right; width: 70px; " href="{{route('products.destroy',[$product->id])}}" role="button"><b style="font-size: 13px;">Delete<b></b></a>--}}
                            {{--</div>--}}
                        </div><hr/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection