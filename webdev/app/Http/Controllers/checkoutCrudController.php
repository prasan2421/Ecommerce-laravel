<?php

namespace App\Http\Controllers;
use App\checkout;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutCrudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:clients');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'addressline'=>'required|min:3',
        'city'=>'required',
           'zip'=>'required',
           'country'=>'required',

    ]);
//        Auth::user()->checkout()->create($request->all());
//        return redirect()->route('index');
        $cartItems= Cart::content();
        foreach ($cartItems as $cart) {

        $checkout=new checkout();

        $checkout->addressline=$request->addressline;
        $checkout->city=$request->city;
            $checkout->country=$request->country;
            $checkout->zip=$request->zip;

            $checkout->product_name=$cart->name;
            $checkout->qty=$cart->qty;
            $checkout->total_price=$cart->total;
            $checkout->tax=$cart->tax;

        $checkout->client_id=Auth::user()->id;
            $checkout->products_id=$cart->id;

//        $checkout->client_product=Auth::user()->;
        $checkout->save();
        }
        Cart::destroy();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
