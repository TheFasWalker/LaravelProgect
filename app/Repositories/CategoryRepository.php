<?php 
namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterfase;

class CategoryRepository implements CategoryRepositoryInterfase
{
    public function all()
    {
        return Category::all();
    }
    public function store($data)
    {

    }
    public function update($data,$category)
    {
        $category->update($data);
    }
}