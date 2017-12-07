@extends('admin.layout.admin')
@section('content')
    <h3>Products</h3><br>
    <div class="row">
        <div class="col-md-12 ">
            <div class="">


                <div class="panel-body">
                    <div class="col-md-2"><b>Name</b></div>
                    <div class="col-md-2"><b>Price</b></div>
                    <div class="col-md-2"><b>Description</b></div>
                    <div class="col-md-2"><b>Category</b></div>
                    <div class="col-md-2"><b>Image</b></div>

                    <div class="col-md-2"></div>
                </div>
                <div class="panel-body">

                    @foreach($products as $product)
                        <div class="row">
                            <div class="col-md-2">
                                {{$product->name}}
                            </div>
                            <div class="col-md-2">
                                {{$product->price}}
                            </div>
                            <div class="col-md-2">
                                {{$product->description}}
                            </div>
                            <div class="col-md-2">
                                {{$product->category_id}}
                            </div>
                            <div class="col-md-2">
                                {{$product->image}}
                            </div>

                            <div class="col-md-2">
                                <a class="btn btn-lg btn-primary mar-top-20px " style="float: left; width: 70px; " href="{{route('products.edit',[$product->id])}}" role="button"><b style="font-size: 13px;">Edit</b></a>
                                <a class="btn btn-lg btn-danger mar-top-20px " style="float: right; width: 70px; " href="{{route('products.destroy',[$product->id])}}" role="button"><b style="font-size: 13px;">Delete<b></b></a>
                            </div>
                        </div><hr/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection