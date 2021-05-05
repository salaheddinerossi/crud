<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('index')->with('post',$post);
    }
    public function about(){
        return view('page-about');
    }
    public function contact(){
        return view('page-contact');
    }
    public function style (){
        return view('styles');
    }
    public function category(){
        return view('category');
    }
}
