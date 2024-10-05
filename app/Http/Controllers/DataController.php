<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DataController extends Controller
{
    public function index()
    {
        return view('Pages.index');
    }
}
