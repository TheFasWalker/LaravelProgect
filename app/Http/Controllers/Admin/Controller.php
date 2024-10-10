<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;

class Controller extends Controllers\Controller
{
    public function index(){
      
        return view('Pages.Admin.HomePage');
    }
}
