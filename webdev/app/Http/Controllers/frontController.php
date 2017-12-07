<?php

namespace App\Http\Controllers;
use App\category;
use App\content;
use App\products;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class frontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:clients');
    }

    public function index(){
        $category=category::all();
        return view('/index',['category'=>$category]);

    }
    public function search()
    {
        $q = Input::get('search');
        $products = products::where('description', 'LIKE', '%' . $q . '%')->get();

        if (count($products) > 0) {
            return view('/search')->withDetails($products)->withQuery($q);
        } else {
            return view('/search')->withErrors(['no details found']);


        }

    }
//    public function search($searchkey){
//        $clients = Client::search($searchkey)->get();
//        return view('/search',compact('clients'));
//
//
//
//
//    }
    public function shirts(){
        $shirts=products::all();
        return view('shirts',['shirts'=>$shirts]);
    }

    public function categoryshow($id){

//        $shirts=products::all();
        $category=category::find($id);
//        $products = products::where('category_id','=', $category->id)->get();
        return view('products',['category'=>$category]);
    }
    public function shirt($id){
        $products=products::find($id);

        return view('shirt',['products'=>$products]);
    }

//    public function wallpaper(Request $request){
//        $product=new products();
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $name = time().'.'.$image->getClientOriginalExtension();
//            $destinationPath = public_path('/wallpaper');
//            $image->move($destinationPath, $name);
//            $product->image=$name;
//        }
//        //save message
//        $product->save();
//        return redirect('/admin');
//    }
//    public function edit($id)
//    {
//        $product=products::find($id);
//        Cart::add($id,$product->name,1,$product->price);
//        return redirect()->back()->with('success', 'added');
//    }

public function content(){
    $content=content::all();
    return view('content',compact('content'));

}

}
