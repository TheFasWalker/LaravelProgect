<?php

namespace App\Repositories;
use App\Repositories\Interfaces\PostRepositoryInterfase;
use App\Model\Post;

class PostRepository implements PostRepositoryInterfase
{
    public function all(){
        return Post::all();
    }
}