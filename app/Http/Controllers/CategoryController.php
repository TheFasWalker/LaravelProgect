<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{

    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $categories = $this->categoryRepository->all();
        return view('Pages.category.index', compact('categories'));
    }

    public function create(){
        return view('Pages.category.create');
    }

    public function store(StoreRequest $request){
    
        $data = $request->validated();
        $this->categoryRepository->store($data);
        return redirect()->route('categories');
    }

    public function edit(Category $category){
        return view('Pages.category.edit',compact('category'));
    }

    public function update(UpdateRequest $request,Category $category){
        $data = $request->validated();
        $this->categoryRepository->update($data,$category);
        return redirect()->route('categories');

    }



    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('categories');
    }
}
