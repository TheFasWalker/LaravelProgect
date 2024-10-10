<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index(){
        $elemsCount = $this->adminRepository->getCount();
        // dd($elemsCount);
        return view('Pages.Admin.HomePage', compact('elemsCount'));
    }
}
