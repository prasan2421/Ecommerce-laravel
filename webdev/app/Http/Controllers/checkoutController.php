<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:clients');
    }

    public function index()
    {
        return view('checkout');
    }


}
