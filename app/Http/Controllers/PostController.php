<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:5048'
        ]);
        $newImageName = time() . '-' .$request->titre . '.' . $request->image->extension();
        $request->image->move(public_path(''),$newImageName);
        $post= Post::create([
            'titre'=>$request->input('titre'),
            'content'=>$request->input('content'),
            'image'=>$newImageName
        ]);
        $post->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);
        return view('post.index')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('post.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titre'=>'required',
            'content'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:5048'
        ]);
        $newImageName = time() . '-' .$request->titre . '.' . $request->image->extension();
        $request->image->move(public_path(''),$newImageName);
        $post->update([
            'titre'=>$request->input('titre'),
            'content'=>$request->input('content'),
            'image'=>$newImageName
        ]);
        $post->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return redirect('/')->with('success','post deleted');

    }
}
