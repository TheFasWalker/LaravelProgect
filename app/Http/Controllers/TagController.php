<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Repositories\TagRepository;

class TagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository= $tagRepository;
    }

    public function index(){

        $tags = $this->tagRepository->all();
        return view('Pages.tags.index',compact('tags'));
    }
    
    public function create(){
       return view ('Pages.tags.create');
    }
    
    public function store(){
        $data = request()->validate([
            'title'=>'string'
        ]);
        $this->tagRepository->store($data);

        return redirect()->route('tags');
        
    }
    
    public function edit(Tag $tag){
        return view('Pages.tags.edit', compact('tag'));

    }
    
    public function update(Tag $tag){
        $data=request()->validate([
            'title'=>'string'
        ]);

        $this->tagRepository->update($data,$tag);
        return redirect()->route('tags');
    }
    
    public function destroy(Tag $tag){
        $tag->delete();
        return redirect()->route('tags');
    }
}
