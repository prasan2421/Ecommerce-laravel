<?php

namespace App\Http\Controllers;

use App\category;
use App\products;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
       $categories=category::all();
        return view('admin.adminproducts',['categories'=>$categories]);
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

            'name'=>'required|min:3',
            'price'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'image'=>'required'

        ]);

        $product=new products();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->category_id=$request->category_id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
           $product->image=$name;
        }
        $product->save();
//        $products=$request->except('image');
//        //image upload
//        $image=$request->image;
//        if($image){
//            $imageNames=$image->getClientOriginalName();
//            $image->move('images',$imageNames);
//            $products['image']=$imageNames;
//        }
//        products::create($products);
        //save message

   return redirect('/admin/productslist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products=products::all();
        return view('/admin/productlist',['products'=>$products]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $categories = category::all();
        $products = products::find($id);
        return view('admin/adminproductsedit',['products'=>$products],['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $product=products::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->category_id=$request->category_id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $product->image=$name;
        }
        $product->save();
        return redirect('/admin/productslist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = products::find($id);
        $products->delete($products);

        // redirect


        return redirect('admin/productslist');
    }



}
