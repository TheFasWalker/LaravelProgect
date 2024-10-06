<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('Pages.Posts',compact('posts'));
    }


    public function create(){
      return view('Pages.Posts.CreatePost');

    }

    public function update()
    {
DD('update');
    }
    public function delete()
    {
DD ('delete');
    }

}
