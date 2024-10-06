<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('Pages.category.index', compact('categories'));
    }

    public function create(){
        return view('Pages.category.create');
    }

    public function store(){
    
        $data = request()->validate([
            'title'=>'string'
        ]);

        Category::create($data);
        return redirect()->route('categories');
    }

    public function edit(Category $category){
        // dd($category);
        return view('Pages.category.edit',compact('category'));
    }



    // public function delete(){}
}
