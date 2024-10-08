<?php

namespace App\Repositories;
use App\Repositories\Interfaces\PostRepositoryInterfase;
use App\Models\Post;

class PostRepository implements PostRepositoryInterfase
{
    public function all($published){

        $posts =match ($published) {
            'yes' => Post::where('is_published', true)->get(),
             'no'=> Post::where('is_published', false)->get(),
             default => Post::all()
        };
        return $posts;
    }
    
    public function store($data){
        if(isset($data['is_published'])){
            $data['is_published']= 1;
        }

        $tags= $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);
    }
}