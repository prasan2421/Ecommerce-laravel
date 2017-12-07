@extends('layout.main')

@section('body')
<div class="container">
    <div class="row">
        <div class="small-6 small-centered columns ">
            <div class="panel panel-default">
                <div class="panel-heading">Shipping Informations</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('shipping.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('addressline') ? ' has-error' : '' }}">
                            <label for="addressline" class="col-md-4 control-label">Address Line</label>

                            <div class="col-md-6">
                                <input id="addressline" type="text" class="form-control" name="addressline"  required autofocus>

                                @if ($errors->has('addressline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addressline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" required>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn  button">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
