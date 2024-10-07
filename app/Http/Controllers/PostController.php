<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('Pages.post.index',compact('posts'));
    }
    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
      return view('Pages.post.create',compact('categories', 'tags'));

    }
    public function store(){
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>'',
            'tags'=>''
        ]);
       
        $tags= $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);

        return redirect()->route('data');
    }
    public function show(Post $post){
        return view('Pages.post.postDetail', compact('post'));
    }

    public function edit(Post $post){
        $categories = Category::all();
        $tags = Tag::all();
        return view('Pages.post.edit', compact('post','categories','tags'));
    }
    public function update(Post $post){

        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>''
        ]);
        $post->update($data);
        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('data');

    }


}
