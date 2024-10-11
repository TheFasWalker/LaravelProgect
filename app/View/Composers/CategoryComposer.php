<?php
namespace App\View\Composers;

use App\Repositories\CategoryRepository;
use Illuminate\View\View;

class CategoryComposer
{
    private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function compose(View $view){
        $categories = $this->categoryRepository->all();
        $view->with('categories',$categories);
    }
    

}
