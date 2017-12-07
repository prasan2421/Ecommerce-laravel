@extends('layout.main')
@section('title')
    foundation
    @yield('title')
    @stop
@section('body')


    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Hey! Welcome to MC- Mykey's Store
            </strong>
        </h2>
        <br>
        <a href="{{route('shirts')}}"><button class="button large">Check out My Shirts</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Category
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">

        @foreach($category as $categories)
            <div class="col-md-3 columns">
        <a class="button expanded"  href="{{route('category.show',[$categories->id])}}">
            {{$categories->name}}
        </a>
        </div>
        @endforeach

    </div>


    <!-- Footer -->
    <br>

    @stop