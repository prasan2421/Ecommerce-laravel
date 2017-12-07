@extends('admin.layout.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Register Content</h3></div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('content.post')}}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Title</label>

                    <div class="col-md-6">
                        <input id="heading" type="text" class="form-control" name="heading"  required autofocus>

                        @if ($errors->has('heading'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('heading') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                    <label for="text" class="col-md-4 control-label">Content</label>

                    <div class="col-md-6">
                        <input id="text" type="text" class="form-control" name="text" required>

                        @if ($errors->has('text'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label for="image" class="col-md-4 control-label">Choose Image</label>

                    <input type="file" name="image" class="col-md-6">
                    @if ($errors->has('image'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                    @endif



                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register Content
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="panel panel-default">
        @foreach($content as $cont)
            <div class="row">
        <div class="small-6 columns medium-text-center">
            {{$cont->heading}}
        </div>
            <div class="small-6 columns text-center">
                <a class="btn btn-lg btn-danger mar-top-20px " style="float: right; width: 70px; " href="{{route('content.destroy',[$cont->id])}}" role="button"><b style="font-size: 13px;">Delete<b></b></a>
            </div>
            </div>

        @endforeach
    </div>
    @stop