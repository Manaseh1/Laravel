<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stringable;
use Illuminate\Support\Str;
use App\Models\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Post::all();
        return view('view',['posts'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts =Post::all();
        return view('create',compact('posts'));      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$allEntries =$request->all(); dd($allEntries);
        $request->validate([
            'name'=>'required',
            'body'=>'required',
            'imagepath'=>'required'
        ]);
       // dd('validate successful');
        $name =$request->input('name');
        $slug =Str::slug($name,'-');
        $body =$request->input('body');
        $imagepath='storage/' . $request->file('imagepath')->store('imagesfolder','public');

        $post =new Post();
        $post->name =$name;
        $post->slug=$slug;
        $post->body=$body;
        $post->imagepath=$imagepath;
        $post->save();
        return redirect('posts')->with('message','Blog Post successfully saved');

    }

    /**
     * Display the specified resource
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
