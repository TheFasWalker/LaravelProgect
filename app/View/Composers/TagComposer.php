<?php
namespace App\View\Composers;

use App\Repositories\TagRepository;
use Illuminate\View\View;

class TagComposer
{
    private $tagRepository;

    public function __construct(TagRepository $tagRepository){
        $this->tagRepository = $tagRepository;
    }

    public function compose(View $view)
    {
        $tags = $this->tagRepository->all();
        $view->with('tags',$tags);
    }
}