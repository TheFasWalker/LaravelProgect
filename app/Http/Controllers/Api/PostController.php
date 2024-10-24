<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PostResource;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->query();
        $posts = $this->postRepository->getData($data);

        // $data = $request->query();
        // $query = Post::where('deleted_at', null);

        // if (!empty($data)) {
        //     foreach ($data as $key => $value) {
        //         if (!empty($value)) {
        //             $query->where($key, 'LIKE', '%' . $value . '%');
        //         }
        //     }
        // }

        // $posts = $query->paginate(10);
        return PostResource::collection(($posts));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
