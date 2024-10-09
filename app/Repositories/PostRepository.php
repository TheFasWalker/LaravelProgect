<?php

namespace App\Repositories;
use App\Repositories\Interfaces\PostRepositoryInterfase;
use App\Models\Post;

class PostRepository implements PostRepositoryInterfase
{
    public function all($published){

        $posts =match ($published) {
            'yes' => Post::where('is_published', true)->paginate(6),
             'no'=> Post::where('is_published', false)->paginate(6),
             default => Post::paginate(6)
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

    public function update($post ,$data){
        if(isset($data['is_published'])){
            $data['is_published']= 1;
        }else{
            $data['is_published']= 0;
        }
        $tags= $data['tags'];
        unset($data['tags']);
        $post->tags()->sync($tags);

        $post->update($data);
    }
}