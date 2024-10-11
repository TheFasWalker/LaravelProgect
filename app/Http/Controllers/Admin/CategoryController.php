<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('Pages.Admin.category.index');
    }
    public function create(){
        return view('Pages.Admin.category.create');
    }
}
