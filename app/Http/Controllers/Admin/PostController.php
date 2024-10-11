<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('Pages.Admin.posts.index');
    }
    public function create(){
        return view ('Pages.Admin.CreatePostPage');
    }
    public function edit(){
        return view ('Pages.Admin.EditPost');
    }
}
