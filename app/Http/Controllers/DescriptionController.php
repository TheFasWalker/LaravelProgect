<?php

namespace App\Http\Controllers;


class DescriptionController extends Controller
{
    public function index()
    {
        // dd(gettype(auth()->user()->role));
        return view('Pages.About');
    }
}
