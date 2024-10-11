<?php
namespace App\View\Composers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostComposer
{
    private $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function compose(View $view, ){
        $posts= $this->postRepository->all();
        $view->with('posts',$posts);

    }
}