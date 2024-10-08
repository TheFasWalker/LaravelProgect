<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function index(Request $request)
    {
        
        $published = $request->query('is_published');
        $posts= $this->postRepository->all($published);

        return view('Pages.post.index',compact('posts'));
    }
    public function create(){

        $categories = Category::all();
        $tags = Tag::all();
      
        return view('Pages.post.create',compact('categories', 'tags'));

    }
    public function store(StoreRequest $request){

        $data = $request->validated();

        $this->postRepository->store($data);

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

        $this->postRepository->update($post,$data);

        return redirect()->route('post.show',$post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('data');

    }


}
