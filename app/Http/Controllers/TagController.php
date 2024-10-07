<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('Pages.tags.index',compact('tags'));
    }
    
    public function create(){
       return view ('Pages.tags.create');
    }
    
    public function store(){
        $data = request()->validate([
            'title'=>'string'
        ]);
        Tag::create($data);
        return redirect()->route('tags');
        
    }
    
    public function edit(){}
    
    public function update(){}
    
    public function delete(){}
}
