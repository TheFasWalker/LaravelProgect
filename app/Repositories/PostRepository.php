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
}