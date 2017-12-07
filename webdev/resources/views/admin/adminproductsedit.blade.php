@extends('admin.layout.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Edit Product</h3></div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data"  action="{{route('products.update',[$products->id])}}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Product Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"  value="{{$products->name}}" >

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <label for="number" class="col-md-4 control-label">Price</label>

                    <div class="col-md-6">
                        <input id="price" type="number" class="form-control" name="price" value="{{$products->price}}"  >

                        @if ($errors->has('price'))
                            <span class="help-block">
                                     <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">Description</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control" name="description" value="{{$products->description}}" >

                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id" class="col-md-4 control-label">Category Id</label>

                    <div class="col-md-6">
                        <select name="category_id" class="form-control"  >
                            @foreach($categories as $category)

                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>

                            @endforeach



                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-md-4 control-label">Choose Image</label>

                    <input type="file" name="image" class="col-md-6"/>




                </div>




                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @stop