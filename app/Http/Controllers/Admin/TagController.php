<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use App\Models\Tag;
use App\Repositories\TagRepository;
use Illuminate\Http\Request;

class TagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    public function index(){
        return view('Pages.Admin.tags.index');
    }

    public function create(){
        return view('Pages.Admin.tags.create');
    }

    public function store(StoreRequest $request){
        $data= $request->validated();
        $this->tagRepository->store($data);
        return redirect()->route('admin.tags');

    }
    public function edit(Tag $tag){
        return view('Pages.Admin.tags.edit',compact('tag'));
    }
}
