<?php

namespace App\Http\Controllers;

use App\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content=content::all();
        return view('admin.registercontent',compact('content'));
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
            'heading'=>'required|min:3',
            'text'=>'required|min:5',
            'image'=>'required'
        ]);
        $content=new content();
        $content->heading=$request->heading;
        $content->text=$request->text;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/content');
            $image->move($destinationPath, $name);
            $content->image=$name;
        }
        $content->save();

        return redirect()->route('content.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = content::find($id);
        $content->delete($content);

        // redirect


        return redirect()->route('content.index');
    }
}
