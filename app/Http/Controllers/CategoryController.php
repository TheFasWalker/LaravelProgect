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

    // public function create(){}

    // public function edit(){}

    // public function store(){}

    // public function delete(){}
}
