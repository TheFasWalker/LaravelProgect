<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;

class PostController extends Controller
{
    public function index(Request $request)
    {
        
        $published = $request->query('is_published');
        $posts =match ($published) {
            'yes' => Post::where('is_published', true)->get(),
             'no'=> Post::where('is_published', false)->get(),
             default => Post::all()
        };

        return view('Pages.post.index',compact('posts'));
    }
    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
      return view('Pages.post.create',compact('categories', 'tags'));

    }
    public function store(StoreRequest $request){

        $data = $request->validated();

        if(isset($data['is_published'])){
            $data['is_published']= 1;
        }

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
    public function update(Post $post, UpdateRequest $request){

        $data = $request->validated();



        if(isset($data['is_published'])){
            $data['is_published']= 1;
        }else{
            $data['is_published']= 0;
        }
        $tags= $data['tags'];
        unset($data['tags']);
        $post->tags()->sync($tags);

        $post->update($data);
        

        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('data');

    }


}
