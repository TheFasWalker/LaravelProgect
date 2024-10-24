<?php

namespace App\Repositories;
use App\Repositories\Interfaces\PostRepositoryInterfase;
use App\Models\Post;

class PostRepository implements PostRepositoryInterfase
{
    public function all(){

        $posts = Post::paginate(10);
        return $posts;
    }

    
    public function getData($data){

        if($data !==[]){
            $key = array_keys($data)[0];
            $value = $data[$key];
            return Post::where($key, $value)->where('deleted_at',null)->paginate(10);

        }else{
            return Post::paginate(10);
        }
        
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