@extends('admin.layout.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Edit Category</h3></div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('category.update',[$category->id])}}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Category Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$category->name}}" required autofocus>

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
                            Edit Category
                        </button>
                    </div>
                </div>
            </form>




        </div>

    </div>

    @stop