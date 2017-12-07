@extends('admin.layout.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Register Category</h3></div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('category.store')}}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Category Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"  required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

            <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register Category
                        </button>
                    </div>
                </div>
            </form>




        </div>

    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Category List</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Category names</b></h5>

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
            </div>
            @foreach($category as $categories)

                <div class="row">
                    <div class="col-md-6">
                        {{$categories->name}}
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-primary mar-top-20px " style="float: left; width: 70px; " href="{{route('category.edit',[$categories->id])}}" role="button"><b style="font-size: 13px;">Edit</b></a>

                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-lg btn-danger mar-top-20px " style="float: right; width: 70px; " href="{{route('category.destroy',[$categories->id])}}" role="button"><b style="font-size: 13px;">Delete<b></b></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @stop