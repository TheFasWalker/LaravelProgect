<?php 
namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\Interfaces\TagRepositoryInterfase;

class TagRepository implements TagRepositoryInterfase
{
    public function all(){
        return Tag::all();
    }
    public function store($data){
        Tag::create($data);
    }
    public function update($data,$tag){
        $tag->update($data);
    }
}