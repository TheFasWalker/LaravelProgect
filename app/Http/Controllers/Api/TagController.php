<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Resources\Api\TagResource;
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = $this->tagRepository->all();
        return TagResource::collection($tags);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
       $createdTag = $this->tagRepository->storeForApi($data);

        return response()->json($createdTag, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return $tag;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request ,Tag $tag)
    {
        $data=$request->validated();
        $this->tagRepository->update($data,$tag);
        return response()->json($tag , 200);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json(['message' => 'Tag deleted successfully.'], 200);
    }
}
