<?php 
namespace App\Repositories;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Repositories\Interfaces\AdminRepositoryInterfase;

class AdminRepository implements AdminRepositoryInterfase
{
    public function getCount(){

        $publishedPostsCount = Post::where('is_published', true)->where('deleted_at',null)->count();
        $notPublishedPostsCount = Post::where('is_published', false)->where('deleted_at',null)->count();
        $tagsCount = Tag::where('deleted_at',null)->count();
        $categoriesCount = Category::where('deleted_at',null)->count();

        return [
            'postpublished'=> $publishedPostsCount,
            'postnotPublished' => $notPublishedPostsCount,
            'categories'=> $categoriesCount,
            'tags'=>$tagsCount
            
        ];
    }
}