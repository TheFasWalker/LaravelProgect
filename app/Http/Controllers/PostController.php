<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('Pages.post.index',compact('posts'));
    }
    public function create(){
      return view('Pages.post.create');

    }
    public function store(){
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        // dd($data); 
        Post::create($data);
        return redirect()->route('data');
    
    }



}
