<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('Pages.Admin.tags.index');
    }
    public function create(){
        return view('Pages.Admin.tags.create');
    }
}
