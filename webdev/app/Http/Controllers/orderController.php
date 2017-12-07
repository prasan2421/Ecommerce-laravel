<?php

namespace App\Http\Controllers;
use App\checkout;
use App\ordersFresh;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $checkout=checkout::all();
        return view('admin.orders',compact('checkout'));
    }
    public function indexby(){
        $checkout=checkout::all();
        return view('admin.ordersby',compact('checkout'));
    }

    public function store(){

    }
}
