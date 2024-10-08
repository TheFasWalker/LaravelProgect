<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
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
    
    public function store(StoreRequest $request){
        $data = $request->validated();
        $this->tagRepository->store($data);

        return redirect()->route('tags');
        
    }
    
    public function edit(Tag $tag){
        return view('Pages.tags.edit', compact('tag'));

    }
    
    public function update(UpdateRequest $request,Tag $tag){
        $data=$request->validated();

        $this->tagRepository->update($data,$tag);
        return redirect()->route('tags');
    }
    
    public function destroy(Tag $tag){
        $tag->delete();
        return redirect()->route('tags');
    }
}
