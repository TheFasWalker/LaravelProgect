<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('Pages.Admin.posts.index');
    }
    public function create(){
        return view ('Pages.Admin.posts.create');
    }
    public function edit(){
        return view ('Pages.Admin.EditPost');
    }
}
