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
        Post::create($data);
        return redirect()->route('data');
    }
    public function show(Post $post){
        return view('Pages.post.postDetail', compact('post'));
    }

    public function edit(Post $post){
        return view('Pages.post.edit', compact('post'));
    }
    public function update(Post $post){
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string'
        ]);
        $post->update($data);
        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('data');

    }


}
