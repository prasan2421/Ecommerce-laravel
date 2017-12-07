<?php

namespace App\Http\Controllers;

use App\checkout;
use App\products;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function apiindex(){
        $checkout=checkout::all();
        return response()->json($checkout);

    }

    public function apishow($id){
        $checkout=checkout::find($id);
        return response()->json($checkout);

    }

    public function apipost(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',

        ]);
        $products=new products();
        $products->name=$request->name;
        $products->price=$request->price;
        $products->description=$request->description;
        $products->image=$request->image;
        $products->category_id=$request->category_id;
        $products->save();
        return response()->json($products);


    }

    public function apiupdate(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',

        ]);
        $products=products::find($id);
        $products->name=$request->name;
        $products->price=$request->price;
        $products->description=$request->description;
        $products->image=$request->image;
        $products->category_id=$request->category_id;
        $products->save();
        return response()->json($products);


    }
}
