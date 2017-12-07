@extends('layout.main')
@section('title')
    foundation
    @yield('title')
    @stop
@section('body')
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif


    <div class="row">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Sample User details</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td><div class="image" style="height: 50px; width: 50px;">
                                <img src="{{url('images',$user->image)}}">
                            </div>
                        </td>
                        <td>{{$user->description}}</td>
                        <td><a class="button btn" href="{{route('shirt',$user->id)}}">View</a> </td>
                        <td><a class="button btn" href="{{route('cart.edit',$user->id)}}">Add To Cart</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif






        {{--@foreach($clients as $client)--}}

            {{--{{$client->name}}--}}
            {{--{{$client->email}}--}}

        {{--@endforeach--}}
    </div>

    @stop