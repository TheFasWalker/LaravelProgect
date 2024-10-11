<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        return view('Pages.Admin.category.index');
    }
    public function create(){
        return view('Pages.Admin.category.create');
    }
    public function store(StoreRequest $request){

        $data=$request->validated();

        $this->categoryRepository->store($data);
        return redirect()->route('admin.categories');
    }

    public function edit(Category $category){
        return view('Pages.Admin.category.edit',compact('category'));

    }

    public function update(UpdateRequest $request, Category $category){
        $data=$request->validated();
        $this->categoryRepository->update($data, $category);
        return redirect()->route('admin.categories');
    }
}
