<?php 
namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\Interfaces\TagRepositoryInterfase;

class TagRepository implements TagRepositoryInterfase
{
    public function all(){
        return Tag::paginate(10);
    }
    public function store($data){
        Tag::create($data);
    }
    public function update($data,$tag){
        $tag->update($data);
    }
    public function findById($id){
        Tag::findOrFail($id);
    }
    public function storeForApi($data){
        $tag= Tag::create($data);
        $createdEl = Tag::find($tag->id);
        return $createdEl;
    }
}